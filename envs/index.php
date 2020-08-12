<?php 
require_once dirname(__FILE__)."/config.php";
$dir_root = basename($_SERVER['DOCUMENT_ROOT']);
$c_env="local";
foreach ($ENVS as $env => $path) {
  if ($dir_root == basename($path)){
    $c_env=$env;
    break;
  }
}
require_once dirname(__FILE__)."/{$c_env}".".php";

$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$mysqli -> connect_errno) {
  if(!$mysqli -> select_db(DB_NAME)){
    $sql = 'CREATE DATABASE ' . DB_NAME;
    $mysqli -> query($sql);
  }
}
$mysqli -> close();
?>