<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" author="Jonatas Ferreira">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style4.css">
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
<body>
    <!–  criação do menu –>

    <nav class="menu">
    <ul>
        <li><a href="../pags/inicio.php">INÍCIO</a></li>
        <li><a href="../pags/noticias.php">NOTÍCIAS</a></li>
            <li><a href="../pags/transferencias.php">TRANSFERÊNCIAS</a></li>
            <li><a href="../pags/classificacao.php">COPA 2022</a></li>
            <li><a href="home.php">CONTA</a>
            <ul>
                <li><a href="registro.php">Criar conta</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </li>
    </ul>
</nav>
        <!–  criação do logo JGG –>
     <a href="../pags/inicio.php"><img src="../img/logo2.png" class="logo"> </a>

    <form action="testelogin.php" method="POST" class="box">
        <a><h1>LOGIN</h1></a>
        
      
        <input type="email" placeholder="Digite o seu email..." name="email" id="email" maxlength="50">
      
        <input type="password" placeholder="Digite sua senha..." name="senha" id="senha" maxlength="50" minlength="6">

        <input type="submit" name="submit" id="validar" value="Entrar" >
        <a class="voltar" href="registro.php">Cadastre-se</a>
        <a class="voltar" href="home.php">Voltar</a>
     
     
    </form>

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