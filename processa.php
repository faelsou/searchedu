<?php
session_start();
include_once ("conexao.php");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_NUMBER_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";
//echo "Telefone: $telefone <br>";

$result_usuario = "INSERT INTO usuario (nome, email, telefone, senha, created) VALUES ('$nome', '$email', '$telefone', '$senha' NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "Usuário cadastrado com Sucesso";
    header("Location: index.php");
}else{
    header("Location: index.php");
}
