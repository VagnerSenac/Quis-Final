<?php include_once "mensagens.php"; ?>
<?php include_once "validar_login.php"; ?>
<?php include_once "header.php"; ?>

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

  <div class="container">
    <div class="row pt-0">

      <div class="col-12 col-sm-8 col-md-6 col-lg-3 mt-2">
        <div class="card" style="height:100%">
          <img class="card-img-top" src="imagens/banner.jpg" alt="Bologna">
          <div class="card-body text-center">
            <img class="avatar" src="imagens/logo.png">
            <br>
            <h4 class="card-title">CADASTRO DE QUIZ</h4>


            <div class="wrapper">

              
              <form class="align-items-center" action="inserir-quiz.php" method="POST" enctype="multipart/form-data">
             
                <div class="container text-left">
                  <div class="row align-items-start" style="text-align:left">
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label"><b>Inserir a Pergunta:</b></label>
                      <textarea class="form-control" name="pergunta" rows="3"></textarea>
                    </div>
                    <div>
                      
                    <div class="row align-items-start">
                      <div class="col">
                        <div class="mb-3">
                          <label class="form-label"><b>Alternativa de Resposta (1) </b></label>
                          <input type="text" name="alternativa1" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div>
                    <!-- 
                    <label for="customRange3" class="form-label">DC   -   Marvel</label>
                    <input type="range" class="form-range" value="resp1" min="0" max="1" step="0.5" id="customRange3" name="resp1">
                    
            -->


                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="resp1" value="dc" id="flexRadioDefault1"
                          checked>
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
                    <div>
                    <br>
                    <div class="row align-items-start">
                      <div class="col">
                        <div class="mb-3">
                          <label class="form-label"><b>Alternativa de Resposta (2)</b></label>
                          <input type="text" name="alternativa2" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="resp2" value="dc" id="flexRadioDefault1"
                          checked>
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
                  <br>
                    <div class="row align-items-start">
                      <div class="col">
                        <div class="mb-3">
                          <label class="form-label"><b>Alternativa de Resposta (3)</b></label>
                          <input type="text" name="alternativa3" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="resp3" value="dc" id="flexRadioDefault1"
                          checked>
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
                    <br>
                    <div class="row align-items-start">
                      <div class="col">
                        <div class="mb-3">
                          <label class="form-label"><b>Alternativa de Resposta (4)</b></label>
                          <input type="text" name="alternativa4" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="resp4" value="dc" id="flexRadioDefault1"
                          checked>
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
                    <br>
                    <div class="form-floating">
                      <select name="fundo" class="form-select" id="imagem">
                        <option>Click e escolha</option>
                        <option value="imagens/fundo1.jpg" selected>Capa 1</option>
                        <option value="imagens/fundo2.jpg">Capa 2</option>
                        <option value="imagens/fundo3.jpg">Capa 3</option>
                        <option value="imagens/fundo4.jpg">Capa 4</option>
                        <option value="imagens/fundo5.jpg">Capa 5</option>
                        <option value="imagens/fundo6.jpg">Capa 6</option>
                      </select>
                      <label for="imagem">Selecione a imagem de capa do Quis</label>
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
                    <div class="tela">
                      <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                      <a href="painel.php" class="btn btn-danger ml-3 btn-lg">Voltar</a>
                 

                    </div>
              </form>





            </div>
          </div>




        </div>
      </div>
    </div>





    
</body>





</html>