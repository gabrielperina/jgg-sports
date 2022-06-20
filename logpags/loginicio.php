<?php
    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../pags/inicio.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" author="Jonatas Ferreira">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JGG Esportes</title>
    <link rel="stylesheet" href="../css/style3.css">
    <link rel="shortcut icon" type="imagex/png" href="../img/icon.ico">
    
    <style type="text/css">

                /* logo JGG */

        .logo{
            width:121px;
            padding-top: 8px;
            padding-left: 1.4px;
            position: fixed;
            }

    </style>

</head>

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

        <!–  criação do background parallax –>

<section class="imagem1-site">
   

    <div class="container">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Tudo sobre o mundo do futebol voce encontra aqui</h1>

            </div>

        </div>

    </div>

</section>

<section class="imagem2-site">

    <div class="container">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Noticias em tempo real totalmente gratuito</h1>

            </div>

        </div>

    </div>

</section>


<section class="imagem3-site">

    <div class="container">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Mercado de transferências mais badalado do mundo</h1>

            </div>

        </div>

    </div>

</section>

<section class="imagem4-site">

    <div class="container">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Crie sua conta agora mesmo!</h1>
                <p class="text-center">
                    <a href="../login/registro.php" class="btn">Cadastre-se</a>
                </p>

            </div>

        </div>

    </div>

</section>

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
     </script>
     
</body>
</html>
