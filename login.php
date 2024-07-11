<?php
// Retrieve submitted username and password
$username =  $_POST["username"];
$password =  $_POST["password"];
// You can use the retrieved credentials for further processing,
// such as checking against a database or implementing a login logic...
echo  "Username:"  .$username;
echo  "Password:"  .$password; // avoid printing in real case..
?>