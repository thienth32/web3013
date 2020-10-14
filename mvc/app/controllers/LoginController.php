<?php
namespace App\Controllers;
use App\Models\User;
class LoginController extends BaseController{
    public function loginForm(){
        $msg = isset($_GET['msg']) ? $_GET['msg'] : "";
        $this->render('auth.login', compact('msg'));
    }

    public function postLogin(){
        # Lấy data từ form
        $email = $_POST['email'];
        $password = $_POST['password'];

        # dựa vào email để lấy ra user
        $user = User::where('email', $email)->first();
        # nếu user tồn tại và password nhập đúng với password trong db
        if($user && password_verify($password, $user->password)){
            # tạo session
            $data = [
                'id' => $user->id,
                'email' => $user->email,
                'avatar' => $user->avatar,
                'name' => $user->name,
                'role' => $user->role
            ];
            $_SESSION[AUTH] = $data;
            header('location: ' . BASE_URL);
            die;
        }

        header('location: ' . BASE_URL . 'login?msg=Email hoặc mật khẩu không đúng');
        die;
    }

    public function logout(){
        unset($_SESSION[AUTH]);
        header('location: ' . BASE_URL);
        die;
    }
}

?>