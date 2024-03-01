<?php
namespace App\Controllers;
class AdminController extends BaseController{
    function __construct(){
        $this->load_config();
        $this->load_category();
        $this->load_banner();
        $this->load_product();
        $this->load_brand();
        $this->load_country();
    }
    function dashboard(){
        $this->titlepage="Biolife - Food";
        $this->renderView("backend/dashboard",$this->titlepage,$this->data);
    }
}
?> 