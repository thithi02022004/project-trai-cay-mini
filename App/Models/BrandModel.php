<?php
namespace App\Models;
 class BrandModel{
    private $db;
    function __construct(){
        $this->db=new DatabaseModel;
    }
    function get_brand(){
        $sql="SELECT * FROM db_brand ";
        return $this->db->get_all($sql);
    }
    function get_brand_limit(){
        $sql="SELECT * FROM db_brand LIMIT 6";
        return $this->db->get_all($sql);
    }
    

    }
?>