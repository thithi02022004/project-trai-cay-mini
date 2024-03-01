<?php
namespace App\Models;
 class CountryModel{
    private $db;
    function __construct(){
        $this->db=new DatabaseModel;
    }
    function get_country(){
        $sql="SELECT * FROM db_country";
        return $this->db->get_all($sql);
    }
    

    }
?>