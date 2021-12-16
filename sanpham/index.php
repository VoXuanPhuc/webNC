<?php
session_start();
$mod = isset($_GET['act']) ? $_GET['act'] : "cart";
require_once('../Controllers/DetailController.php');
$controller_obj = new DetailController();
switch ($mod) {
    case 'voteSp':
        if (isset($_GET['id'])) {
            $controller_obj->checkVote($_GET['id'], $_GET['MaHD']);
        } else {
            $controller_obj->list();
        }
        break;
    case 'saveVote':
        $controller_obj->vote();
        break;
    default:
        $controller_obj->list();
        break;
}
