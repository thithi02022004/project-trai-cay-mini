<?php
namespace App\Controllers;
class HomeController extends BaseController{
    function __construct(){
        $this->load_config();
        $this->load_category();
        $this->load_banner();
        $this->load_product();
        $this->load_brand();
        $this->load_country();
    }
    function home(){
        $this->titlepage="Biolife - Food";
        $this->renderView("home",$this->titlepage,$this->data);
    }
}
?> 