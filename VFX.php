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
  <title>Velozes e Furiosos 10</title>
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
    <img src="imagens/VFX.png" alt="VFX">
    <h1>Velozes e Furiosos 10</h1>
  </div>
    <div class = "rating"> 
    <p> 2023 </p>
    <p> 2h, 21m </p>
      <a href="https://www.imdb.com/title/tt5433140/?ref_=fn_al_tt_1">5.8/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Vin Diesel.png" alt="Vin Diesel">
      <span>Vin Diesel</span>
        <img src="imagens/Michelle Rodriguez.png" alt="Sydney SweeneyMichelle Rodriguez">
      <span>Michelle Rodriguez</span>
        <img src="imagens/Tyrese Gibson.png" alt="Tyrese Gibson">
      <span>Tyrese Gibson</span>
        <img src="imagens/Ludacris.png" alt="Ludacris">
      <span>Ludacris</span>
  </div>
  <div class="texto1">
    <p>No décimo filme da série Velozes & Furiosos e último da nova trilogia (Velozes 8, 9 e 10), ao longo de muitas missões e contra probabilidades que pareciam impossíveis, Dom Toretto (Vin Diesel) e sua família foram mais espertos e superaram todos os inimigos em seu caminho. Agora, eles devem desafiar o adversário mais letal que já enfrentaram. Alimentada pela vingança, uma ameaça terrível emerge das sombras do passado na forma de Dante (Jason Momoa), para destruir o mundo de Toretto e destruir tudo - e todos - que ele ama. Ele então, comandando novamente a equipe de corredores mais conhecida do mundo, encara mais uma difícil missão sobre quatro rodas. O fim da estrada começa e Velozes & Furiosos 10 lança os capítulos finais de uma das franquias globais mais famosas e populares do cinema, agora em sua terceira década e ainda forte com o mesmo elenco e personagens centrais de quando começou.</p>
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
