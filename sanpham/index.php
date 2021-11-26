<?php
session_start();
require_once('../Controllers/DetailController.php');
$controller_obj = new DetailController();
$controller_obj->list();
