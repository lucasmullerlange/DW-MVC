<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Administração</title>
</head>

<body>
    <header class="jumbotron m-0 ">
        <h1>Área Administrativa</h1>
        <a  class="lead" href="?controller=main&action=logout">Logout</a>
    </header>

    
    <div class="">
        <section class="row">

            <nav class="col-md-3">
                <h2>Menu</h2>
                <a href="?controller=main&action=index">Home</a>
                <h3>Clientes</h3>
                <a href="?controller=clients&action=listClients">Listar clientes</a><br>
                <a href="?controller=clients&action=insertClient">Adicionar clientes</a>
            </nav>
    <article class="col-md-9">