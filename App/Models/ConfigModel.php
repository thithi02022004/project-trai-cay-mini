<?php
namespace App\Models;
 class ConfigModel{
    private $db;
    function __construct(){
        $this->db=new DatabaseModel;
    }
    function get_config(){
        $sql="SELECT * FROM db_config";
        return $this->db->get_all($sql);
    }
    

    }
?>