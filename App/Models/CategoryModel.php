<?php
namespace App\Models;
 class CategoryModel{
    private $db;
    function __construct(){
        $this->db=new DatabaseModel;
    }
    function get_category(){
        $sql="SELECT * FROM db_category";
        return $this->db->get_all($sql);
    }
    function get_category_limit(){
        $sql="SELECT * FROM db_category LIMIT 6";
        return $this->db->get_all($sql);
    }
    function insert_category($name, $status){
        $sql="INSERT INTO db_category (name, status) VALUES(?,?)";
        return $this->db->insert($sql,$name, $status);
    }

    }
?>