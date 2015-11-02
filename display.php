<?php
/**
 * Created by PhpStorm.
 * User: 1202663
 * Date: 02/11/2015
 * Time: 13:32
 */

$username = $_POST["username"];
$password = $_POST["password"];

setcookie('access_level', 'standarduser');

if($username == "nicktotty" && $password == "1202663"){
    echo "Welcome" . $username . " " . "<br>" . "Log In Successful";
}
else{
    echo "Log in failed";
}
