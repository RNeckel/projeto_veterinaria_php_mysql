<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$nome_bd = 'veterinaria';

$conexao = mysqli_connect($servidor, $usuario, $senha, $nome_bd);

if($conexao){
    echo 'conectou';
}else{
    echo 'erro';
}
?>