<?php
namespace App\Controllers;

use App\Models\Category;

class HomeController extends BaseController{
    public function index(){
        // hiển thị danh sách danh mục
        // 1. lấy dữ liệu danh mục bằng model
        $cates = Category::all();
        $cates->load([
            'products'
        ]);
        // 2. render ra view kèm dữ liệu
        // categories/index.blade.php
        $this->render('categories.index', [
            'cates' => $cates
        ]);
    }

    public function remove(){
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = Category::find($id);
        if($model){
            $model->delete();
        }
        header('location: ' . BASE_URL);
    }

    public function addForm()
    {
        $this->render('categories.add-form');
    }
    public function editForm()
    {
        $cateid = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = Category::find($cateid);
        if(!$model) {
            header('location: ' . BASE_URL); die;
        }
        $this->render('categories.edit-form', compact('model'));
    }

    public function saveAddCate(){
        $data = $_POST;
        $cate = new Category();
        $cate->fill($data);
        
        $cate->save();
        header('location: ' . BASE_URL);
        die;
    }

    public function saveEditCate(){
        $id = $_POST['id'];
        $cate = Category::find($id);
        if($cate) {
            $data = $_POST;
            $data['show_menu'] = isset($data['show_menu']) ? $data['show_menu'] : 0;
            $cate->fill($data);
            $cate->save();
        }
        header('location: ' . BASE_URL); die;
    }

    public function searchCate(){
        $keyword = $_POST['keyword'];
        $cate = Category::where('cate_name', 'like', "%$keyword%")->get();
        $content = "";
        foreach($cate as $item){
            $showmenu = $item->show_menu == 1 ? "yes" : "no" ;
            $content .= "<tr>
                            <td> ". $item->id ." </td>
                            <td>".$item->cate_name."</td>
                            <td>". count($item->products) ."</td>
                            <td>". $showmenu ."</td>
                            <td>
                                <a class='btn btn-sm btn-danger' onclick='confirmRemove('". BASE_URL . 'remove-cate?id=' . $item->id."')' href='javascript:;'>Remove</a>
                                <a class='btn btn-sm btn-info' href='".BASE_URL . 'edit-cate?id=' . $item->id."'>Edit</a>
                            </td>
                        </tr>";
        }
        echo $content;
    }
}

?>