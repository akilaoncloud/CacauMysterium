<?php
include('conexao.php');

  if(isset($_POST['submit'])){

  $nomeC =  $_POST['nomeC'];
  $nomeUser = $_POST['nomeUser'];
  $email = $_POST['email'];
  $senha = $_POST['senha']; 
  $CPF = $_POST['CPF'];

  $result = mysqli_query($con, "INSERT INTO usuarios(nomeC, nomeUser, email, senha, CPF)
  VALUES('$nomeC', '$nomeUser', '$email', '$senha', '$CPF')");
  }
?>