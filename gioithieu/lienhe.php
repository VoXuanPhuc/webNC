<?php
session_start();
require_once('../Controllers/LienheController.php');
$controller_obj = new LienheController();
$controller_obj->list();