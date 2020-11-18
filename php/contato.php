<?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "coffeeshop";
                
                    $conn = mysqli_connect($servername, $username, $password, $database);

                    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])){
                      $nome = $_POST['nome'];
                      $email = $_POST['email'];
                      $mensagem = $_POST['mensagem'];

                      $sql = "insert into mensagens (nome, email, mensagem) values ('$nome', '$email', '$mensagem')";

                      $result = $conn->query($sql);

                      if($result) {
                        echo "Dados Inseridos com Sucesso!";
                        header("Refresh:5;index.php");
                      }else{
                        echo "Dados Não Inseridos!";
                      }

                    }
                    
                    ?>


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
    <main>         <!--Header Formulário-->
                    <form method="post" name='mensagens' action="">
                        <div class="card  rounded-10">
                            <div class="card-header p-4">
                                <div class="bg-light text-brown text-center py-0">
                                    <h3>Como podemos ajudar?</h3>
                                    <p class="m-0"></p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--body formulário-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-light"><i class="fa fa-user text-brown"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-light"><i class="fa fa-envelope text-brown"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nome" name="email" placeholder="exemplo@mail.com" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-light"><i class="fa fa-comment text-brown"></i></div>
                                        </div>
                                        <textarea class="form-control py-5" name="mensagem" placeholder="Escreva sua mensagem"  required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Enviar" class="btn btn-outline-warning text-dark btn-block rounded-5 py-2";">
                                </div>
                            </div>

                        </div>
                    </form>

      
                    
        </main>
        
                </div>
	</div>
</div>
<?php
      include('footer.html');
    ?>
  </body>
</html>


              <!--
              <?php /*
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "coffeeshop";
                
                    $conn = mysqli_connect($servername, $username, $password, $database);

                    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])){
                      echo "dados recebidos";

                      $nome = $_POST['nome'];
                      $email = $_POST['email'];
                      $mensagem = $_POST['mensagem'];

                      $sql = "insert into mensagens (nome, email, mensagem) values ('$nome', '$email', '$mensagem')";

                      $result = $conn->query($sql);

                      if($result) {
                        echo "Dados Inseridos com Sucesso!";
                        header("Refresh:5;contato.php");
                      }else{
                        echo "Dados Não Inseridos!";
                      }

                    }
                    --> */