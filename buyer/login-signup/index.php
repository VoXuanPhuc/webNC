<?php
session_start();
$mod = isset($_GET['act']) ? $_GET['act'] : "taikhoan";
switch ($mod) {
    case 'taikhoan':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "taikhoan";
        require_once('../../Controllers/LoginController.php');
        $controller_obj = new LoginController();
        if ((isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true)) {
            switch ($act) {
                case 'dangxuat':
                    $controller_obj->dangxuat();
                    break;
                case 'account':
                    $controller_obj->account();
                    break;
                case 'info':
                    $controller_obj->info();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    header('location: index.php');
                    break;
            }
            break;
        } else {
            if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true)) {
                switch ($act) {
                    case 'dangxuat':
                        $controller_obj->dangxuat();
                        break;
                    case 'account':
                        $controller_obj->account();
                        break;
                    case 'info':
                        $controller_obj->info();
                        break;
                    case 'update':
                        $controller_obj->update();
                        break;
                    default:
                        header('location: ?act=home');
                        break;
                }
                break;
            } else {
                switch ($act) {
                    case 'login':
                        $controller_obj->login();
                        break;
                    case 'dangnhap':
                        $controller_obj->login_action();
                        break;
                    case 'dangky':
                        $controller_obj->dangky();
                        break;
                    default:
                        $controller_obj->login();
                        break;
                }
                break;
            }
        }
    default:
        require_once('../../Controllers/LoginController.php');
        $controller_obj = new LoginController();
        $controller_obj->login();
        break;
}
