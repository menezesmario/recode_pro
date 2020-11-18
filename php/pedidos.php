<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contato CoffeeShop</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  </head>
  <div class="container">
  <?php
      include('menu.html');
    ?>
<div class="card  rounded-10 d-flex p-2 border-white" >
                            <div class="card-header p-4 bg-white">
                                <div class="bg-white text-brown text-center py-0">
                                    <h3>Faça seu pedido</h3>
                                    <p class="m-0"></p>
                                </div>
                            </div>
    
  
    <form class="form-group " style="margin: 50 100" action="./actions/pedidos.php" method="POST">
      <p><label for="nome">Nome</label><br>
      <input type="text" name="nome"  id="nome"><br></p>
      <p><label for="endereco">Endereço</label><br>
      <input type="text" name="endereco"  id="endereco"><br></p>
      <p><label for="telefone">Telefone</label><br>
      <input type="text" name="telefone"  id="telefone"><br></p>
      <p><label for="nome_produto">Nome do Produto</label><br>
      <input type="text" name="nome_produto"  id="nome_produto"><br></p>
      <p><label for="vUnit">Valor Unitário</label><br>
      <input type="text" name="vUnit"  id="vUnit"><br></p>
      <p><label for="qtd">Quantidade</label><br>
      <input type="text" name="qtd"  id="qtd"><br></p>
      <p><label for="vTot">Valor Total</label><br>
      <input type="text" name="vTot"  id="vTot"><br></p>
      <p><button type="submit" name="cadastrar">Cadastrar</button>

    </form>

</div>
   
</body>
<?php
      include('footer.html');
    ?>
</html>