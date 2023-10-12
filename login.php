<?php
  require './src/validacao-bd.php';

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
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Inventário - Login</title>
</head>
<body>
<main>
  <section class="container-admin-banner">
    <img src="./img/logo Diamantes branca.png" class="logo-admin" alt="logo-serenatto">
    <h1>EQUIPAMENTOS E LICENÇAS</h1>
    <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
  </section>
  <section class="container-form">
  <form method="post" action="./src/validacao-bd.php">

    <label for="email">E-mail</label>
    <input type="email" id="email" placeholder="Digite o seu e-mail"  required name="email">

    <label for="password">Senha</label>
    <input type="password" id="password" placeholder="Digite a sua senha"  required name="senha">

    <input type="submit" class="botao-cadastrar" value="Entrar"/>
    <div class="divCheck2">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
      </div>
  </form>

  </section>
</main>
</body>
</html>