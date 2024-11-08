<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$nome_banco = 'veterinaria';

$conexao = mysqli_connect($servidor, $usuario, $senha, $nome_banco);

if($conexao){
    echo 'Conectou';
}else{
    echo 'erro';
}
?>