<?php
    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../pags/classificacao.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" author="Jonatas Ferreira">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copa do Mundo 2022</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="imagex/png" href="../img/icon.ico">

    <style>

        /* criação do background */

        .background {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.9)), url(../img/fundo2.jpg);
            background-attachment: fixed;
            background-position: auto center;
            background-size: cover;
            border: 1px solid black;
            }

        /* edição tabela - classificação */

        table {
            border-collapse: collapse;
            border-radius: 30px;
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


    <div class="background">

        <!–  inserção logo JGG –>

        <a href="../logpags/loginicio.php"><img src="../img/logo2.png" class="logo"></a>
        <br><br><br><br>

        <!–  criação do body - classificação –>

    <h1>COPA DO MUNDO 2022</h1>
    <br><hr><br><br>    
    <div><p><h2>A copa do mundo será realizada no Qatar, 32 países estarão participando do campeonato, onde apenas 1 sairá vitorioso conforme a imagem abaixo:</p><br><br>
    <img src="../img/copa1.jpg" class="copa1"></div></h2>

    <div><p><h2>A Fifa sorteou na tarde desta sexta-feira os grupos da Copa do Mundo.</p><p> O evento foi realizado em Doha, no Catar.</p><p> O Brasil está no Grupo G do Mundial e vai estrear no dia 24 de novembro contra a Sérvia, às 16h (de Brasília). </p><p>Suíça e Camarões completam a chave da Seleção, que fugiu de Holanda e Alemanha. </p><p>Os tetracampeões mundiais enfrentarão a Espanha.</p><br><br>
    <img src="../img/copa2.jpg" class="copa1"></div></h2>

    <p class="tabela"><h2>A TABELA DA COPA:</p>
<br>
    <p>FASE DE GRUPOS</p> </h2>

    <h3>21/11 (segunda-feira)</h3><br>
    <ul>7h Senegal x Holanda, no Al Thumama</ul>
    <ul>10h Inglaterra x Irã, no Khalifa</ul>
    <ul>13h Catar x Equador, no Al Bayt Stadium</ul>
    <ul>16h Estados Unidos x País de Gales ou Escócia ou Ucrânia, no Ahmad Bin Ali (Al Rayyan)</ul>
    <br>
    <h3>22/11 (terça-feira)</h3><br>
    <ul>7h Argentina x Arábia Saudita, no Lusail</ul>
    <ul>10h Dinamarca x Tunísia, no Education City</ul>
    <ul>13h México x Polônia, no 974 (Porto de Doha)</ul>
    <ul>16h França x Peru ou Austrália ou Emirados Árabes, no Al Janoub (Al Wakrah)</ul>
    <br>
    <h3>23/11 (quarta-feira)</h3><br>
    <ul>7h Marrocos x Croácia, no Al Bayt</ul>
    <ul>10h Alemanha x Japão, no Khalifa</ul>
    <ul>13h Espanha x Costa Rica ou Nova Zelândia, no Al Thumama</ul>
    <ul>16h Bélgica x Canadá, no Ahmad Bin Ali (Al Rayyan)</ul>
    <br>
    <h3>24/11 (quinta-feira)</h3><br>
    <ul>7h Suíça x Camarões, no Al Janoub (Al Wakrah)</ul>
    <ul>10h Uruguai x Coreia do Sul, no Education City</ul>
    <ul>13h Portugal x Gana, no 974 (Porto de Doha)</ul>
    <ul>16h Brasil x Sérvia, no Lusail</ul>
    <br>
    <h3>25/11 (sexta-feira)</h3><br>
    <ul>7h País de Gales ou Escócia ou Ucrânia x Irã, no Ahmad Bin Ali (Al Rayyan)</ul>
    <ul>10h Catar x Senegal, no Al Thumama</ul>
    <ul>13h Holanda x Equador, no Khalifa</ul>
    <ul>16h Inglaterra x Estados Unidos, no Al Bayt</ul>
    <br>
    <h3>26/11 (sábado)</h3><br>
    <ul>7h Tunísia x Peru ou Austrália ou Emirados Árabes, no Al Janoub (Al Wakrah)</ul>
    <ul>10h Polônia x Arábia Saudita, no Education City</ul>
    <ul>13h França x Dinamarca, no 974 (Porto de Doha)</ul>
    <ul>16h Argentina x México, no Lusail</ul>
    <br>
    <h3>27/11 (domingo)</h3><br>
    <ul>7h Japão x Costa Rica ou Nova Zelândia, no Ahmad Bin Ali (Al Rayyan)</ul>
    <ul>10h Bélgica x Marrocos, no Al Thumama</ul>
    <ul>13h Croácia x Canadá, no Khalifa</ul>
    <ul>16h Espanha x Alemanha, no Al Bayt</ul>
    <br>
    <h3>28/11 (segunda-feira)</h3><br>
    <ul>7h Camarões x Sérvia, no Al Janoub (Al Wakrah)</ul>
    <ul>10h Coreia do Sul x Gana, no Education City</ul>
    <ul>13h Brasil x Suíça, no 974 (Porto de Doha)</ul>
    <ul>16h Portugal x Uruguai, no Lusail</ul>
    <br>
    <h3>29/11 (terça-feira)</h3><br>
    <ul>12h Holanda x Catar, no Al Bayt</ul>
    <ul>12h Equador x Senegal, no Khalifa</ul>
    <ul>16h País de Gales ou Escócia ou Ucrânia x Inglaterra, no Ahmad Bin Ali (Al Rayyan)</ul>
    <ul>16h Irã x Estados Unidos, no Al Thumama</ul>
    <br>
    <h3>30/11 (quarta-feira)</h3><br>
    <ul>12h Tunísia x França, no Education City</ul>
    <ul>12h Peru ou Austrália ou Emirados Árabes x Dinamarca, no Al Janoub (Al Wakrah)</ul>
    <ul>16h Polônia x Argentina, no 974 (Porto de Doha)</ul>
    <ul>16h Arábia Saudita x México, no Lusail</ul>
    <br>
    <h3>1º/12 (quinta-feira)</h3><br>
    <ul>12h Croácia x Bélgica, no Ahmad Bin Ali (Al Rayyan)</ul>
    <ul>12h Canadá x Marrocos, no Al Thumama</ul>
    <ul>16h Japão x Espanha, no Khalifa</ul>
    <ul>16h Costa Rica ou Nova Zelândia x Alemanha, no Al Bayt</ul>
    <br>
    <h3>2/12 (sexta-feira)</h3><br>
    <ul>12h Coreia do Sul x Portugal, no Education City</ul>
    <ul>12h Gana x Uruguai, no Al Janoub (Al Wakrah)</ul>
    <ul>16h Camarões x Brasil, no Lusail</ul>
    <ul>16h Sérvia x Suíça, no 974 (Porto de Doha)</ul>
<br><br>
    <h2>OITAVAS DE FINAL</h2>

    <h3>3/12 (sábado)</h3><br>
    <ul>12h 1A x 2B, Khalifaa Stadium (V49)</ul>
    <ul>16h 1C x 2D, Ahmad Bin Ali (Al Rayyan) (V50)</ul>
    <br>
    <h3>4/12 (domingo)</h3><br>
    <ul>12h 1D x 2C, Al Thumama Stadium (V52)</ul>
    <ul>16h 1B x 2A, Al Bayt Stadium (V51)</ul>
    <br>
    <h3>5/12 (segunda-feira)</h3><br>
    <ul>12h 1E x 2F, Al Janoub Stadium (V53)</ul>
    <ul>16h 1G x 2H 974 (Porto de Doha) (V54)</ul>
    <br>
    <h3>6/12 (terça-feira)</h3><br>
    <ul>12h 1F x 2E Education City Stadium (V55)</ul>
    <ul>16h 1H x 2G Lusail Stadium (V56)</ul>
<br><br>
    <h2>QUARTAS DE FINAL</h2>   

    <h3>09/12 (sábado)</h3><br>
    <ul>12h V53 x V54, Education City Stadium (V58)</ul>
    <ul>16h V49 x V50, Lusail Stadium (V57)</ul>
    <br>
    <h3>10/12 (domingo)</h3><br>
    <ul>12h V55 x V56, Al Thumama Stadium (V60)</ul>
    <ul>16h V51 x V52, Al Bayt Stadium (V59)</ul>
<br><br>
    <h2>SEMIFINAL</h2>

    <h3>13/12 (terça-feira)</h3><br>
    <ul>16h V57 x V58, Lusail Stadium</ul>
    <br>
    <h3>14/12 (quarta-feira)</h3><br>
    <ul>16h V59 x V60, Al Bayt Stadium</ul>
<br><br>
    <h2>DECISÃO DO TERCEIRO LUGAR</h2>

    <h3>17/12 (sábado)</h3><br>
    <ul>12h Khalifa Stadium</ul>
<br><br>
    <h2>FINAL</h2><br>

    <h5>18/12 (domingo)</h5>
    <h5>12h Lusail Stadium</h5>
    <br>
    <br>
    <br>
        
</div>
 
        <!–  criação do botao back to top –>

        <button onclick="backToTop()"id="btop"><img src="../img/btop.png" style="cursor:pointer" alt="Voltar ao Topo" id="imgbt" ></button>
    
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