<?php include_once "validar_login.php"; ?>
<?php include_once "header.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>


    <div class="container">
        <div class="row pt-5">

            <div class="col-12 col-sm-8 col-md-6 col-lg-3 mt-5">
                <div class="card" style="height:100%">
                    <img class="card-img-top" src="imagens/banner.jpg" alt="Bologna">
                    <div class="card-body text-center">
                        <img class="avatar" src="imagens/logo.png">
                        <br>
                        <h4 class="card-title">Painel</h4>
                        <br>
                        <div class="row pt-3">
                            <a href="register.php" type="button" class="btn btn-outline-primary">Novo usuário</a>
                        </div>
                        <div class="row pt-3">
                            <a href="quiz-novo.php" type="button" class="btn btn-outline-success">Novo Quiz</a>
                        </div>
                        <div class="row pt-3">
                            <a href="quis.php" type="button" class="btn btn-outline-dark">Quiz</a>
                        </div>
                        <div class="row pt-3">
                            <a href="logout.php" class="btn btn-outline-danger">Sair</a>
                        </div>

                    </div>
                </div>




            </div>
        </div>
    </div>





    <footer class="container-fluid bg-dark text-light text-center mt-5 pt-2 pb-1 fixed-bottom">
        <p>Todos os direitos reservados &copy;
            <?php echo date("Y"); ?> V2
        </p>
    </footer>
</body>

</html>