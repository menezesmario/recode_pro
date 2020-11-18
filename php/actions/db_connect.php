<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $database = "coffeeshop";
//criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);
//verificando a conexão    
    if(!$conn){
      die("A conexão falhou". mysqli_connect_error());
    }
?>