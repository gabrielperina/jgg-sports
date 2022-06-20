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
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" author="Jonatas Ferreira">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anotações</title>
    <link rel="stylesheet" href="../css/style7.css">
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
		<td class="anotname"><h1>Minhas </h1></td><td><h1>Anotações</h1></td>
	<tr><form action="editanot.php" id="formulario" name="formulario" method="post" class="box2" >
		<td class="teste"><h4>Anotações</h4></td>	
		<td>
			<textarea value="" name="anot" id="anot" maxlength="200" class="anotteste"><?php echo $dado["anot"];?></textarea><input type="submit" name="submit" placeholder="Registrar" id="validar" value="Salvar" class="inputeste">
	</tr></td>
	

	</form>
</table>
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