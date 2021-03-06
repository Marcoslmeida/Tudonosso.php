<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Àrea Restrita</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col">
        
        <div class="card">
          <div class="card-body">
            <div class="text-center">
            <img src="img/cadeado.png" width="130px" class="img-fluid">
          </div>
            <h3 class="text-center">Área Restrita</h3>
            <?php if(isset($_GET['msg']) && $_GET['msg'] == 'erro') { ?>
            <div class="alert alert-danger">
              <p class="text-center">A senha digita está incorreta</p>
              <!-- <a href="javascript:history.back(-1)" class="btn btn-info">Tentar novamente</a> -->
            </div>
          <?php } ?> 
              <form method="post" action="login.php">
                    <div class="form-group">
                      <label>Nome</label>
                      <input type="text" class="form-control"placeholder="Digite seu Usuário" name='nome' required>
                    </div>
                    <div class="form-group">
                      <label>Senha</label>
                      <input type="password" class="form-control"  placeholder="Digite sua Senha" name="senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>

              </form>
            </div>
          </div>
        </div>
        <div class="col"></div>
      </div>
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>