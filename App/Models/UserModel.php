<?php
namespace App\Models;
 class UserModel{
    private $db;
    function __construct(){
        $this->db=new DatabaseModel;
    }
    function register_add($name,$phone,$email,$password,$address){
        $sql = "INSERT INTO db_user (name, phone, email, password, address) value(?,?,?,?,?)";
        return $this->db->insert($sql, $name,$phone,$email,$password,$address);
    }
    function check_login($pass, $phone){
        $sql = "SELECT * FROM db_user WHERE password = $pass AND phone = $phone";
        return $this->db->get_one($sql);
    }
    

    }
?>