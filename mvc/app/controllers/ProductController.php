<?php
namespace App\Controllers;

use App\Models\Product;
class ProductController extends BaseController{
    public function index(){
        $pros = Product::all();
        //2. Render ra view kèm dữ liệu
        $this->render('products.index', [
            'pros' => $pros
        ]);
    }
    public function remove(){
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = Product::find($id);
        if($model){
            $model->delete();
        }
        header('location: ' . BASE_URL . 'san-pham');
    }
    public function addForm()
    {
        $this->render('products.add-pro');
    }
    public function editForm()
    {
        $proid = isset($_GET['id']) ? $_GET['id']  : -1;
        $model = Product::find($proid);
        if(!$model){
            header('location: ' . BASE_URL . 'san-pham');
        }
        $this->render('products.edit-pro', compact('model'));

    }

    public function saveAddPro(){
        $data = $_POST;
        $pro = new Product();
        $pro->fill($data);
        
        $pro->save();
        header('location: ' . BASE_URL . 'san-pham');
        die;
    }
    public function saveEditPro(){
        $id = $_POST['id'];
        $pro = Product::find($id);
        if($pro) {
            $data = $_POST;
            $pro->fill($data);
            $pro->save();
        }
        header('location: ' . BASE_URL . 'san-pham'); die;
    }
}

?>