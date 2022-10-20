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
    /* .class{
        color:#41371D;
        font-weight: bold;
        font-size: 20px;
    } */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


    *{
    font-family: 'Poppins', sans-serif;
    }

    .container{
    position: relative;
    }

    .container .card{
    position: relative;
    width: 250px;
    height: 400px;
    background: #F3ECE1;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .container .card .imgBx{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10000;
    width: 100%;
    height: 200px;
    transition: 0.5s;
    
    }

    .container .card:hover .imgBx{
    top: 14%;
    transform: translateY(0%);
    }

    .container .card .imgBx img{
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 200px;
    width: 230px;
    }

    .container .card .contentBx{
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    text-align: center;
    transition: 1s;
    z-index: 10;
    }

    .container .card:hover .contentBx{
    height: 190px;
    }

    .container .card .contentBx h2{
    font-size: 25px;
    position: relative;
    font-weight: 600;
    letter-spacing: 1px;
    color: black;
    margin-top: 10px;
    }

    .container .card .contentBx .size, .container .card .contentBx .color {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 8px 20px;
    transition: 0.5s;
    opacity: 0;
    visibility: hidden;
    padding-top: 0;
    padding-bottom: 0;
    }

    .container .card:hover .contentBx .size{
    opacity: 1;
    visibility: visible;
    transition-delay: 0.5s;
    padding: 8px 20px;
    }

    .container .card .contentBx .size h3, .container .card .contentBx .color h3{
    text-align: left;
    color: black;
    font-weight: 400;
    font-size: 13px;
    letter-spacing: 1px;
    margin-left: 10px;
    }

    .container .card .contentBx a{
    display: inline-block;
    padding: 10px 10px;
    background: #fff;
    border-radius: 4px;
    margin-top: 20px;
    margin-bottom: 20px;
    text-decoration: none;
    font-weight: 600;
    color: red;
    opacity: 0;
    transform: translateY(50px);
    transition: 0.5s;
    margin-top: 0;
    }

    .container .card:hover .contentBx a{
    opacity: 1;
    transform: translateY(0px);
    transition-delay: 0.75s;
    
    }

  </style>
  
</head>

<body>
    <div>
        <p class="fs-2 detail"><strong>Frozen Dimsum</strong></p>
    </div>
    <div class="container">
      <div class="row row-cols-1 row-cols-5 g-4">
        <div class="col">
          <div class="card">
            <div class="imgBx">
            <img src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum Ayam.png">
            </div>
            <div class="contentBx">
            <h2>Dimsum Ayam</h2>
            <div class="size">
              <h3>
                Dimsum Ayam ini terbuat
                dari daging ayam pilihan,
                wortel, serta topping
                yang kemudian dibungkus
                kulit pangsit
              </h3>
            </div>
            <a href="/belanja">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col" style="margin-left: 30px;">
          <div class="card">
            <div class="imgBx">
            <img src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum Sosis.png">
            </div>
            <div class="contentBx">
            <h2>Dimsum Sosis</h2>
            <div class="size">
              <h3>
                Dimsum sosis ini terbuat
                dari daging ayam pilihan,
                wortel, serta topping
                yang kemudian dibungkus
                kulit pangsit
              </h3>
            </div>
            <a href="/belanja">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col" style="margin-left: 30px;">
          <div class="card">
            <div class="imgBx">
            <img src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum Sayur.png">
            </div>
            <div class="contentBx">
            <h2>Dimsum Sayur</h2>
            <div class="size">
              <h3>
                Dimsum Sayur ini terbuat
                dari daging ayam pilihan,
                wortel, serta topping
                yang kemudian dibungkus
                kulit pangsit
              </h3>
            </div>
            <a href="/belanja">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col" style="margin-left: 30px;">
          <div class="card">
            <div class="imgBx">
            <img src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum Salmon.png">
            </div>
            <div class="contentBx">
            <h2>Dimsum Salmon</h2>
            <div class="size">
              <h3>
                Dimsum salmon ini terbuat
                dari daging ayam pilihan,
                wortel, serta topping
                yang kemudian dibungkus
                kulit pangsit
              </h3>
            </div>
            <a href="/belanja">Buy Now</a>
            </div>
          </div>
        </div>
        
      </div>
      <div class="row row-cols-5">
        <div class="col">
          <div class="card">
            <div class="imgBx">
            <img src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum Vulcano.png">
            </div>
            <div class="contentBx">
            <h2>Dimsum Vulcano</h2>
            <div class="size">
              <h3>
                Dimsum Vulcano ini terbuat
                dari daging ayam pilihan,
                wortel, serta topping
                yang kemudian dibungkus
                kulit pangsit
              </h3>
            </div>
            <a href="/belanja">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col" style="margin-left: 30px;">
          <div class="card">
            <div class="imgBx">
            <img src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum Salmon.png">
            </div>
            <div class="contentBx">
            <h2>Dimsum Salmon</h2>
            <div class="size">
              <h3>
                Dimsum salmon ini terbuat
                dari daging ayam pilihan,
                wortel, serta topping
                yang kemudian dibungkus
                kulit pangsit
              </h3>
            </div>
            <a href="/belanja">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col" style="margin-left: 30px;">
          <div class="card">
            <div class="imgBx">
            <img src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum Sosis.png">
            </div>
            <div class="contentBx">
            <h2>Dimsum Sosis</h2>
            <div class="size">
              <h3>
                Dimsum sosis ini terbuat
                dari daging ayam pilihan,
                wortel, serta topping
                yang kemudian dibungkus
                kulit pangsit
              </h3>
            </div>
            <a href="/belanja">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col" style="margin-left: 30px;">
          <div class="card">
            <div class="imgBx">
            <img src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum Sayur.png">
            </div>
            <div class="contentBx">
            <h2>Dimsum Sayur</h2>
            <div class="size">
              <h3>
                Dimsum Sayur ini terbuat
                dari daging ayam pilihan,
                wortel, serta topping
                yang kemudian dibungkus
                kulit pangsit
              </h3>
            </div>
            <a href="/belanja">Buy Now</a>
            </div>
          </div>
        </div>
        
      </div>
      <div class="row row-cols-1 row-cols-5 g-4">
        <div class="col">
          <div class="card">
            <div class="imgBx">
            <img src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum Sosis.png">
            </div>
            <div class="contentBx">
            <h2>Dimsum Sosis</h2>
            <div class="size">
              <h3>
                Dimsum sosis ini terbuat
                dari daging ayam pilihan,
                wortel, serta topping
                yang kemudian dibungkus
                kulit pangsit
              </h3>
            </div>
            <a href="/belanja">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col" style="margin-left: 30px;">
          <div class="card">
            <div class="imgBx">
            <img src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum Sayur.png">
            </div>
            <div class="contentBx">
            <h2>Dimsum Sayur</h2>
            <div class="size">
              <h3>
                Dimsum Sayur ini terbuat
                dari daging ayam pilihan,
                wortel, serta topping
                yang kemudian dibungkus
                kulit pangsit
              </h3>
            </div>
            <a href="/belanja">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col" style="margin-left: 30px;">
          <div class="card">
            <div class="imgBx">
            <img src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum Salmon.png">
            </div>
            <div class="contentBx">
            <h2>Dimsum Salmon</h2>
            <div class="size">
              <h3>
                Dimsum salmon ini terbuat
                dari daging ayam pilihan,
                wortel, serta topping
                yang kemudian dibungkus
                kulit pangsit
              </h3>
            </div>
            <a href="/belanja">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col" style="margin-left: 30px;">
          <div class="card">
            <div class="imgBx">
            <img src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum Ayam.png">
            </div>
            <div class="contentBx">
            <h2>Dimsum Ayam</h2>
            <div class="size">
              <h3>
                Dimsum Ayam ini terbuat
                dari daging ayam pilihan,
                wortel, serta topping
                yang kemudian dibungkus
                kulit pangsit
              </h3>
            </div>
            <a href="/belanja">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

<?= $this->endSection(); ?>