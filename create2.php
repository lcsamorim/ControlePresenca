<meta charset="UTF-8">
<?php
include("baseSession.php");
$palavra  = $_POST['palavra'];
$palavra = "SELECT * from tbaluno WHERE numfreq LIKE '$palavra'";
	$result = $conexao->prepare($palavra);
    $result->execute();
    $contar = $result->rowCount();
    foreach ($conexao->query($palavra) as $linha) {
        
    }
    if($contar<=0){
        echo "Erro! Número de chamada inexistente!";
    }else{
        echo "(".$linha['nome'].")";
    }
    
    
    
?>