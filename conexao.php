<?php
$host = 'localhost';
$nome = 'root';
$telefone = '';
$data = '';
$email = '';
$senha = '';
$banco = 'cariricu';

if ($conexao = mysqli_connect($host, $nome, $telefone, $data, $email, $senha,$banco)){
 echo"conexao com sucesso";
}
else{
    echo"erro ao se comunicar com o banco" . mysqli_connect_error($conexao);
}

?>