<?php
namespace App\Controllers;

use App\Models\User;
class UserController extends BaseController{
    public function index(){
        $users = User::all();
        //2. Render ra view kèm dữ liệu
        $this->render('users.index', [
            'users' => $users
        ]);
    }
    public function remove(){
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = User::find($id);
        if($model){
            $model->delete();
        }
        header('location: ' . BASE_URL . 'tai-khoan');
    }
    public function addForm()
    {
        $this->render('users.add-user');
    }
    public function editForm()
    {
        $userid = isset($_GET['id']) ? $_GET['id']  : -1;
        $model = User::find($userid);
        if(!$model){
            header('location: ' . BASE_URL . 'tai-khoan');
        }
        $this->render('users.edit-user', compact('model'));

    }

    public function saveAddUser(){
        $data = $_POST;
        $user = new User();
        $user->fill($data);
        
        $user->save();
        header('location: ' . BASE_URL . 'tai-khoan');
        die;
    }
    public function saveEditUser(){
        $id = $_POST['id'];
        $user = User::find($id);
        if($user) {
            $data = $_POST;
            $user->fill($data);
            $user->save();
        }
        header('location: ' . BASE_URL . 'tai-khoan'); die;
    }
}

?>