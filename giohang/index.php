<?php
session_start();
$mod = isset($_GET['act']) ? $_GET['act'] : "cart";
switch ($mod) {
    case 'cart':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once('../Controllers/CartController.php');
        $controller_obj = new CartController();
        switch ($act) {
            case 'list':
                $controller_obj->list_cart();
                break;
            case 'update':
                $controller_obj->update_cart();
                break;
            case 'add':
                $controller_obj->add_cart();
                break;
            case 'delete':
                $controller_obj->delete_cart();
                break;
            case 'deleteall':
                $controller_obj->deleteall_cart();
                break;
            default:
                $controller_obj->list_cart();
                break;
        }
        break;
    default:
        require_once('../Controllers/CartController.php');
        $controller_obj = new CartController();
        break;
}