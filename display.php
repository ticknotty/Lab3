<?php
/**
 * Created by PhpStorm.
 * User: 1202663
 * Date: 02/11/2015
 * Time: 13:32
 */

$username = $_POST["username"];
if($username == "Nick" && $password == "123"){
    echo "Log In Successful";
}
else{
    echo "Log in failed";
}
$password = $_POST["password"];
echo "Log In Successful";