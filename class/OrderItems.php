<?php

class OrderItems{

    private $db;

    public function __construct() { 
        include 'db.php';
        $this->db = $db;
    }

    public function tampil_order_items() { //melihat keranjang
        return $this->db->query("SELECT * FROM order_items");
    }

    public function tambah_order_items($menu_item_id) {
       return $this->db->query("INSERT INTO order_items (menu_item_id) VALUES ($menu_item_id)");
       
    }
    public function hapus_order_items($order_id, $menu_item_id) { //menghapus dari keranjang
        return $this->db->query("DELETE FROM order_items WHERE order_id = '$order_id' AND menu_item_id = '$menu_item_id'");
    }

}