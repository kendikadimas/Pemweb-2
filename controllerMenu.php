<?php
include 'class/Menu.php';

$menu = new Menu();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $menu->hapus_menu($id);
    header("Location: index.php");
}

if (isset($_POST['editMenu'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $menu->edit_menu($id, $name, $price, $category);
    header("Location: index.php");
}

if(isset($_POST['tambahMenu'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $menu->tambah_menu($name, $price, $category);
    header("Location: index.php");
}


