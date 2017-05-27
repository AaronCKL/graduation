<?php
session_start();
if(isset($_SESSION['ID'])){
    $_SESSION = array();//使session为空数组。
    session_destroy();//销毁session;
}
$home_url = '/bs/index.php';
header('Location:'.$home_url);
?>