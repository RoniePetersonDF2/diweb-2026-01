<?php 
    require_once 'data.php'; 
    $index = $_GET['index'];
    if (!isset($dogs[$index])) {
        header('location: index.php');
    }
    $dog = $dogs[$index];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Aula 22 - Exercício 01</title>
</head>
<body>
    <main>
        <section class="detalhe">
            <section>
                <h1>Meus Pets</h1>
            </section>
            <h2>
                <span>Nome</span>
                <?=$dog['nome'];?>
            </h2>
            <hr>
            <section>
                <span>Idade:</span>
                <span class="info">
                    <?=$dog['idade'];?>
                </span>            
            </section>
            <section>
                <span>Raça:</span>
                <span class="info">
                    <?=$dog['raca'];?>
                </span>            
            </section>
            <section>
                <p>Foto:</p>
                <img src="img/<?=$dog['foto'];?>" 
                alt="Imagem do cachorro <?=$dog['nome'];?>"
                class="foto">            
            </section>

            <a href="./index.php" class="btn btn-primary btn-longo" >Voltar</a>
        </section>
    </main>
</body>
</html>