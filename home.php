 <?php 
 include("baseSession.php");
?>

<html>
    <head>
        <title>Home</title>
        <link rel="shortcut icon" href="img/ico/controledepresenca.ico">
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include("baseMenu.php")
        ?>
        <div class="container">
            <div class="row">
              <center>
                  <a href="create.php"><div class="col-md-4 create crud vintage_straps-font"><br>Adicionar ausência(s)<img src="img/home/create.png" alt=""/></div></a>
                  <a href="read.php"><div class="col-md-4 read crud vintage_straps-font"><br>Consultar ausência(s)<img src="img/home/read.png" alt=""/></div></a>
                  <a href="delete.php"><div class="col-md-4 delete crud vintage_straps-font"><br>Deletar ausência(s)<img src="img/home/delete.png" alt=""/></div></a>
              </center>
            </div>
        </div>
        <?php
           include("rodape.php");
        ?>
    </body>
</html>