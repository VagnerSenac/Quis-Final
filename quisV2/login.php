<?php
// Inicialize a sessão

session_start();

// Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página de boas-vindas
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: painel.php");
    exit;
}

// Incluir arquivo de configuração
require_once "conexao.php";

// Defina variáveis e inicialize com valores vazios
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processando dados do formulário quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifique se o nome de usuário está vazio
    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor, insira o nome de usuário.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Verifique se a senha está vazia
    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor, insira sua senha.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validar credenciais
    if (empty($username_err) && empty($password_err)) {
        // Prepare uma declaração selecionada
        $sql = "SELECT id, username, password FROM users WHERE username = :username";

        if ($stmt = $pdo->prepare($sql)) {
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            // Definir parâmetros
            $param_username = trim($_POST["username"]);

            // Tente executar a declaração preparada
            if ($stmt->execute()) {
                // Verifique se o nome de usuário existe, se sim, verifique a senha
                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if (password_verify($password, $hashed_password)) {
                            // A senha está correta, então inicie uma nova sessão
                            session_start();

                            // Armazene dados em variáveis de sessão
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirecionar o usuário para a página de boas-vindas
                            header("location: painel.php");
                        } else {
                            // A senha não é válida, exibe uma mensagem de erro genérica
                            $login_err = "Nome de usuário ou senha inválidos.";
                        }
                    }
                } else {
                    // O nome de usuário não existe, exibe uma mensagem de erro genérica
                    $login_err = "Nome de usuário ou senha inválidos.";
                }
            } else {
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }

    // Fechar conexão
    unset($pdo);
}
?>
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
                        <h4 class="card-title">Login</h4>
                        

                        <div class="wrapper">

                            <?php
                            if (!empty($login_err)) {
                                echo '<div class="alert alert-danger">' . $login_err . '</div>';
                            }
                            ?>

                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="form-group">
                                    <label>Nome do usuário</label>
                                    <input type="text" name="username"
                                        class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                                        value="<?php echo $username; ?>">
                                    <span class="invalid-feedback">
                                        <?php echo $username_err; ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" name="password"
                                        class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                    <span class="invalid-feedback">
                                        <?php echo $password_err; ?>
                                    </span>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Acessar">
                                </div>
                                
                            </form>
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