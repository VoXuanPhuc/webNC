<?php
$act = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($act) {
    case "home":
        require_once("home/home.php");
        break;
    case "checkout":
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        switch ($act) {
            case 'list':
                require_once("order/checkout.php");
                break;
            case 'order_complete':
                require_once("order/order_complete.php");
                break;
            default:
                require_once("order/checkout.php");
                break;
        }
        break;
    case "cart":
        require_once("cart/cart.php");
        break;
    
    default:
        require_once("error-404.php");
        break;
}