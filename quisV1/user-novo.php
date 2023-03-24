<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <title>Cadastro de Perfil</title>
</head>

<body>
  <main class="menu container-fluid">

    <div class="titulo">
      <h1>CADASTRO DE USUÁRIOS</h1><br>
    </div>
    <form class="align-items-center" action="user-salvar.php" method="post">

      <div class="container text-left">
        <div class="row align-items-start">
          <div class="col">
            <div class="mb-3">
              <label class="form-label"><b>Nome Completo:</b></label>
              <input type="text" name="nome" class="form-control">
            </div>
          </div>
          <div class="row align-items-start">
            <div class="col">
              <div class="mb-3">
                <label class="form-label"><b>Email:</b></label>
                <input type="email" name="email" class="form-control">
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label class="form-label"><b>Senha:</b></label>
                <input type="password" name="senha" class="form-control">
              </div>
            </div>
              <div class="container text-center">
                <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>

              </div>

    </form>
</body>

</html>