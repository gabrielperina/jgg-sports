<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" author="Jonatas Ferreira">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JGG Esportes</title>
    <link rel="shortcut icon" type="imagex/png" href="img/icon.ico">
    
    <style type="text/css">

                /* logo JGG */

        .logo{
            width:121px;
            padding-top: 8px;
            padding-left: 1.4px;
            position: fixed;
            }
        
        *{margin:0 auto;
          padding:0; 
          scroll-behavior: smooth;
          box-sizing: border-box;
          font-family: 'montserrat', sans-serif;
          }

            /* criação do menu */

          .menu{
            width: 100%;
            height: 59px;
            background-color: #1e272e;
            position: fixed;
            }

          .menu ul{
            list-style: none;
            position: relative;
            max-width: 900px;
            }

          .menu ul li{
            width: 180px;
            float: left;
            }

          .menu a{
            padding: 20px;
            display: block;
            text-decoration: none;
            text-align: center;
            background-color: #1e272e;
            color: #fff;
           }
              
          .menu ul ul{
            position: absolute;
            visibility: hidden;
            }

          .menu ul li:hover ul{
            visibility: visible;
           }

          .menu a:hover{
            background-color: #CCCCCC;
            color: #0D1045;
            }
          .menu ul ul li{
            float: none;
            }

            /* body inicio */

          .content-site{
            padding-top: 200px;
            padding-bottom: 200px;
            }

          .text-center{
            text-transform: uppercase;
            text-align: center;
            font-size: 25px;
            color: white; text-shadow: black 0.1em 0.0em 0.2em
           }

            /* first background parallax */

          .imagem1-site{
            background-image: url(img/1.jpg);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            color:black;
            padding-top: 500px;
            padding-bottom: 300px;
            }

            /* scnd background parallax */

          .imagem2-site{
            background-image: url(img/3.jpg);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            color:black;
            padding-top: 500px;
            padding-bottom: 300px;
            }

            /* thirt background parallax */

          .imagem3-site{
            background-image: url(img/iniciomessi.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            color:black;
            padding-top: 500px;
            padding-bottom: 300px;
            }

            /* fourth background parallax */

          .imagem4-site{
            background-image: url(img/iniciocr7.jpg);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            color:black;
            padding-top: 500px;
            padding-bottom: 300px;
            }

            /* botao cadastre-se */
            
          .btn{
            color: #ffff;
            text-shadow: black 0.1em 0.0em 0.2em
            }

            /* rodapé */

          #footer{
            width:100%;
            height:60px;
            background-color: #1e272e;
            color:white;
            text-align: center;
            padding-top:20px;
            }

            /* botão back to top */

          #btop{
            position: fixed;
            bottom: 5px;
            right: 100px;
            height: 50px;
            width: 50px;
            background: #1e272e;
            border:none;
            border-radius: 100%;
            display: none;
            }

          #imgbt{
            width: 30px;
            }


            </style>

</head>

<body>

        <!–  criação do menu –>

    <nav class="menu">
    <ul>
        <li><a href="pags/inicio.php">INÍCIO</a></li>
        <li><a href="pags/noticias.php">NOTÍCIAS</a></li>
            <li><a href="pags/transferencias.php">TRANSFERÊNCIAS</a></li>
            <li><a href="pags/classificacao.php">CLASSIFICAÇÃO</a></li>
            <li><a href="login/perfil.php">CONTA</a>
            <ul>
                <li><a href="login/registro.php">Criar conta</a></li>
                <li><a href="login/login.php">Login</a></li>
            </ul>
        </li>
    </ul>
</nav>
        <!–  criação do logo JGG –>
     <a href="pags/inicio.php"><img src="img/logo2.png" class="logo"> </a>

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
                    <a href="login/registro.php" class="btn">Cadastre-se</a>
                </p>

            </div>

        </div>

    </div>

</section>

        <!–  criação do botao back to top –>

 <button onclick="backToTop()"id="btop"><img src="img/btop.png" style="cursor:pointer"alt="Voltar ao Topo" id="imgbt" ></button>
    

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
