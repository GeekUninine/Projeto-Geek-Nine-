<?php
session_start();


if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
    echo "<p class=ola>Olá, $nome_usuario!</p>";
  echo '<button title="Usuario"></button>';
  echo '<a href="logout.php"><button title="Logout">Logout</button></a>';

} else {

    echo '<a href="login.php"><button title="Login">Login</button></a>';
    echo '/<a href="cadastro.php"><button title="Cadastro">Cadastre-se</button></a>';
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comunidade Game</title>
  <link href="ComunidadeGame.css" rel="stylesheet" type="text/css" />
  <link rel="website icon" type="png" href="imagens/file.png">
</head>

<body>
  <div class="container">
    <img src="imagens/GeekTopo2.png" class="img-fluid">
  </div>

  <div class="menu-container">
    <a href="index.php"><button title="Início">Início</button></a>
    <a href="sobre.php"><button title="Sobre">Sobre</button></a>
    <a href="games.php"><button title="Games">Games</button></a>
    <a href="tecnologia.php"><button title="Tecnologia">Tecnologia</button></a>
    <a href="filmes.php"><button title="Filmes">Filmes</button></a>
    <a href="eventos.php"><button title="Eventos">Eventos</button></a>
  </div>
  <div class="usuario">
    <button title="Usuario"></button>
  </div>
  <div class="search-container">
    <form action="" method="GET">
      <input type="text" placeholder="Digite sua busca" name="Digite sua busca">
      <input type="submit" value="">
    </form>
  </div>

   <div class="container-a" align="center">
    <h3>Comunidade Game</h3>
   </div>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
  <p>GeekNine © 2024 Todos os Direitos Reservados</p>
</body>

</html>