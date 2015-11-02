<?php
/**
 * Created by PhpStorm.
 * User: 1202663
 * Date: 02/11/2015
 * Time: 13:32
 */

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "nicktotty" && $password == "1202663"){
    echo "Log In Successful";
}
else{
    echo "Log in failed";
}
