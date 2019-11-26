<?php
session_start();
include_once ("conexao.php");




$pergunta1 = $_POST['fb'];
$pergunta2 = $_POST['fb2'];
$pergunta3 = $_POST['fb3'];
$pergunta4 = $_POST['fb4'];
$pergunta5 = $_POST['fb5'];
$pergunta6 = $_POST['fb6'];
$pergunta7 = $_POST['fb7'];
$pergunta8 = $_POST['fb8'];
$data = date("Y-m-d");

// echo "Nome: $nome <br>";
// echo "E-mail: $email <br>";
//echo "Telefone: $telefone <br>";

// $conn = mysqli_connect("localhost","root","","searchedu");
if(!$conn){
  echo "erro na conexao com o banco de dados";
  exit();
}else{
    $sql = "INSERT INTO `tbl_pergunta`(`pergunta1`, `pergunta2`, `pergunta3`, `pergunta4`, `pergunta5`, `pergunta6`, `pergunta7`, `pergunta8`) VALUES ('$pergunta1','$pergunta2','$pergunta3','$pergunta4','$pergunta5','$pergunta6','$pergunta7','$pergunta8') ";
  $salva = mysqli_query($conn,$sql);
 
}
if($salva){
  echo "Salvou os dados";
}
else{
  echo "nao salvou";
  print($sql);
}