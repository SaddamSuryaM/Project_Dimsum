<?php

use Kint\Zval\Value;
?>
<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    :root {
      --surface-color: #fff;
      --curve: 40;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Noto Sans JP', sans-serif;
      background-color: #fef8f8;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      margin: 4rem 5vw;
      padding: 0;
      list-style-type: none;
    }

    .card {
      position: relative;
      display: block;
      height: 100%;
      border-radius: calc(var(--curve) * 1px);
      overflow: hidden;
      text-decoration: none;
      box-shadow: rgb(53, 26, 17) 8px 8px;
    }

    .card-body {
      position: relative;
      display: block;
      height: 100%;
      border-radius: calc(var(--curve) * 1px);
      overflow: hidden;
      text-decoration: none;

    }

    .card__image {
      width: 100%;
      height: auto;
    }

    .card__overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 1;
      border-radius: calc(var(--curve) * 1px);
      background-color: var(--surface-color);
      transform: translateY(100%);
      transition: .2s ease-in-out;
    }

    .card:hover .card__overlay {
      transform: translateY(0);
    }

    .card__header {
      position: relative;
      display: flex;
      align-items: center;
      gap: 2em;
      padding: 2em;
      border-radius: calc(var(--curve) * 1px) 0 0 0;
      background-color: var(--surface-color);
      transform: translateY(-100%);
      transition: .2s ease-in-out;
    }

    .card__arc {
      width: 80px;
      height: 80px;
      position: absolute;
      bottom: 100%;
      right: 0;
      z-index: 1;
    }

    .card__arc path {
      fill: var(--surface-color);
      display: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
    }

    .card:hover .card__header {
      transform: translateY(0);
    }

    .card__thumb {
      flex-shrink: 0;
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    .card__title {
      font-size: 1em;
      margin: 0 0 .3em;
      color: #6A515E;

    }

    .card__tagline {
      display: block;
      margin: 1em 0;
      font-family: "MockFlowFont";
      font-size: .8em;
      color: #D7BDCA;
    }

    .card__status {
      font-size: .8em;
      color: #D7BDCA;
    }

    .card__description {
      padding: 0 2em 2em;
      margin: 0;
      color: #D7BDCA;
      font-family: "MockFlowFont";
      display: -webkit-box;
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 3;
      overflow: hidden;
    }
  </style>
</head>

<body>
  <div class="container" >

    <h2>Nota Pembelian</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4" style="display: flex;">
      <?php
        foreach ($nota as $n => $value) {  ?>
      <div class="col">

        <div class="card"  style="width:400px; background-color:#F3ECE1;" >
          
          <img class="card-img-top" src="<?= base_url('Assets/AdminLTE-3.2.0/dist/img/produk/' . $value['foto']) ?>" alt="Card image" style="width:100%">
          <div class="card-body">
            <h3 class="card-title" style="margin-left:100px ;"><?= $value['nama_produk'] ?></h3>
            <p class="card-text">Harga : <?= $value['harga'] ?></p>
            <p class="card-text">Jumlah : <?= $value['kuantity'] ?></p>
            <p class="card-text">Diskon : <?= number_to_currency($value['SubTotal'],'IDR'); ?></p>
            <p class="card-text">Total : <?= number_to_currency($value['SubTotal'],'IDR'); ?></p>
          </div>
        </div>
      </div>
        
      <?php } ?>
    </div>
  </div>

</body>

</html>

<?= $this->endSection(); ?>