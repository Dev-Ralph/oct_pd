<?php
require '../resources/php/db/connect.php';
if(isset($_POST['register'])){
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO `oct`(`username`, `password`, `email`) VALUES ('$username','$password','$email')";
$data = $pdo->prepare($sql);
$data->execute();
}
?>
