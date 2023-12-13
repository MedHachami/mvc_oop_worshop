<?php

Class Database{
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pwd = '';
    private $db_name = 'workshop_db';

    private $conn;
    private $stmt;

    public function __construct()
    {
        $this->connect();
    }

    public function connect(){
        $this->conn = new mysqli("localhost","root","","workshop_db");

        if($this->conn->connect_error){
            dd($this->conn->connect_error);

        }
    }

    public function query($sql){
        $this->stmt = $this->conn->prepare($sql);
    }

    public function execute(){
        return $this->stmt->execute();
    }

    public function fetchAll(){
        $this->execute();
        $result = $this->stmt->get_result();
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return $rows;
    }
    public function single(){
        $this->execute();
        $result = $this->stmt->get_result();
        $row = $result->fetch_assoc();
        return $row;
    }








}