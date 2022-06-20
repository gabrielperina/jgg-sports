<?php
	session_start();

	if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{

		include_once('conexao.php');
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$sql = "SELECT * FROM usuarios WHERE email = '$email'";
		$sql_exec = $mysqli->query($sql) or die(mysqli->error);
		$result = $mysqli->query($sql);

		$usuario = $sql_exec->fetch_assoc();
		if(password_verify($senha, $usuario['senha'])){
			echo "usuario logado";
			$_SESSION['email'] = $email;
			$_SESSION['senha'] = $senha;
			header('Location: perfil.php');
		} else{
			unset($_SESSION['email']);
			unset($_SESSION['senha']);
			
			$message = "E-mail ou senha incorretos";
			echo "<SCRIPT> 
			        alert('$message')
			        window.location.replace('login.php');
			    </SCRIPT>";
			    mysql_close();
		}
		}
?>