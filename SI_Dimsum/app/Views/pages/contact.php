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
  box-shadow: rgb(37, 11, 5) 5px 5px,  rgb(48, 26, 17) 10px 10px,rgb(53, 26, 17)  15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
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
<div class="container-fluid">

  <h1>Yang sering ditanyakan : </h1>
  
  <ul class="cards">
  <li>
    <a href="" class="card">
      <img src="https://pbs.twimg.com/media/EzVkJ1gUYAAoLxZ.jpg" class="card__image"  />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="https://pbs.twimg.com/media/EzVkJ1gUYAAoLxZ.jpg"  />
          <div class="card__header-text">
            <h3 class="card__title">NUR SETIOWATI</h3>            
            <span class="card__status">2017051013</span>
          </div>
        </div>
        <p class="card__description"></p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH3Ozvn2cZsqoF24nWDndN8GCychfv2MyCcyU0Xr24UP-7M8n_jj7slHB4PwGalMR2DOs&usqp=CAU" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="data:image/jpeg;base64,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" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">AZZAHRA NABILA W</h3>
            <span class="card__status">2057051020</span>
          </div>
        </div>
        <p class="card__description"></p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="https://i.pinimg.com/736x/4c/20/1d/4c201d6aae999ed54a842f17e48a31fc.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="https://i.pinimg.com/736x/4c/20/1d/4c201d6aae999ed54a842f17e48a31fc.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"> ALIFAN RENALDI</h3>
            <span class="card__tagline"></span>            
            <span class="card__status">2017051044</span>
          </div>
        </div>
        <p class="card__description"></p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="https://i.pinimg.com/736x/dc/42/a3/dc42a31f928a56d57b5e2fb127e8b4d2.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="https://i.pinimg.com/736x/dc/42/a3/dc42a31f928a56d57b5e2fb127e8b4d2.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">SADDAM SURYA M</h3>
            <span class="card__status">2017051014</span>
          </div>          
        </div>
        <p class="card__description"></p>
      </div>
    </a>
  </li>    
</ul>

<div class="container">
    <div class="row">
      <div class="col-lg-7">
      <h2 style="text-align:left">Hubungi Kami</h2>
        <p style="font-size: 20px;">Kantor       085379913156  </p>
      </div>
        <div class="col-lg-5">
                <a class="btn text-white" style="background-color: #25d366;" href="https://wa.me/6285783999031?text=contoh%20isi%20pesan%20dikirim%20via%20whatsapp" role="button">
          <i class="fab fa-whatsapp"></i>
          Whatsapp
        </a>

        <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7">
      <h2 style="text-align:left">Alamat Kami</h2>
        <p style="font-size: 20px;">Jalan Pasaraya Blok M Gedung B Lantai 6, Jalan Iskandariyah II No.7 RT.3/RW.1, Melawai, Kebayoran Baru, Jakarta Selatan, Daerah Khusus Ibu Kota Jakarta, 12160.  </p>
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