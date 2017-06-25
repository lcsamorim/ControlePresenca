<meta charset="UTF-8">
<?php
include("baseSession.php");
$numfreq = @$_POST['numfreq'];
$data = @$_POST['data'];
$consultaquant = "SELECT * FROM tbaluno";
                    $resultconsulta = $conexao->prepare($consultaquant);
    $resultconsulta->execute();
    $contarconsulta = $resultconsulta->rowCount();
                    $consultanome = "SELECT * FROM tbaluno where numfreq='$numfreq'";
                    foreach ($conexao->query($consultanome) as $linhadados) {
            $nome =  $linhadados['nome'];
        $sqlcontagemnome = "SELECT nome from tbfalta WHERE nome='$nome'";
             $resultadocn = $conexao->prepare($sqlcontagemnome);
$resultadocn->execute();   
$contagemnome = $resultadocn->rowCount();
        $sqlcontagemdata = "SELECT data from tbfalta WHERE data='$data'";
                     $resultadocd = $conexao->prepare($sqlcontagemdata);
        $resultadocd->execute();   
        $contagemdata = $resultadocd->rowCount();
if($numfreq<=$contarconsulta && $contagemnome>0 && $contagemdata ){
    if(isset($_POST['acao']) && $_POST['acao'] == "enviar"){
                        
                    }
           $sqlfinal = "DELETE FROM tbfalta where nome='$nome' and data='$data'";
    $conexao->query($sqlfinal);
       echo "<script>alert('Remoção executada com sucesso!');
location.href='delete.php';
</script>";         
}else{
    echo "<script>alert('Remoção não executada! Verifique os campos e tente novamente.');
location.href='delete.php';
</script>";
}
                    }
    
                    
                    ?>    