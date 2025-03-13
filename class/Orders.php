<?php

class Orders {
    
    private $db;

    public function __construct() {
        include 'db.php';
        $this->db = $db;
    }

    function tampil_orders(){
        return $this->db->query("SELECT * FROM orders");
    }

    function tambah_orders($status){
        $status = "Pending";
        return $this->db->query("INSERT INTO orders ( status) VALUES ( '$status')");
    }

    function hapus_orders($id){
        return $this->db->query("DELETE FROM orders WHERE id = '$id'");
    }   

    function edit_orders($id, $user_id, $order_date, $status){
        return $this->db->query("UPDATE orders SET user_id = '$user_id', order_date = '$order_date', status = '$status' WHERE id = '$id'");
    }   

    
}