 <?php 
 ob_start();
session_start();
            if(!isset($_SESSION['usuario1'])&& !isset($_SESSION['senha1'])){
    header ("location: index.php");exit;
}
include("conexao.php");
if(isset($_REQUEST['sair'])){
    session_destroy();
    session_unset($_SESSION['usuario1']);
    session_unset($_SESSION['senha1']);
    header("location: index.php");
}
?>

<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <style>
            .crud{
                min-height:90%; 
                max-height:100%; 
                border-left:2px solid white;
                border-right:2px solid white;
                color:white;
                font-family:vintage straps;
                font-size:50px;
                line-height: 44px;
            }
            .create{
                background-color: #f8ae32;
            }
            .read{
                background-color: #08a1b3;
            }
            .update{
                background-color: #199e83;
            }
            .delete{
                background-color: #ff5d56;
            }
            img{
                margin-top:30%;
            }
            .menu{
                
                background-color:gainsboro;
                
            }
            a{
                text-decoration:none;
                color:black;
            }
        </style>
        <div class="container">
    <ul class="menu">
       
                
            <li><a href='#'><?php 
     
            $sql = "SELECT * FROM tblogin where email='$_SESSION[usuario1]'";
            foreach ($conexao->query($sql) as $linha) {
                echo $linha['nome'];
            }
            ?></a></li>
            <li><a href="?sair" onclick="return confirm('Deseja realmente sair?');">Sair</a>
                </li>
    </ul>

            <div class="row">
              <center>
                <div class="col-lg-3 create crud"><br>Adicionar ausência(s)<img src="img/home/create.png" alt=""/></div>
                <div class="col-lg-3 read crud"><br>Consultar ausência(s)<img src="img/home/read.png" alt=""/></div>
                <div class="col-lg-3 update crud"><br>Atualizar ausência(s)<img src="img/home/update.png" alt=""/></div>
                <div class="col-lg-3 delete crud"><br>Deletar ausência(s)<img src="img/home/delete.png" alt=""/></div>
              </center>
            </div>
        </div>
        <?php
           include("rodape.php");
        ?>
    </body>
</html>