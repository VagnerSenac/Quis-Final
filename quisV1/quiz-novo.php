<?php include_once "validar_login.php";?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <title>Cadastro de Quiz</title>
</head>

<body>
  <main class="menu container-fluid">

    <div class="titulo">
      <h1>CADASTRO DE QUIZ</h1><br>
    </div>
    <form class="align-items-center" action="inserir-quiz.php" method="POST" enctype="multipart/form-data">

      <div class="container text-left">
        <div class="row align-items-start">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><b>Inserir a Pergunta:</b></label>
            <textarea class="form-control" name="pergunta" rows="3"></textarea>
          </div>
          <div class="row align-items-start">
            <div class="col">
              <div class="mb-3">
                <label class="form-label"><b>Alternativa 1:</b></label>
                <input type="text" name="alternativa1" class="form-control">
              </div>
            </div>
          </div>
          <div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="resp1" value="dc" id="flexRadioDefault1" checked>
              <label class="form-check-label" for="flexRadioDefault1">
                DC
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="resp1" value="marvel" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                Marvel
              </label>
            </div>
          </div>
          
          <div class="row align-items-start">
            <div class="col">
              <div class="mb-3">
                <label class="form-label"><b>Alternativa 2:</b></label>
                <input type="text" name="alternativa2" class="form-control">
              </div>
            </div>
          </div>
          <div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="resp2" value="dc" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
              DC
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="resp2" value="marvel" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
              Marvel
            </label>
          </div>
        </div>
      </div>
      <div>
        <div class="row align-items-start">
          <div class="col">
            <div class="mb-3">
              <label class="form-label"><b>Alternativa 3:</b></label>
              <input type="text" name="alternativa3" class="form-control">
            </div>
          </div>
        </div>
        <div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="resp3" value="dc" id="flexRadioDefault1" checked>
          <label class="form-check-label" for="flexRadioDefault1">
            DC
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="resp3" value="marvel" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
            Marvel
          </label>
        </div>
      </div>
      <div class="row align-items-start">
        <div class="col">
          <div class="mb-3">
            <label class="form-label"><b>Alternativa 4:</b></label>
            <input type="text" name="alternativa4" class="form-control">
          </div>
        </div>
      </div>
      <div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="resp4" value="dc" id="flexRadioDefault1" checked>
          <label class="form-check-label" for="flexRadioDefault1">
            DC
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="resp4" value="marvel" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
            Marvel
          </label>
        </div>
      </div>
      <div class="form-floating">
        <select name="fundo" class="form-select" id="imagem">
          <option>Click e escolha</option>
          <option value="imagens/fundo1.jpg" selected>Figura 1</option>
          <option value="imagens/fundo2.jpg">Figura 2</option>
          <option value="imagens/fundo3.jpg">Figura 3</option>
          <option value="imagens/fundo4.jpg">Figura 4</option>
          <option value="imagens/fundo5.jpg">Figura 5</option>
          <option value="imagens/fundo6.jpg">Figura 6</option>
        </select>
        <label for="imagem">Selecione a imagem de tela</label>
      </div>
      <hr style="border:0">
      <div class="card" style="background-color: #0D6374; border:0;">
        <img id="imagemSelecionada" src="imagens/fundo1.jpg" alt="Imagem Selecionada">
      </div>
      <hr style="border:0">
      <script>
        var select = document.getElementById("imagem");
        var imagemSelecionada = document.getElementById("imagemSelecionada");

        select.addEventListener("change", function () {
          imagemSelecionada.src = select.value;
        });
      </script>
      <div>
        <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
        <a href="logout.php" class="btn btn-danger ml-3 btn-lg">Sair</a>
        <a href="index.php" type="button" class="btn btn-success btn-lg">Quis</a>
        
      </div>
    </form>
</body>

</html>