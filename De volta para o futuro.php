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
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>De Volta para o Futuro</title>
   <link href="games1.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="imagens/file.png">
  </head>

  <body>
    <header>
      <img src="imagens/GeekTopo2.png" class="img-fluid">
    </header>

    <div class="menu-container">
      <a href="index.php"><button title="Início">Início</button></a>
      <a href="sobre.php"><button title="Sobre">Sobre</button></a>
      <a href="games.php"><button title="Games">Games</button></a>
      <a href="tecnologia.php"><button title="Tecnologia">Tecnologia</button></a>
      <a href="filmes.php"><button title="Filmes">Filmes</button></a>
      <a href="eventos.php"><button title="Eventos">Eventos</button></a>
    </div>
    <div class="search-container">
      <form action="" method="GET">
        <input type="text" placeholder="Digite sua busca" name="Digite sua busca">
        <input type="submit" value="">
      </form>
    </div>
    <br><br><br><br>
  <div class="container-a">
  <div class="div1">
    <img src="imagens/Futuro.png" alt="De Volta Para o Futuro">
    <h1>De Volta para o Futuro</h1>
  </div>
    <div class ="rating"> 
    <p>1985</p>
    <p>1h, 56m</p>
      <a href="https://www.imdb.com/title/tt0088763/?ref_=fn_al_tt_1">8.5/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Michael J. Fox.png" alt="Michael J. Fox">
      <span>Michael J. Fox</span>
        <img src="imagens/Christopher Lloyd.png" alt="Christopher Lloyd">
      <span>Christopher Lloyd</span>
        <img src="imagens/Lea Thompson.png" alt="Lea Thompson" >
      <span>Lea Thompson</span>
        <img src="imagens/Crispin Glover.png" width="25" height="50" alt="Crispin Glover">
      <span>Crispin Glover</span>
  </div>
  <div class="texto1">
    <p>Um jovem (Michael J. Fox) aciona acidentalmente uma máquina do tempo construída por um cientista (Christopher Lloyd) em um Delorean, retornando aos anos 50. Lá conhece sua mãe (Lea Thompson), antes ainda do casamento com seu pai, que fica apaixonada por ele. Tal paixão põe em risco sua própria existência, pois alteraria todo o futuro, forçando-o a servir de cupido entre seus pais.</p>
  </div>
  </div>
    <footer>
      <div class="contato">
        <div class="contato-1">
          <ul><h1>Contato</h1>
        <li><img src="imagens/gmail.png">Geeknine@gmail.com</li>
        <li><img src="imagens/telefone.png">Telefone:(11) 0000-0000</li>
        <li><img src="imagens/whatsapp.png">Whatsapp: (11) 00000-0000</li>
      </ul>
      </div>
    <div class="redes-sociais"> 
      <a href="https://www.facebook.com/people/GeekNine/61557039160232/" target="_blank"><button
          title="Facebook">Facebook</button></a>
      <a href="https://www.instagram.com/geek_nine/?igsh=MXBqemduaHFybDFuZg%3D%3D" target="_blank"><button
          title="Instagram">Instagram</button></a>
      <a href="https://twitter.com/GeekNine9" target="_blank"><button title="Twitter">Twitter</button></a>
    </div>
    </div>
    <div class="logo">
    <p>GeekNine © 2024 Todos os Direitos Reservados</p>
    </div>
    </footer>
</body>

</html>
