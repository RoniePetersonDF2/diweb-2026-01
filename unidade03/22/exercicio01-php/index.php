<?php require_once 'data.php'; ?>
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
        <section>
            <h1>Meus Pets</h1>

            <table>
                <thead>
                    <tr class="title">
                        <th>#</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Raça</th>
                        <th>Foto</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($dogs as $index => $dog):?>
                    <tr class="centralizar">
                        <td><?= $dog["id"];?></td>
                        <td><?= $dog["nome"];?></td>
                        <td><?= $dog["idade"];?></td>
                        <td><?= $dog["raca"];?></td>
                        <td width="150px">
                            <img src="img/<?=$dog['foto'];?>" alt="Imagem cachorro Chico">
                        </td>
                        <td width="150px">
                            <a href="./detalhe.php?index=<?=$index?>" class="btn btn-primary">Exibir</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>