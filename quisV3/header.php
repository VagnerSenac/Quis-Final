<!DOCTYPE html>
<html lang="pt-br">
<!-- header.php -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <style>
        .fundo {
            min-height: 100vh;
            background: rgb(101, 169, 249);
            background: linear-gradient(180deg, rgba(101, 169, 249, 1) 0%, rgba(29, 110, 152, 1) 15%, rgba(0, 159, 191, 1) 56%, rgba(221, 240, 246, 1) 100%);
            background-blend-mode: screen, color-dodge, overlay, difference, normal;
        }


        .fundo-cinza {
            background-color: #f8f8f8;
        }

        .active {
            font-weight: bold;
        }

        .avatar {
            border: 0.3rem solid rgba(#fff, 0.3);
            margin-top: -6rem;
            margin-bottom: 1rem;
            max-width: 9rem;
        }
    </style>
</head>

<body>
    <main class="fundo">