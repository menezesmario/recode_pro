<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CoffeeShop</title>
   
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
  </head>
  <body>

    <div class="container">

    <!-- MENU -->
    <?php
    require_once "./actions/db_connect.php";
      include('menu.html');
    ?>

    <main>
    <div class="categorias">
        <ul class="lista-categorias">
          <li onclick="exibir_todos()" class="categoria">TODOS</li>
          <li onclick="exibir_categoria('ba')" class="categoria">BA</li>
          <li onclick="exibir_categoria('es')" class="categoria">ES</li>
          <li onclick="exibir_categoria('mg')" class="categoria">MG</li>
          <li onclick="exibir_categoria('pr')" class="categoria">PR</li>
          <li onclick="exibir_categoria('rj')" class="categoria">RJ</li>
          <li onclick="exibir_categoria('sp')" class="categoria">SP</li>
        </ul>
      </div>

  <div class="container">

  <?php
    $sql = "select * from produtos";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
      while($rows = $result->fetch_assoc()){
    ?>

      <div class="shop-column" id="<?php echo $rows["categoria"]; ?>">
      <center>
      <h5><?php echo $rows["nome_produto"]; ?></h5>
      <img src="./<?php echo $rows["imagem"]; ?>" alt="" /></a>
      <div class="prod-resume"></div>
      250g: R$ <?php echo $rows["preco"]; ?>
      <br>     
      <a href="#"><button class="btn btn-warning" style= cursor:pointer;>Comprar</button></a> 
      </center>
    </div>
   
   
    <?php

      }
    } else {
      echo "Nenhum produto cadastrado!";
    }
    ?>
 
         
    </main>
    <?php
      include('footer.html');
    ?>

   
    
    </div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src="./js/script.js"></script>
  </body>
</html>

