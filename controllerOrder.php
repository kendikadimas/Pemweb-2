<?php

include 'class/Orders.php';

if(isset($_POST['Checkout'])) {

    $orders->tambah_orders( $status);
}