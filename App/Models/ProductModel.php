<?php
namespace App\Models;
 class ProductModel{
    private $db;
    function __construct(){
        $this->db=new DatabaseModel;
    }
    function get_random_product(){
        $sql="SELECT * FROM db_product ORDER BY RAND() LIMIT 4";
        return $this->db->get_all($sql);
    }
    // lấy sản phẩm theo số lượng đã bán ra
    function get_product($view, $limit){
        $limit1 = ($view - 1)*$limit;
        $sql = "SELECT * FROM db_product WHERE status = 1 ORDER BY sold_count DESC LIMIT $limit1,$limit";
        return $this->db->get_all($sql);
    }
    // lấy sản phẩm có giá giảm nhiều nhất
    function get_product_promotion(){
        $sql = "SELECT * FROM db_product WHERE status = 1 ORDER BY promotion DESC";
        return $this->db->get_all($sql);
    }
    // lấy sản phẩm mới nhất
    function get_product_new(){
        $sql = "SELECT * FROM db_product WHERE status = 1 ORDER BY id ASC";
        return $this->db->get_all($sql);
    }
    // lấy sản phẩm theo view
    function get_product_view(){
        $sql = "SELECT * FROM db_product WHERE status = 1 ORDER BY view DESC";
        return $this->db->get_all($sql);
    }
    // lọc sản phẩm theo giá cao -> thấp và thấp -> cao
    function get_product_where_price_high($view, $limit){
        $limit1 = ($view - 1)*$limit;
        $sql="SELECT * FROM db_product WHERE status = 1 ORDER BY price DESC LIMIT $limit1,$limit";
        return $this->db->get_all($sql);
    }
    function get_product_where_price_low($view, $limit){
        $limit1 = ($view - 1)*$limit;
        $sql="SELECT * FROM db_product WHERE status = 1 ORDER BY price ASC LIMIT $limit1,$limit";
        return $this->db->get_all($sql);
    }
    // lấy sản phẩm theo danh mục
    function get_product_where_category(){
        $sql = "SELECT pro.*, cate.slug AS slug
                FROM db_product AS pro
                JOIN db_category AS cate ON pro.id_category = cate.id
                WHERE pro.id_category = cate.id";
        return $this->db->get_all($sql);
    }
    // lấy 1 sản phẩm
    function get_one_product($id_detail){
        $sql = "SELECT pro.*, cate.name AS cateName 
                FROM db_product AS pro
                JOIN db_category AS cate ON pro.id_category = cate.id
                WHERE pro.id = $id_detail";
        return $this->db->get_one($sql);
    }
    // lấy hình ảnh của sản phẩm
    function get_img_product($id_detail){
        $sql = "SELECT * FROM db_img WHERE product_id = $id_detail";
        return $this->db->get_all($sql);
    }
    // Hàm đếm đẻ phân trang
    function count(){
        $sql = "SELECT COUNT(*) FROM db_product";
        return $this->db->get_all($sql);
    }
    // Thêm sản phẩm vào trong giỏ hàng
    function get_product_cart($id_detail){
       $sql="SELECT * FROM db_product WHERE id = $id_detail";
       $product =  $this->db->get_one($sql);
       return $product;
    }
    function cart_insert($data){
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'][] = $data;
        } else {
            $cart = $_SESSION['cart'];
            $existing_product_key = null;
            // Kiểm tra xem sản phẩm tương ứng đã tồn tại trong giỏ hàng chưa
            foreach ($cart as $key => $item) {
                if ($item['id'] == $data['id']) {
                    $existing_product_key = $key;
                    break;
                }
            }
            if ($existing_product_key !== null) {
                // Nếu sản phẩm tương ứng đã tồn tại, thì cập nhật số lượng
                $cart[$existing_product_key]['qty'] += $data['qty'];
            }else {
                // Nếu sản phẩm tương ứng chưa tồn tại, thêm sản phẩm mới
                $cart[] = $data;
            }
            $_SESSION['cart'] = $cart;
        }
    }
    function cart_content(){
        if (isset($_SESSION['cart'])) {
            $cart = array_values($_SESSION['cart']); //Row cart là mảng 2 chiều
            return $cart;
        }
        return NULL;
    }
    function update_cart($data){
        $cart = $this->cart_content();
        foreach ($cart as $key => $item) {
            if ($item['id'] == $data[$key]['id']) {
                if ($data[$key]['qty'] == 0) {
                    unset($_SESSION['cart']);
                } else {
                    $cart[$key]['qty'] = $data[$key]['qty']; //Thay đổi số lượng sp 
                }
            }
        }
        $_SESSION['cart'] = array_values($cart);
    }
}
?>