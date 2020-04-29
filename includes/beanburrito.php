<?php
include_once 'tacobell.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$upwd = $_POST['upwd'];



$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_upwd) VALUES ('$first', '$last ', '$email', '$uid', '$upwd')";
mysqli_query($conn, $sql);

header("location: ../index.php?signup=meme");