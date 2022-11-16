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
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 4rem;
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
      box-shadow: rgb(37, 11, 5) 5px 5px, rgb(48, 26, 17) 10px 10px, rgb(53, 26, 17) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
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
      gap: 0.5em;
      padding: 0.5em;
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
  <div class="container-fluid">

    <h1 style="text-align:center; font: bold 40px Lalia; color:#463C23">SDM TEAM’S</h1>


    <ul class="cards">
    <?php foreach ($nama as $p => $value){ ?>
    <li>
        <a href="" class="card">
          <img src="<?= base_url('Assets/AdminLTE-3.2.0/dist/img/' . $value['foto']) ?>" class="card__image" />
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                <path />
              </svg>
              <img class="card__thumb" src="<?= base_url('Assets/AdminLTE-3.2.0/dist/img/' . $value['foto']) ?>" />
              <div class="card__header-text">
                <h3 class="card__title"><?= $value['nama'] ?></h3>
                <span class="card__status"><?= $value['npm'] ?></span>
              </div>
            </div>
            <p class="card__description"></p>
          </div>
        </a>
      </li>
     
      <?php } ?>
    </ul>

    <div class="container" style="padding-top: 100px;">
      <div class="row">
        <div class="col-lg-7">
          <div class="container">
            <h2 style="text-align:left; font-family: KoHo;">Hubungi Kami</h2>
            <div style="display:flex;">
              <p style="font-size: 20px; font-family: KoHo; ">Kantor 085783999031</p>
              <a class="btn text-white" style="background-color: #25d366;margin-left:40px;border-radius:25px;height:40px;" href="https://wa.me/6285783999031?text=contoh%20isi%20pesan%20dikirim%20via%20whatsapp" role="button">
                <i class="fab fa-whatsapp"></i>
                Whatsapp
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5">


          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <h2 style="text-align:left; font-family: KoHo;">Alamat Kami</h2>
                <p style="font-size: 20px; font-family: KoHo;">Jl. Prof. Dr. Ir. Sumantri Brojonegoro No.1, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35141. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

<?= $this->endSection(); ?>
