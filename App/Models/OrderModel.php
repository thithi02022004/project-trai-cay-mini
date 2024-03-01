<?php
namespace App\Models;
 class OrderModel{
    private $db;
    function __construct(){
        $this->db=new DatabaseModel;
    }
    
    function list_order(){
        $sql = "SELECT * FROM db_order";
        return $this->db->get_all($sql);
    }
    function order_rowid($id) {
        $sql = "SELECT * FROM db_order WHERE id = $id";
        return $this->db->get_one($sql);
    }
    function order_row_detail($id) {
        $sql = "SELECT * FROM db_orderdetail WHERE id_order = $id";
        return $this->db->get_all($sql);
    }
    function order_confirm($stage, $id){
        $sql = "UPDATE db_order SET stage=? WHERE id=?";
        return $this->db->update($sql, $stage, $id);
    }
    function get_last_order_id(){
        $sql = "SELECT * FROM db_order ORDER BY id DESC LIMIT 1";
        $result = $this->db->get_one($sql);
        return $result["id"];
    }
    function insert_order($id_user, $name, $phone, $email, $address, $total, $created_at, $exported_at){
        $sql = "INSERT INTO db_order (id_user, customer_name, customer_phone, customer_email, customer_address, total, created_at, exported_at) VALUES(?,?,?,?,?,?,?,?)";
        $this->db->insert($sql, $id_user, $name, $phone, $email, $address, $total, $created_at, $exported_at);
        $id_order = $this->get_last_order_id();
        foreach ($_SESSION['cart'] as $key => $item) {
            $sql_order_detail = "INSERT INTO db_orderdetail (id_order, id_product, product_name, quantity, price, img)
                                VALUES(?,?,?,?,?,?)";
        $this->db->insert($sql_order_detail, $id_order, $item['id'], $item['name'], $item['qty'], $item['price'], $item['img']);
        }
    }
    }
?>