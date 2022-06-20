<?php
	session_start();

	if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		header('Location: ../login/login.php');
	}
	//$email = $_SESSION['email'];
	//$nome = $_SESSION['nome'];
	include_once('conexao.php');
	$email = ($_SESSION['email']);
	$consulta = "SELECT * FROM usuarios WHERE email = '$email'";
	$con = $mysqli->query($consulta);
	
	if(isset($_FILES['arquivo'])){
		$arquivo = $_FILES['arquivo'];
		if($arquivo['size'] > 2097152)
			die("Arquivo muito grande!");
	if($arquivo['error'])
		die("Falha ao enviar o arquivo");

	$pasta = "arquivo/";
	$nomeDoArquivo = $arquivo['name'];
	$novoNomeDoArquivo = uniqid();
	$extensao = strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION));
	
	if($extensao != "jpg" && $extensao !="png")
		die("Tipo de arquivo não aceito");
	$path = $pasta . $novoNomeDoArquivo . "." . $extensao;
	$deu_certo = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomeDoArquivo . "." . $extensao);
	if($deu_certo) {
		$mysqli->query("UPDATE usuarios SET name = '$nomeDoArquivo' ,path = '$path' WHERE email = '$email'");
		header('Refresh:0');
	}
	}

	if(isset($_POST['submit']))
      {
            include_once('conexao.php');

            $nome = $_POST['nome'];

            $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome) VALUES ('$nome')");}

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $sql_exec = $mysqli->query($sql) or die(mysqli->error);
	$result = $mysqli->query($sql);

	$usuario = $sql_exec->fetch_assoc();
	if(password_verify($senha, $usuario['senha'])){
	$_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;}
			
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" author="Jonatas Ferreira">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
	    <link rel="stylesheet" href="../css/style5.css">
	    <link rel="shortcut icon" type="imagex/png" href="../img/icon.ico">
    
    <style type="text/css">

                /* logo JGG */

        .logo{
            width:121px;
            padding-top: 8px;
            padding-left: 1.4px;
            position: fixed;
            z-index: 2;
            }

    </style>
<body>
    <!–  criação do menu –>

    <nav class="menu">
    <ul>
        <li><a href="../logpags/loginicio.php">INÍCIO</a></li>
        <li><a href="../logpags/lognoticias.php">NOTÍCIAS</a></li>
            <li><a href="../logpags/logtransferencias.php">TRANSFERÊNCIAS</a></li>
            <li><a href="../logpags/logclassificacao.php">COPA 2022</a></li>
            <li><a href="../login/perfil.php">MEU PERFIL</a>
            <ul>
                <li><a href="../login/editperfil.php">Editar Perfil</a></li>
                <li><a href="../login/sair.php">Sair</a></li>
            </ul>
        </li>
    </ul>
</nav>
        <!–  criação do logo JGG –>
     <a href="../logpags/loginicio.php"><img src="../img/logo2.png" class="logo"> </a>
<div class="textobody">
			
<table>
	<?php while($dado = $con->fetch_array()){ ?>
		<td><h1>Editar Perfil</h1></td>
	<tr><form  action="editregistro.php" id="formulario" name="formulario" method="post" class="box2" >
		<td><h4>Nome</h4></td>
		<td>
			<input type="text" value="<?php echo $dado["nome"];?>" name="nome" id="nome" maxlength="22"><img src="../img/olho.png" class="olho2" display="none"></label></a><input type="submit" name="submit" placeholder="Registrar" id="validar" value="Alterar" class="inputeste">
	</tr></td>
	<tr>
		<td><h4>E-mail</h4></td>
		<td><?php echo $dado["email"];?></td>
	</tr>
	<tr>
		<td><h4>CPF</h4></td>
		<td><?php echo $dado["cpf"];?></td>
	</tr>
	<tr>
		<td><h4>Senha</h4></td>
		<td><input type="password" value="<?php echo $_SESSION["senha"]; ?>" name="senha" id="senha" maxlength="255" minlength="6"><a class="custom-checkbox"><input type="checkbox" id="checkbox-1" onclick="mostrarOcultarSenha()"><label for="checkbox-1"><img src="../img/olho.png" class="olho"></label></a><input type="submit" name="submit" placeholder="Registrar" id="validar" value="Alterar" class="inputeste"></td>
	</tr>

	</form>
</table>
</div>

<div class="testeinput">
				<p><form method="post" enctype="multipart/form-data" action="">
				<div class="btninput">
					<img src="../img/cam.jpg" alt="Selecione uma imagem" id="imgPhoto">
				</div>
				<input name="arquivo" type="file" id="flImage"> 
				<div class="btninput">
				<input type="submit" value=""></p>
			</div></form>
</div>
<div class="action">
	<div class="menuperfil">

	<div class="profile">
		
        <div class="upload">

		<img src="<?php echo $dado['path']; ?> ">
		
    </div>
</form>
		</div>
	<h3><?php echo $dado["nome"];?><br><span><?php echo $dado["email"];?></span></h3>
	<ul>
		<li><img src="../img/perfil.png"><a href="perfil.php">Meu Perfil</a></li>
		<li><img src="../img/edit.png"><a href="editperfil.php">Editar Perfil</a></li>
		<li><img src="../img/anot.png"><a href="anot.php">Anotações</a></li>
		<li><img src="../img/sair.png"><a href="sair.php">Sair</a></li>
	</ul>
</div>
</div>
<?php } ?>
</div>

	<!–  criação do botao back to top –>

 <button onclick="backToTop()"id="btop"><img src="../img/btop.png" style="cursor:pointer"alt="Voltar ao Topo" id="imgbt" ></button>
    

        <!–  criação do rodapé –>

     <div id="footer"> © Todos os direitos reservados a JGG Esportes</div>

         <!–  javascript botao back to top –>

     <script type="text/javascript">
        window.onscroll=function(){
            scroll()   
        }
        function scroll(){
            var btn = document.getElementById("btop");
                if (document.documentElement.scrollTop > 100){
                    btn.style.display = "block";
                }else {
                    btn.style.display = "none";
            }
        }
        function backToTop(){
            document.documentElement.scrollTop = 0;
        }

        'use strict'

        let photo = document.getElementById('imgPhoto');
        let file = document.getElementById('flImage');

        photo.addEventListener('click', () =>{
        	file.click();
        });


        function mostrarOcultarSenha(){
        	var senha=document.getElementById("senha");
        	if(senha.type=="password"){
        		senha.type="text";
        	} else{
        		senha.type="password";
        	}
        }
        </script>
</body>
</html>