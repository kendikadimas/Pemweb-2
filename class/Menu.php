<?php

class Menu {

    private $db;

    public function __construct() {

        include 'db.php';

        $this->db = $db;
    }

    public function tampil_menu() {
        return $this->db->query("SELECT * FROM menu_items");
    }

    public function tambah_menu($name, $price, $category) {
        return $this->db->query("INSERT INTO menu_items (name, price, category) VALUES ('$name', '$price', '$category')");
    }   

    public function hapus_menu($id) {
        return $this->db->query("DELETE FROM menu_items WHERE id = '$id'");
    }       

    public function edit_menu($id, $name, $price, $category) {
        return $this->db->query("UPDATE menu_items SET name = '$name', price = '$price', category = '$category' WHERE id = '$id'");
    }
}