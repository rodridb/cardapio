<?php

    require "src/conexao-bd.php";
    require "src/Modelo/Produto.php";
    require "src/Repositorio/ProdutoRepositorio.php";

    $produtosRepositorio = new ProdutoRepositorio($pdo);
    $dadosCafe = $produtosRepositorio->opcoesCafe();
    $dadosAlmoco = $produtosRepositorio->opcoesAlmoco();



?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Inventário - Index</title>
</head>
<body>
    <main>
        <!--<section class="container-banner">
            <div class="container-texto-banner">
                <img src="img/logo-serenatto.png" class="logo" alt="logo-serenatto">
            </div>
        </section>-->
        <h2>PRODUTOS CADASTRADOS</h2>
        <!--<section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>EQUIPAMENTOS</h3>
                <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
            </div>
            <div class="container-cafe-manha-produtos">
                <?php foreach ($dadosCafe as $cafe):?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?= $cafe->getImagemDiretorio() ?>">
                        </div>
                        <p><?= $cafe->getNome()?></p>
                        <p><?= $cafe->getDescricao()?></p>
                        <p><?= $cafe->getPrecoFormatado() ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="container-almoco">
            <div class="container-almoco-titulo">
                <h3>LICENÇAS</h3>
                <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
            </div>
            <div class="container-almoco-produtos">
                <?php foreach ($dadosAlmoco as $almoco):?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?= $almoco->getImagemDiretorio()?>">
                        </div>
                        <p><?= $almoco->getNome()?></p>
                        <p><?= $almoco->getDescricao()?></p>
                        <p><?= $almoco->getPrecoFormatado() ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

        </section>-->
        <table>
    <tr>
        <!-- Equipamentos -->
        <td>
            <div class="container-cafe-manha">
                <div class="container-cafe-manha-titulo">
                    <h3>EQUIPAMENTOS</h3>
                    <input type="submit" class="botao-cadastrar" value="EDITAR CADASTROS" action="editar-produto.php"/>
                    <img class="ornaments" src="img/ornaments-coffee.png" alt="ornaments">
                </div>
                <div class="container-cafe-manha-produtos">
                    <?php foreach ($dadosCafe as $cafe):?>
                        <div class="container-produto">
                            <div class="container-foto">
                                <img src="<?= $cafe->getImagemDiretorio() ?>">
                            </div>
                            <p><?= $cafe->getNome()?></p>
                            <p><?= $cafe->getDescricao()?></p>
                            <p><?= $cafe->getPrecoFormatado() ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </td>

        <!-- Licenças -->
        <td>
            <div class="container-almoco">
                <div class="container-almoco-titulo">
                    <h3>LICENÇAS</h3>
                    <form action="cadastrar-produto.php">
                    <input type="submit" class="botao-cadastrar" value="CADASTRAR PRODUTOS"/>
                    </form>
                    <img class="ornaments" src="img/ornaments-coffee.png" alt="ornaments">
                </div>
                <div class="container-almoco-produtos">
                    <?php foreach ($dadosAlmoco as $almoco):?>
                        <div class="container-produto">
                            <div class="container-foto">
                                <img src="<?= $almoco->getImagemDiretorio()?>">
                            </div>
                            <p><?= $almoco->getNome()?></p>
                            <p><?= $almoco->getDescricao()?></p>
                            <p><?= $almoco->getPrecoFormatado() ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </td>
    </tr>
</table>

    </main>
</body>
</html>