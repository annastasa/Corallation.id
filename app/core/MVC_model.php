<?php
$absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/projek_tassa";
define('BASE_URL','http://localhost/projek_tassa');
$BASE_URL = BASE_URL;

session_start();
require "$absolute_path/app/controller/connector_db.php";
require "$absolute_path/app/core/app.php";
require "$absolute_path/app/views/template/header.php";
// var_dump($page);
// echo $page->page_name;
?>