<!DOCTYPE>
<html>
<head>
</head>
<body>
<form action="index.php" method="post">
<label>Username: </label>
    <input type="text" name="username">
    <br>
<label>Password: </label>
    <input type="password" name="password">
    <br>
<input type="submit" value="Submit">
</form>

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
    echo "Welcome " . $username . "<br>" . "Log In Successful";

    setcookie('access_level', 'standarduser');
    setcookie('username', $username);
    }
else if($username == "" && $password == ""){
    echo "Enter your details plz bud p.s the password is ******";
}
else {
    echo "Log in failed";
}
?>
</body>
</html>
