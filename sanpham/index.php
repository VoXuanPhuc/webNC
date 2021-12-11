<?php
session_start();
$mod = isset($_GET['act']) ? $_GET['act'] : "cart";
require_once('../Controllers/DetailController.php');
$controller_obj = new DetailController();
switch ($mod) {
    case 'vote':
        $controller_obj->vote();
        break;
    default:
        
        $controller_obj->list();
        break;
}
