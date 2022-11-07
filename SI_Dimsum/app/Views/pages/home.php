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
    .judul {
      margin-top: 100px;
      /* margin-bottom: 200px; */
      margin-right: 200px;
      /* margin-left: 80px; */
      font-size: 40px;
    }
    .dimsum {
      margin-top: 100px;
      /* margin-bottom: 200px; */
      margin-right: 100px;
      /* margin-left: 80px; */
    }
  </style>
  
</head>

  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <p class="judul" ><strong><br>SDM (SI DIMSUM MBOK)</strong></p>
        <p style="font-size: 20px;">Kami menjamin akan memberikan  dimsum dengan kualitas terbaik  dan harga termurah. Dimsum mbok  dibuat dengan bahan segar pilihan terbaik. Kami berkomitmen untuk menyediakan dimsum yang berkualitas,bebas bahan pengawet,cepat dalam 
penyajian, yang tentunya dengan harga terjangkau. Kami menjamin akan memberikan  dimsum dengan kualitas terbaik  dan harga termurah. Dimsum mbok  dibuat dengan bahan segar pilihan terbaik. Kami berkomitmen untuk menyediakan dimsum yang berkualitas,bebas bahan pengawet,cepat dalam 
penyajian, yang tentunya dengan harga terjangkau. </p>
      </div>
        <div class="col-lg-5">
          <img class="fs-2 dimsum" src="/Assets/AdminLTE-3.2.0/dist/img/Dimsum1.png">
        </div>
 
    </div>
  </div>
  </div>
  <div class="container justify-text-center">
    <a href="<?= base_url('produk') ?>" type="button" class="btn btn-warning" >Detail Produk > </a>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

<?= $this->endSection(); ?>