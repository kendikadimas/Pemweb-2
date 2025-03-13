<?php
include 'class/db.php';
include 'class/OrderItems.php';

// Buat instance dari class OrderItems
$orderItems = new OrderItems();

// Proses tambah ke keranjang
if (isset($_POST['tambahKeranjang'])) {
    $menu_item_id = $_POST['menu_item_id']; // Ambil menu_item_id dari form
    $orderItems->tambah_order_items($menu_item_id); // Tambahkan ke keranjang
    header("Location: keranjang.php"); // Redirect ke keranjang.php
    exit();
}