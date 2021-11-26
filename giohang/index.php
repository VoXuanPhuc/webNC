<?php
session_start();
require_once('../Controllers/CartController.php');
$controller_obj = new CartController();
$controller_obj->list_cart();
?>