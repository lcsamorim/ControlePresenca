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
     $nometbaluno = @$linha['nome'];
    
$pegarnome = "SELECT * from tbaluno where nome='$nometbaluno'";  
$resultnome = $conexao->prepare($pegarnome);
    $resultnome->execute();
foreach ($conexao->query($pegarnome) as $linhapegar) {
    }
     @$nometbfalta = $linhapegar['nome'];
    if($contar<=0){
        echo "Erro! Número de chamada inexistente!";
    }else{
             
         if($nometbaluno===$nometbfalta){
     $sqlc = "SELECT nome from tbfalta WHERE nome='$nometbfalta'";
             $resultado = $conexao->prepare($sqlc);
$resultado->execute();   
$contagem2 = $resultado->rowCount();
if($contagem2>0){
    $sql = "SELECT * from tbfalta WHERE nome='$nometbfalta'";
             $resultsql = $conexao->prepare($sql);
$resultsql->execute();
foreach ($conexao->query($sql) as $linhasql) {
    
    $data = date('d/m/Y', strtotime($linhasql['data']));
       $aulasfaltadas = $linhasql['aulasfaltadas'];
       
        echo "<table class='table-hover'>
			<tbody>
                             <tr>
			        <h4><b>".$linhasql['nome']."</b>:</h4>
                                    <td>No dia: <b>".$data."</b></td>
                                    <td>&nbsp;faltou a(s) aula(s): <b>".$aulasfaltadas."</b>.</td>
                             </tr>
                        </tbody>
             </table>";
		}
	

    
}else{
     echo "<table class='table-hover'>
			<tbody>
                             <tr>
                                <h4><b>".$nometbfalta."</b>:</h4>
                                    <td>Nenhuma falta foi registrada.</td>
                             </tr>
                        </tbody>
             </table>";
        }
    }
    
} 
        ?>