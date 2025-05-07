<?php
require 'User.php';

$user = new User();
$user->register($_POST['username'], $_POST['email'], $_POST['password']);
?>
