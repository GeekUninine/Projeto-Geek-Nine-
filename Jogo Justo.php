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
  <title>Jogo Justo</title>
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
    <img src="imagens/Jogo.png" alt="Jogo Justo">
    <h1>Jogo Justo</h1>
  </div>
    <div class = "rating"> 
    <p> 2023 </p>
    <p> 1h, 53m </p>
      <a href="https://www.imdb.com/title/tt16304446/?ref_=fn_al_tt_1">6.4/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Phoebe Dynevor.png" alt="Phoebe Dynevor">
      <span>Phoebe Dynevor</span>
        <img src="imagens/Alden Ehrenreich.png" alt="Alden Ehrenreich">
      <span>Alden Ehrenreich</span>
        <img src="imagens/Sebastian de Souza.png" alt="Sebastian de Souza">
      <span>Sebastian de Souza</span>
        <img src="imagens/Eddie Marsan.png" alt="Eddie Marsan">
      <span>Eddie Marsan</span>
  </div>
  <div class="texto1">
    <p>Jogo Justo é um suspense erótico da Netflix dirigido por Chloe Domont e estrelado por Phoebe Dynevor (Bridgerton) e Alden Ehrenreich (Han Solo: Uma História Star Wars). O filme acompanha o jovem casal Emily (Dynevor) e Luke (Ehrenreich), que trabalha em uma empresa de finanças e embarca em um romance proibido que vai contra as regras da organização. O segredo parece tornar as coisas ainda mais intensas, e tudo parece ir muito bem no relacionamento - até que Emily é promovida inesperadamente. Agora, os dois serão levados ao limite e devem enfrentar ameaças que podem afetar muito mais do que sua relação.</p>
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