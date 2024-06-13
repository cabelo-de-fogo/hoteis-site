<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotéis com M - Quartos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        *{
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
input[type=number] {
  -moz-appearance: textfield;
}
.img-container {
        text-align: center;
        display: block;}
        </style>
</head>
<body class="bg-white">

<?php require ('cabeçalho.php')?>

<div class="my-5 px-4">
<h2 class="fw-bold h-font text-center">Nossos motéis</h2>
<div class="h-line bg-dark"></div>
</div>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Filtros</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <div class="container">
  <div class="row">
    <div class="bg-light p-4">
<h5>
  Data
</h5>
<form>
  <div class="row">
    <label for="" class="form label" style="font-weight: 500">
Entrada:
    </label>
    <input type="date" class="form-control shadow-none">
  </div>

  <div class="row">
    <label for="" class="form label" style="font-weight: 500">
Saída:
    </label>
    <input type="date" class="form-control shadow-none">
  </div>
  <div class="col-lg-1 mt-3">
    <button type="submit" class="btn text-white shadow-none bg-dark">Enviar</button>
  </div>
</form>
    </div>
  </div>
</div>

      </ul>
    </div>
  </div>
</nav>

<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="imagens/carrossel/6" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Caravelas Motel</h5>
        <h6>A partir de R$79,90 a hora</h6>
        <p class="card-text">Você vai se sentir novamente em 1500, descoberto e molhado, tal qual um português.</p>
        <a href="caravelas.php" class="btn btn-sm btn-outline-white bg-dark shadow-none text-white">Quartos disponíveis>>></a>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="imagens/carrossel/2" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Motel Vilage</h5>
        <h6>A partir de R$132,00 a hora</h6>
        <p class="card-text">Suítes meio peba, mas dá pra encarar, caso tenha coragem.</p>
        <a href="vilage.php" class="btn btn-sm btn-outline-white bg-dark shadow-none text-white">Quartos disponíveis>>></a>
      </div>
    </div>
  </div>
</div>


<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="imagens/carrossel/4" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Adventure motel</h5>
        <h6>A partir de R$169,90 a hora</h6>
        <p class="card-text">Esse com certeza vai ser divertido. Para os grandes aventureiros que buscam algo bem selvagem (literalmente).</p>
        <a href="adventure.php" class="btn btn-sm btn-outline-white bg-dark shadow-none text-white">Quartos disponíveis>>></a>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="imagens/carrossel/7" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Hotel Bariloche</h5>
        <h6>A partir de R$3.000,00 a hora</h6>
        <p class="card-text">O sonho da Fafá é ir nesse daqui, hotel 5 estrelas de luxo. Próximo do Rei do Kibe, então já pode garantir a janta com Seu Chalita.</p>
        <a href="bariloche.php" class="btn btn-sm btn-outline-white bg-dark shadow-none text-white">Quartos disponíveis>>></a>
      </div>
    </div>
  </div>
</div>

<?php require ('pé.php');?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>