<?php
session_start();
include_once('conexao.php');
$email = $_SESSION['email'];
$result = "SELECT * FROM usuarios WHERE email = '$email'";
$con = $mysqli->query($result);
$row = mysqli_fetch_assoc($con);

$anot = $_POST['anot'];

        $result = mysqli_query($mysqli, "UPDATE usuarios SET anot = '$anot' WHERE email = '$email'");

      header('Location: anot.php');
?>