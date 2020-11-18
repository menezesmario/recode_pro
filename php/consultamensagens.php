
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CoffeeShop</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "coffeeshop";

    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if(!$conn){
      die("A conexão falhou". mysqli_connect_error());
    }

    $sql = "select nome, email, mensagem from mensagens";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
      echo "<p>O cliente ".$row['nome'].", enviou uma mensagem: ".$row['mensagem'].", <br> Email: ".$row['email']."</p><hr>";
    }

    ?>
</body>
</html>