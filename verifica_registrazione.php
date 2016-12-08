<?php
include 'utils.php';
$username= anti_injection($_POST["username_reg"]);
$password= sha1($_POST["password_reg"]);
$email= anti_injection($_POST["mail_reg"]);
$societa= anti_injection($_POST["societa"]);
$password_societa= sha1($_POST["password_societa"]);





