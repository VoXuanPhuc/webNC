<?php
session_start();
$mod = isset($_GET['act']) ? $_GET['act'] : "list";
require_once('../Controllers/ShopController.php');
$controller_obj = new ShopController();
switch ($mod) {
    case 'loctheogia':
        $controller_obj->loctheogia();
        break;
    case 'list':
        $controller_obj->list();
        break;
    default:
        $controller_obj->list();
        break;
}
