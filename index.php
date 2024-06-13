<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotéis com M</title>
    <?php require ('links.php');?>
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

<div class="container-fluid mt-4">
<div class="swiper swiper-container">
  
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="imagens/carrossel/21" class="w100 d-block" />
      </div>  
      <div class="swiper-slide">
        <img src="imagens/carrossel/22" class="w100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="imagens/carrossel/23" class="w100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="imagens/carrossel/24" class="w100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="imagens/carrossel/25" class="w100 d-block" />
      </div>
      
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="bg-light p-4">
<h5>
  Consulte a disponibilidade dos melhores hotéis com M do Brasil!
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

<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="imagens/carrossel/6" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Caravelas Motel</h5>
        <a href="caravelas.php" class="btn btn-sm btn-outline-white bg-dark shadow-none text-white">Informações >>></a>
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
        <a href="vilage.php" class="btn btn-sm btn-outline-white bg-dark shadow-none text-white">Informações >>></a>
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
        <a href="adventure.php" class="btn btn-sm btn-outline-white bg-dark shadow-none text-white">Informações >>></a>
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
        <a href="bariloche.php" class="btn btn-sm btn-outline-white bg-dark shadow-none text-white">Informações >>></a>
      </div>
    </div>
  </div>
</div>


<?php require('pé.php');?>
<div class="col-1g-4 p-4">


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      }
    });
  </script>

</body>
</html>