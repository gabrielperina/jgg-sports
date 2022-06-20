<?php
session_start();
include_once('conexao.php');
$email = $_SESSION['email'];



$nome = $_POST['nome'];
$senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);
$result = "SELECT * FROM usuarios WHERE email = '$email'";
$con = $mysqli->query($result);
$row = mysqli_fetch_assoc($con);
        $result = mysqli_query($mysqli, "UPDATE usuarios SET nome = '$nome', senha = '$senha' WHERE email = '$email'");
      echo '<script>alert("Como sua senha foi alterada, será necessário realizar o Login novamente!");
      window.location.href = "login.php";
      </script>';