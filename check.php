<?php
/**
 * Created by PhpStorm.
 * User: Yuejiaqun
 * Date: 2018/3/19
 * Time: 20:36
 */

header("content-type:text/html;charest=utf8");
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
if($user=='admin' && $pass=="123456"){
    $href="index.html";
}else{
    $href="login.html";
}


//include_once 'login.html';