<html>
<head>
<script>
    function successful(){

        alert("CADASTRO CONCLUIDO, AGUARDE CONTATO.");
    }
</script>    
</head>

<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];

$bairro = $_POST['bairro'];
$telefone = $_POST['telefone'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$ref = $_POST['ref'];

include "conexao.php";

if (!$con) {
	die('Não foi possivel conectar ao Mysql');
    }else{
        $sql = "INSERT INTO paciente (nome, idade, telefone, bairro, rua, numero, referencia) VALUES ('$nome', '$idade', '$telefone', '$bairro', '$rua', '$numero','$ref')";
        mysqli_query($con,$sql) or die ("Erro ao  cadastrar");
        echo "<script> successful() </script>";


    }
				
   
						
						

			 

mysqli_close($con);

?>
 </html>
