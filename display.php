<?php
/**
 * Created by PhpStorm.
 * User: 1202663
 * Date: 02/11/2015
 * Time: 13:32
 */

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "Nick" && $password == "abc"){
    echo "Log In Successful";
}
else{
    echo "Log in failed";
}