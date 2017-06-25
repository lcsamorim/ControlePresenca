<?php
include("baseSession.php");
?>
<html>
    <head>
        <title>Adicionar ausência(s)</title>
        <link rel="shortcut icon" href="img/ico/create.ico">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="js/javascript.js" type="text/javascript"></script>
        <style>
            body{
              background-image:url("img/create/background.png");
               width:100%;
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
                margin-top:27.1%;
            }
        </style>
    </head>
    <body>
        <?php
        include("baseMenu.php")
        ?>
        
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><label>Adicionar ausência(s)</label></h2>
                    <form id="form-pesquisa" action="create3.php" method="post">
                        Digite o número da frequência do(a) aluno(a):<br><div class="col-md-2"><input class="form-control" type="text" name="numfreq" id="numfreq" required></div><br><br>
                        Digite a data da(s) ausência(s) do(a) aluno(a):<br><div class="col-md-5"><input class="form-control" type="date" name="data" id="data" required></div>
                        <b class="resultado"></b><br><br>
                        <label>Selecione a(s) aula(s) que ele(a) faltou:</label><br>
                        <input type="checkbox" name="aula[]" value='1'>1ª aula<br>
                        <input type="checkbox" name="aula[]" value='2'>2ª aula<br>
                        <input type="checkbox" name="aula[]" value='3'>3ª aula<br>
                        <input type="checkbox" name="aula[]" value='4'>4ª aula<br>
                        <input type="checkbox" name="aula[]" value='5'>5ª aula<br>
                        <input type="checkbox" name="aula[]" value='6'>6ª aula<br>
                        <input type="checkbox" name="aula[]" value='7'>7ª aula<br>
                        <input type="checkbox" name="aula[]" value='8'>8ª aula<br>
                        <input type="checkbox" name="aula[]" value='9'>9ª aula<br>
                        <input type='hidden' name="acao" value="enviar">
                        <input class="btn btn-default" type='submit' value="Enviar">
                    </form>
                    
                   
                </div>
               <div id="marginlink" class="col-md-offset-10">
                    <a id="voltarhome" href="home.php">Voltar para a página inicial</a>
                </div>
            </div>
            
        </div>
        <?php
           include("rodape.php");
        ?>
    </body>
</html>


