<?php
include("baseSession.php");
?>
<html>
    <head>
        <title>Consultar ausência(s)</title>
        <link rel="shortcut icon" href="img/ico/read.ico">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="js/jsread.js" type="text/javascript"></script>
        <style>
            html {
    position: relative;
    min-height: 100%;
}
        body{
              background:url("img/read/background.png") center center no-repeat fixed;
               background-size: cover;
               margin: 0 0 60px;
            } 
            #voltarhome{
                color:black;
                opacity:.8;
                text-decoration:none;
            }
            #voltarhome:hover{
                color:black;
                opacity:1;
            }
        #marginlink{
                margin-top:19.4%;
                position:fixed;
            }
    </style>
    </head>
   
    
    <body>
        <?php
        include("baseMenu.php");
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Consultar ausência(s)</h2>
                   <h3>Pesquisar pelo número da frequência:</h3>
                    <form name="form-read" action="" method="POST">
                        Digite o número da frequência do(a) aluno(a):<br><div class="col-md-2"><input class="form-control" type="number" name="numfreq" id="numfreq" required></div>
                    </form>
                  <br><br><b class="resultado"></b>
                </div>
                <div id="marginlink" class="col-md-offset-8">
                    <a id="voltarhome" href="home.php">Voltar para a página inicial</a>
                </div>
            </div>
        </div>
        <?php
           include("rodape.php");
        ?>
    </body>
</html>

