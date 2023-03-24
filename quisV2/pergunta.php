<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Pergunta</title>

</head>

<body>


</body>

</html>

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
    <title>Quiz do Poder</title>
</head>

<body>
    <?php
    include "conexao.php";

    if (!isset($_SESSION['listaIds'])) {
        $sqlBusca = "select * from t_quiz";
        $todosOsQuiz = mysqli_query($conexao, $sqlBusca);
        $_SESSION['listaIds'] = array();

        while ($questoes = mysqli_fetch_assoc($todosOsQuiz)) {
            array_push($_SESSION['listaIds'], $questoes['id']);
        }
    }


    $posicao = 0;
    $sqlBusca = "select * from t_quiz where id = " . $_SESSION['listaIds'][$posicao];

    if (count($_SESSION['listaIds']) > 1) {
        array_shift($_SESSION['listaIds']);
        $endereco = "respQuiz.php";
    } else {
        session_destroy();
        $endereco = "resultado.php";
    }

    $todosOsQuiz = mysqli_query($conexao, $sqlBusca);
    $todosOsQuiz = mysqli_fetch_assoc($todosOsQuiz);
    $umQuiz = $todosOsQuiz;

    $total = "SELECT COUNT(*) as total FROM t_quiz";
    $resultado = mysqli_query($conexao, $total);
    $row = mysqli_fetch_assoc($resultado);
    $total = $row['total'];

    ?>
    <div class="container">
        <div class="row pt-0">

            <div class="col-12 col-sm-8 col-md-6 col-lg-3 mt-3">
                <div class="card" style="height:100%">
                    <img class="card-img-top" src="<?php echo $umQuiz['imagem']; ?>" alt="Bologna">
                    <div class="card-body text-center">
                        <br>

                        <br>
                        <h4 class="card-title">
                            <?php echo $umQuiz['pergunta']; ?>
                        </h4>

                        


                            <form action="<?php echo $endereco; ?>" method="POST">
                                <div class="corpo">
                                    <br>


                                    <div class="alternativas">
                                        <button type="submit" name="resposta" value="<?php echo $umQuiz['resp1']; ?>">
                                            <b>
                                                <?php echo $umQuiz['alternativa1']; ?>
                                            </b>

                                        </button>
                                       
                                        <button type="submit" name="resposta" value="<?php echo $umQuiz['resp2']; ?>">
                                            <b>
                                                <?php echo $umQuiz['alternativa2']; ?>
                                            </b>
                                        </button>
                                        <button type="submit" name="resposta" value="<?php echo $umQuiz['resp3']; ?>">
                                            <b>
                                                <?php echo $umQuiz['alternativa3']; ?>
                                            </b>
                                        </button>
                                        <button type="submit" name="resposta" value="<?php echo $umQuiz['resp4']; ?>">
                                            <b>
                                                <?php echo $umQuiz['alternativa4']; ?>
                                            </b>
                                        </button>
                                        <br><br><br><br><br><br>
                                    </div>
                                </div>

                            </form>
                    </div>
                </div>
            </div>
        </div>


</body>