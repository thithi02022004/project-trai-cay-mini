<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\OrderModel;

class UserController extends BaseController{
    function __construct(){
        $this->load_config();
        $this->load_category();
        $this->load_banner();
        $this->load_product();
        $this->load_brand();
        $this->load_country();
    }
    function show_login(){
        $this->titlepage="Biolife - Food";
        $this->data["config"];
        $this->data["category"];
        $this->data['category_limit'];
        $this->data['country'];
        $this->renderView("login",$this->titlepage,$this->data);
    }
    function login(){
        $userModel = new UserModel;
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
        if (isset($phone) && isset($pass)) {
            $user = $this->data['customer'] = $userModel->check_login($pass, $phone);
            if ($user == true) {
                $_SESSION['user'] = $user;
                header('location: /php/PHP2/ASM/ASM2/');
            }else {
                header('location: /php/PHP2/ASM/ASM2/show_login');
            }
        }else {
            header('location: /php/PHP2/ASM/ASM2/show_login');
        }
    }
    function show_register(){
        $this->titlepage="Biolife - Food";
        $this->renderView("register",$this->titlepage,$this->data);
    }
    function register_add(){
        // var_dump($_REQUEST);
        $userModel = new UserModel;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        // var_dump($_REQUEST);
        $this->data['user'] = $userModel->register_add($name,$phone,$email,$password,$address);
        header('location: /php/PHP2/ASM/ASM2/show_login');
    }
    function account(){
        
        $this->renderView("account",$this->titlepage,$this->data);
    }
    function logout(){
        unset($_SESSION['user']);
        header('location: /php/PHP2/ASM/ASM2/');
    }
    function cancel(){
        $orderModel = new OrderModel;
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'home';
        $id=$_GET['id'];
        $row = $orderModel->order_rowid($id);
        $stag = ($row['stage'] == 1) ? 6 : 1;
        $stage = $stag;
        $orderModel->order_confirm($stage, $id);
        header("location: $referer");  
    }
    function order_history(){
        $this->titlepage="Lịch sử đơn hàng";
        $orderModel = new OrderModel;
        $this->data['order'] = $orderModel->list_order();
        $this->renderView("order_history",$this->titlepage,$this->data);
    }
    function order_detail_user(){
        $this->titlepage="Chi tiết đơn hàng";
        $orderModel = new OrderModel;
        $id = $_GET['id'];
        $this->data['orderdetail'] = $orderModel->order_row_detail($id);
        // var_dump($this->data['orderdetail']); die();
        $this->renderView("order_detail",$this->titlepage,$this->data);
    }
}
?> 