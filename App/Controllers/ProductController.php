<?php
namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController{
    function __construct(){
        $this->load_config();
        $this->load_category();
        $this->load_banner();
        $this->load_product();
        $this->load_brand();
        $this->load_country();
    }
    function product(){
        $this->titlepage="Biolife - Shop";
        if (isset($_GET['price']) && $_GET['price'] == 'high') {
            $this->data['product_price_high'];
        }elseif (isset($_GET['price']) && $_GET['price'] == 'low') {
            $this->data['product_price_low'];
        }
        $this->renderView("product",$this->titlepage,$this->data);
    }
    function product_detail(){
        $productModel = new ProductModel;
        $id_detail = $_GET['id'];
        $this->data['detail'] = $productModel->get_one_product($id_detail);
        $this->data['img_detail'] = $productModel->get_img_product($id_detail);
        $this->data['product_random'] = $productModel->get_random_product();
        $this->renderView("product_detail",$this->titlepage,$this->data);
    function add_product_form(){
        $this->renderView("product_detail",$this->titlepage,$this->data);
    }
}}
?> 