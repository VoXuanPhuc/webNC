<?php
session_start();
$mod = isset($_GET['act']) ? $_GET['act'] : "checkout";
switch ($mod) {
    case 'checkout':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once('../Controllers/CheckoutController.php');
        $controller_obj = new CheckoutController();
        switch ($act) {
            case 'list':
                $controller_obj->list();
                break;
            case 'save':
                $controller_obj->save();
                break;
            case 'add':
                $controller_obj->order_complete();
                break;
            default:
                $controller_obj->list();
                break;
        }
        break;
    case 'order-error':
        require_once('../Controllers/CheckoutController.php');
        $controller_obj = new CheckoutController();
        $controller_obj->list();
        break;         
        
    default:
        require_once('../Controllers/CheckoutController.php');
        $controller_obj = new CheckoutController();
        $controller_obj->list();
        break;
}