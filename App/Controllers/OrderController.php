<?php
namespace App\Controllers;

use App\Models\OrderModel;

class OrderController extends BaseController{
    function __construct(){
        $this->load_order();
    }
    function list_order(){
        $this->titlepage="Quản lý đơn hàng";
        $this->renderView("backend/order/list_order",$this->titlepage,$this->data);
    }
    function trash_order(){
        $this->titlepage="Lịch sử đơn hàng";
        $this->renderView("backend/order/trash",$this->titlepage,$this->data);
    }
    function order_detail(){
        $this->titlepage="Chi tiết đơn hàng";
        $orderModel = new OrderModel;
        $id = $_GET['id'];
        $this->data['order'] = $orderModel->order_rowid($id);
        $this->data['orderdetail'] = $orderModel->order_row_detail($id);
        // var_dump($this->data['orderdetail']); die();
        $this->renderView("backend/order/order_detail",$this->titlepage,$this->data);
    }
    function stage(){
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'list_order';
        $orderModel = new OrderModel;
        $id = $_GET['id'];
        $row = $orderModel->order_rowid($id);
            if ($row['stage'] == 1) {
                $stag = ($row['stage'] == 1) ? 2 : 1;
                $stage = $stag;
                $orderModel->order_confirm($stage, $id);
            }elseif ($row['stage'] == 2) {
                $stag = ($row['stage'] == 2) ? 3 : 2;
                $stage = $stag;
                $orderModel->order_confirm($stage, $id);
            }elseif ($row['stage'] == 3) {
                $stag = ($row['stage'] == 3) ? 4 : 3;
                $stage = $stag;
                $orderModel->order_confirm($stage, $id);
            }elseif ($row['stage'] == 4) {
                $stag = ($row['stage'] == 4) ? 5 : 4;
                $stage = $stag;
                $orderModel->order_confirm($stage, $id);
            }
        header("location: $referer");  
    }
    
   
}
?> 