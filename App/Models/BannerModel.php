<?php
namespace App\Models;
 class BannerModel{
    private $db;
    function __construct(){
        $this->db=new DatabaseModel;
    }
    function get_banner(){
        $sql="SELECT * FROM db_banner ";
        return $this->db->get_all($sql);
    }
    

    }
?>