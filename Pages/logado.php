
<?php include "consultas.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/logado.css">
    <title>Perfil</title>
</head>
<header>
    <div class="container-elementos-header">
        <div class="logo-container">
            <a href="../index.php"><h1 class="up-text">Escola</h1></a>
            <a href="../index.php"><p class="down-text">do Código</p></a>
        </div>
        <nav>
            <ul class="lista-navegação">
                <li class="cabecalho-link"><a href="Linguagens.php">Linguagens</a></li>
                <li class="cabecalho-link"><a href="Tutoriais.php">Tutoriais</a></li>
                <li class="cabecalho-link"><a href="Perfil.php">Login</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
    <div class="container">
        <ul>
            <li>nome:</li>
            <li>email:</li>
        </ul>
        <ul>
            <li><?php echo $nomeuser; ?></li>
            <li><?php echo $emailuser; ?></li>
        </ul>
    </div>
</main>