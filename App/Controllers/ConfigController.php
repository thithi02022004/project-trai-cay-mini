<?php
namespace App\Controllers;
// use App\Models\ProductModel;
class ConfigController extends BaseController{
    // private $pro;
    function __construct(){
    //    $this->pro=new ProductModel;
    }
    function home(){
        $this->titlepage="Biolife - Food";
        
        // var_dump($this->data);
        $this->renderView("home",$this->titlepage,$this->data);
    }
   
}
?> 