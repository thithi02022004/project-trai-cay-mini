<?php
namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\ProductModel;

class CartController extends BaseController{
    function __construct(){
        $this->load_config();
        $this->load_category();
        $this->load_banner();
        $this->load_product();
        $this->load_brand();
        $this->load_country();
    }
    function view_cart(){
        $this->titlepage="Biolife - Food";
        $this->renderView("cart",$this->titlepage,$this->data);
    }
    function add_cart(){
        // var_dump($qty);
        $productModel = new ProductModel;
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'home';
        if (isset($_SESSION['user'])) {
        $id_detail = $_GET['id'];
        $sp = $productModel->get_product_cart($id_detail);
        $qty = $_POST['qty'] ?? 1;
        $data = array(
            'id' => $sp['id'],
            'name' => $sp['name'],
            'img' => $sp['img'],
            'material' => $sp['material'],
            'price' => $sp['price'],
            'qty' => $qty
        );
        $productModel->cart_insert($data);
        
            header("location: $referer");
        }else {
            header("location: /php/PHP2/ASM/ASM2/show_login");
        }
    }
    function update_cart(){
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'home';
        $productModel = new ProductModel;
        $id_cart = $_POST['id_cart'];
        $qty_update = $_POST['qty_update'];
        $data = array();
        foreach ($id_cart as $key => $id) {
            $row = array(
                'id' => $id,
                'qty' => $qty_update[$key],
            );
            $data[] = $row;
        }
        $productModel->update_cart($data);
        header("location: $referer");
    }
    function clear_cart(){
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'home';
        unset($_SESSION['cart']);
        header("location: $referer");
    }
    function checkout(){
        $this->renderView("checkout",$this->titlepage,$this->data);
    }
    function handle_checkout(){
        $orderModel = new OrderModel;
        $id_user = $_POST['id_user'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $total = $_POST['total'];
        $created_at = date('Y-m-d H:i:s');
        $exported_at = date('Y-m-d H:i:s');
        $orderModel->insert_order($id_user, $name, $phone, $email, $address, $total, $created_at, $exported_at);
            
        header("location: /php/PHP2/ASM/ASM2/");
    }
}
?> 