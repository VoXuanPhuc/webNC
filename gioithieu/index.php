<?php
session_start();
require_once('../Controllers/GioithieuController.php');
$controller_obj = new GioithieuController();
$controller_obj->list();