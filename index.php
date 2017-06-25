<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
ob_start();
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Controle de presença</title>
        <link rel="shortcut icon" href="img/ico/controledepresenca.ico">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
            <p style="font-size:30px; margin-left:30px;margin-top:20px;">Controle de presença</p><hr />           
        <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12" style="margin-top:5%">
                            <form name="loginform" method="post" action="">
        <center>
            <h2>Entre com seus dados</h2>
           <div style="border:1px solid #ddd; width:270px; height:200px;background-color:#f9f9f9">
            E-mail: <input style="margin-top:20px; " type="email" name="email" placeholder="Digite aqui seu e-mail"><br><br>
            Senha:  <input type="password" name="senha" placeholder="Digite aqui sua senha"><br><br>
            <input class="btn btn-danger" style="width:225px" type="submit" name="logar" value="Entrar">
            </div>
             </center>
                 </form>
                                </div>
                            </div>
                </div>   
            <?php 
            if(isset($_SESSION['usuario1'])&& isset($_SESSION['senha1'])){
    header ("location: home.php");exit;
}
include("conexao.php");
if(isset($_POST['logar'])){
$email = $_POST['email'];
$senha = $_POST['senha'];
$select = "SELECT * FROM tblogin WHERE email='$email' and senha='$senha'";
try {

    $result = $conexao->prepare($select);
    $result->execute();
    $contar = $result->rowCount();
    if($contar>0){
        $_SESSION['usuario1'] = $email;
        $_SESSION['senha1'] = $senha;
        echo "<center><br><br><div class='alert alert-success'><strong>Login executado com sucesso! </strong> <p>Você está sendo redirecionado</p></div></center>";
        header("Refresh: 2, home.php");
    }else{
        echo "<center><br><br><div class='alert alert-danger'><strong>Os campos não foram digitados corretamente!</strong></div></center>";
    }
    
} catch (PDOException $e) {
    echo $e;
}

} 
             include("rodape.php");
             ?>
   
            
    </body>
</html>
