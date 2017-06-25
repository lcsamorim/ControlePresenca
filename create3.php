<meta charset="UTF-8">
<?php
include("baseSession.php");
                    $data = @$_POST['data'];
                    $primeira = @$_POST['1'];
                    $segunda = @$_POST['2'];
                    $terceira = @$_POST['3'];
                    $quarta = @$_POST['4'];
                    $quinta = @$_POST['5'];
                    $sexta = @$_POST['6'];
                    $setima = @$_POST['7'];
                    $oitava = @$_POST['8'];
                    $nona = @$_POST['9'];
                    $numfreq = @$_POST['numfreq'];
                    $consultaquant = "SELECT * FROM tbaluno";
                    $resultconsulta = $conexao->prepare($consultaquant);
    $resultconsulta->execute();
    $contarconsulta = $resultconsulta->rowCount();
                    $consultanome = "SELECT * FROM tbaluno where numfreq='$numfreq'";
                    foreach ($conexao->query($consultanome) as $linhadados) {
            $nome =  $linhadados['nome'];
            if(!empty($_POST['acao'])){
                       @$aulas = $_POST['aula'];
                       
                       @$pegaraulas = implode(" ", $aulas);
                    }
        }
if(@$pegaraulas != null && $numfreq<=$contarconsulta){
    if(isset($_POST['acao']) && $_POST['acao'] == "enviar"){
                        foreach ($aulas as $valor) {
                        }
                    }
                    
    $sqlfinal = "INSERT INTO tbfalta VALUES (:nome,:data,:aula)";
                        $enviarcampos = $conexao->prepare($sqlfinal);
                        $enviarcampos->execute(
                                array(
                                    ':nome' => $nome,
                                    ':data' => $data,
                                    ':aula' => $pegaraulas
                                )
                                );
echo '<script>alert("Registro realizado com sucesso!");location.href="create.php";</script>';
}else{
echo '<script>alert("Há algo de errado! Verifique se os campos estão digitados corretamente e tente novamente.");location.href="create.php";</script>';
}
    
                   
                      
                        
        
                    ?>