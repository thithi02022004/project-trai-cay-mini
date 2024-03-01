<?php
namespace App\Controllers;

use App\Models\CategoryModel;

class CategoryController extends BaseController{
    function __construct(){
        $this->load_config();
        $this->load_category();
        $this->load_banner();
        $this->load_product();
        $this->load_brand();
        $this->load_country();
    }
    function list_category(){
        $this->titlepage="Biolife - Food";
        $this->data['category'];
        $this->renderView("backend/category/list_category",$this->titlepage,$this->data);
    }
    function add_category(){
        $this->renderView("backend/category/add_category",$this->titlepage,$this->data);
    }
    function handle_cate(){
        $categoryModel = new CategoryModel;
        $name = $_POST['name'];
        $status = $_POST['status'];
        $categoryModel->insert_category($name, $status);
        header('location: /php/PHP2/ASM/ASM2/add_category');
    }
}
?> 