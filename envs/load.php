<?php 
$dir_local = "htdocs";
$dir_uat = "uat";

$dir_root = basename($_SERVER['DOCUMENT_ROOT']);
switch ($dir_root){
  case $dir_local:
    require_once ABSPATH . "./wp-config-local.php";
  break;
  case $dir_uat:
    require_once ABSPATH . "./wp-config-uat.php";
  break;
  default:
  require_once ABSPATH . "./wp-config-production.php";
}

$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$mysqli -> connect_errno) {
  if(!$mysqli -> select_db(DB_NAME)){
    $sql = 'CREATE DATABASE ' . DB_NAME;
    $mysqli -> query($sql);
  }
}
$mysqli -> close();
?>