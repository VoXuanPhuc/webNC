<?php
session_start();
require_once('../Controllers/ShopController.php');
$controller_obj = new ShopController();
$controller_obj->list();
