<?php

session_start();


function cmp($a, $b)
{
  return strcmp($a['nome'], $b['nome']);
}

function filtrarBolos($bolo)
{
  return $bolo['preco'] >= 30.00;
}

function aplicarPromocao(&$bolo)
{
  $bolo['preco'] *= 0.5;  // Aplica 50% de desconto no preço
}


$listaDeBolos = [
  '1' => [
    'nome' => "Bolo de Morango",
    'descricao' => "Delicioso bolo de morango com chocolate e recheio de creme.",
    'peso' => 1.00,
    'preco' => 30.00,
    'imgURL' => 'morango.png'
  ],
  '2' => [
    'nome' => "Bolo de Laranja",
    'descricao' => "Delicioso bolo de laranja com chocolate e recheio de doce de leite.",
    'peso' => 2.5,
    'preco' => 45.50,
    'imgURL' => 'laranja.png'
  ],
  '3' => [
    'nome' => "Bolo de Framboesa",
    'descricao' => "Delicioso bolo de framboesa com chocolate e recheio de creme.",
    'peso' => 1.00,
    'preco' => 38.00,
    'imgURL' => 'framboesa.png'
  ],
  '4' => [
    'nome' => "Bolo de Abacaxi",
    'descricao' => "Delicioso bolo de abacaxi fresco com cerejeas recém colhidas.",
    'peso' => 0.9,
    'preco' => 20.00,
    'imgURL' => 'abacaxi.png'
  ],
  '5' => [
    'nome' => "Bolo de Cenoura",
    'descricao' => "Delicioso bolo caseiro de cenoura com cobertura de chocolate.",
    'peso' => 1.2,
    'preco' => 27.50,
    'imgURL' => 'cenoura.png'
  ],
  '6' => [
    'nome' => "Bolo de Pêssego",
    'descricao' => "Delicioso bolo de pêssego com creme branco.",
    'peso' => 1.00,
    'preco' => 30.00,
    'imgURL' => 'pessego.png'
  ]
];

$_SESSION['listaDeBolos'] = $listaDeBolos;

// usort($listaDeBolos, 'cmp');
// $listaDeBolos = array_filter($listaDeBolos, 'filtrarBolos');
// array_walk($listaDeBolos, 'aplicarPromocao');
shuffle($listaDeBolos);
// array_shift($listaDeBolos); //remove o primeiro elemento do array
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
  <title>A Dona do Pedaço</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <div class="logo">
      <a id="logo" href="#"><img src="images/logo.png" height="40px" /></a>
    </div>
    <div class="botoes">
      <a href="#c"><b>Home</b></a>
    </div>
    <div class="botoes">
      <a href="#m"><b>Produtos</b></a>
    </div>
    <div class="botoes">
      <a href="#h"><b>História</b></a>
    </div>

    <div class="car">
      <i class="fas fa-shopping-cart" style="font-size: 25px"></i>
    </div>
  </header>
  <main class="container">
    <div class="capa" id="c">
      <img src="images/capa.png" />
    </div>
    <div class="produtos" id="m">
      <?php foreach ($listaDeBolos as $codigo => $bolo) {  ?>
        <div class="bolos">
          <div class="img"><img src=<?= "images/{$bolo['imgURL']}" ?> width="100%" /></div>
          <div class="text">
            <p style="font-weight: bold"><?= $bolo['nome'] ?></p>
            <p>
              <?= $bolo['descricao'] ?>
            </p>
            <p>Peso: <?= $bolo['peso'] ?>kg</p>
            <p>Preço: R$<?= number_format($bolo['preco'], 2, ',', '.') ?></p>
            <form method="post" action="remover_bolo.php">
              <input type="hidden" name="codigo" value=<?= $codigo ?>>
              <button type="submit" class="remover-bolo" name="remover_bolo">Remover Bolo</button>
            </form>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="historia" id="h">
      <div class="texto">
        <h1>Como tudo começou...</h1>
        <p>
          À base de muito trabalho, dedicação e de
          não se deixar abater pelas dificuldades, Maria da Paz apostou no seu
          negócio.
        </p>
        <p>
          Ela tem origem pobre, trabalhou como
          cortadora de cana e empregada doméstica. A oportunidade surgiu
          quando a funcionária da patroa, que vendia bolos, teve problemas de
          saúde. Maria da Paz assumiu a função de preparar os bolos e,
          adivinha... assumiu o negócio.
        </p>
      </div>
      <div id="imgdona"><img src="images/dona.png" /></div>
    </div>
    <div class="footer">
      <div class="redes">
        <i class="fab fa-facebook-f" style="font-size: 24px; line-height: 30px"></i>
      </div>
      <div class="redes">
        <i class="fab fa-twitter" style="font-size: 24px"></i>
      </div>
      <div class="redes">
        <i class="fab fa-youtube" style="font-size: 24px"></i>
      </div>
      <div class="redes">
        <i class="fab fa-instagram" style="font-size: 24px"></i>
      </div>
    </div>
  </main>
</body>

</html>