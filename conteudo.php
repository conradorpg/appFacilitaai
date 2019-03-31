<?php
    include "conexao.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM conteudo WHERE id = $id";
    $connection = $mysqli->query($query) or die($mysqli->error);
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Facilita Guia Comercial">
<meta name="author" content="Conrado R P Gomes">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/fontello.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
<link rel="icon" type="imagem/x-icon" href="images/_logos/facilitalogo02.png">

<title>Facilita Guia Comercial</title>

</head>

<!-- Configuração Menu Desktop e Mobile -->

<body class="conteudo-bg">
    <header>
        <div class="container">
            <div class="logo-desktop"><a href="index.html"><img src="images/_logos/facilitalogo.png"></a></div> <!-- logo-desktop -->
                <nav class="desktop">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Horário</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </nav> <!-- desktop -->
            
            <div class="logo-mobile"><a href="index.html"><img src="images/_logos/facilitalogo.png"></a></div> <!-- logo-mobile -->
                <nav class="mobile">
                   <h3><i class="icon-menu"></i></h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="">Sobre</a></li>
                            <li><a href="">Horário</a></li>
                            <li><a href="">Contato</a></li>
                        </ul>
                </nav> <!-- mobile -->
            
            <div class="clear"></div>
        </div> <!-- container -->
    </header>
    
    <!-- Configuração Página Conteúdo -->
        
    <section class="info-empresas">
        <div class="container">
            <?php while($dado = $connection ->fetch_array()) { ?>
                <div class="conteudo">
                    <div><img src="<?php echo $dado['logo']; ?>"></div>
                    <div class="info">
                        <hr><br>                    
                        <i class="icon-phone"></i><h3><?php echo $dado['telefone']; ?></h3>
                        <i class="icon-time"></i><h3><?php echo $dado['horario']; ?></h3>
                        <i class="icon-email"></i><h3><?php echo $dado['email']; ?></h3>
                        <i class="icon-address"></i><h3><?php echo $dado['endereco']; ?></h3><br>
                        <hr>                
                    </div>
                    <div class="botao-voltar">
                        <a href="empresas.html"><i class="icon-th" title="retornar" alt="retornar"></i></a>
                    </div>
                </div> <!-- conteudo -->
            <?php } ?>    
        <div class="clear"></div>
        </div> <!-- container -->
    </section>    
      
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(function(){
            $('nav.mobile h3').click(function(){
                $('nav.mobile ul').slideToggle();
            })
        })
    </script>
</body>
</html> 