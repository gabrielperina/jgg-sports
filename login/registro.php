<?php
      
      if(isset($_POST['submit']))
      {
            include_once('conexao.php');

            $nome = $_POST['nome'];
            $email = ($_POST['email']);
            $cpf = ($_POST['cpf']);
            $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);
           
            $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome,email,cpf,senha) VALUES ('$nome','$email','$cpf','$senha')");

            header('Location: login.php');
      }
     
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" author="Jonatas Ferreira">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
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

      <div class="alert alert-danger" id="alert" role="alert">
      
</div>

    <form  action="registro.php" id="formulario" name="formulario" method="post" class="box2" >
        <a><h1>Criar conta</h1></a>
        
        <input type="nome" placeholder="Digite o seu nome..." name="nome" id="nome" maxlength="22" required>
      
        <input type="email" placeholder="Digite o seu email..." name="email" id="email" maxlength="50" required>
       
        <input type="cpf" name="cpf" maxlength="11" placeholder="Digite o seu CPF..." id="cpf" required>
      
        <input type="password" placeholder="Digite sua senha..." name="senha" id="senha" maxlength="50" minlength="6" required>
        
        <input type="submit" name="submit" placeholder="Registrar" id="validar" onclick="valida()" value="Cadastrar" class="inputUser">
        
        <a class="voltar" href="home.php">Voltar</a>


    </form>

<script>
                function valida()
               {
                  if(valida_cpf(document.getElementById('cpf').value)){
                        
                        document.formulario.submit();}
                  else {
                       alert("Cpf inválido, digite um CPF válido");
                       event.preventDefault();
                       window.location.replace(registro.php);
                      }
                           
            }
            
            function valida_cpf(cpf){
                  var numeros, digitos, soma, i, resultado, digitos_iguais;
                  digitos_iguais = 1;
                  if (cpf.length < 11)
                        return false;
                  for (i = 0; i < cpf.length - 1; i++)
                        if (cpf.charAt(i) != cpf.charAt(i + 1))
                              {
                              digitos_iguais = 0;
                              break;
                              }
                  if (!digitos_iguais)
                        {
                        numeros = cpf.substring(0,9);
                        digitos = cpf.substring(9);
                        soma = 0;
                        for (i = 10; i > 1; i--)
                              soma += numeros.charAt(10 - i) * i;
                        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                        if (resultado != digitos.charAt(0))
                              return false;
                        numeros = cpf.substring(0,10);
                        soma = 0;
                        for (i = 11; i > 1; i--)
                              soma += numeros.charAt(11 - i) * i;
                        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                        if (resultado != digitos.charAt(1))
                              return false;
                        return true;
                        }
                  else
                        return false;
            }

          
</script>

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