<?php
include_once 'config/Database.php';


Class UserModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database();

    }

    public function getAllUsers(){
        $this->db->query("SELECT * FROM user");
        return $this->db->fetchAll();
    }

    public function getUserById($id){
        $this->db->query("SELECT * FROM user WHERE id = '$id'; ");
        return $this->db->single();
    }

    public function updataUser($data){
        $id = $data['id'];
        $fullName = $data['fullName'];
        $email = $data['email'];
        $this->db->query("UPDATE user SET fullName = '$fullName' , email = '$email' WHERE id = '$id'  ");
        return $this->db->execute();
    }


}
