<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk SDM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="<?php echo base_url('Assets/AdminLTE-3.2.0/dist/css/main.css') ?>" rel="stylesheet">
  </head>
  <body>

    <div class="header">
      <h1>Produk SDM</h1>
    </div>

    <div class="content-wrapper">

      <nav class="navbar">
        <div class="navbar-left">
          <img class="img-fluid mb-5" src="<?php echo base_url('Assets/AdminLTE-3.2.0/dist/img/Logo-Dimsum.png') ?>">
          <a class="link-item active" href="<?php echo base_url('HomeAdmin') ?>">
            <span class="icon"></span>
            <span class="text">Management Produk</span>
          </a>
          <a class="link-item" href=""<?php echo base_url('Help') ?>>
            <span class="icon"></span>
            <span class="text">Management Bantuan</span>
          </a>
        </div>
      </nav>

      <div class="page-wrapper">
        <div class="card">
          <form action="<?php echo base_url('simpanProduk') ?>" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h2>Tambah Produk</h2>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label for="produk">Nama Produk</label>
                <input class="form-control" type="text" name="produk" id="produk">
              </div>
              <div class="mb-3">
                <label for="foto">Gambar</label>
                <input class="form-control" type="file" name="foto" id="foto">
              </div>
              <div class="mb-3">
                <label for="desk">Deskripsi</label>
                <input class="form-control" type="text" name="desk" id="desk">
              </div>
              <div class="mb-3">
                <label for="harga">Harga</label>
                <input class="form-control" type="text" name="harga" id="harga">
              </div>
            </div>
            <div class="card-footer">
              <button class="btn" type="reset">Hapus Data</button>
              <button class="btn" type="submit">Submit</button>
            </div>
            <div class="card-footer">
            <a href="<?php echo base_url('HomeAdmin') ?>"><button class="btn" type="button">Cancel</button></a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <footer>
      <div class="row justify-content-between align-items-center h-100 w-100 px-5">
        <div class="col-lg-3">
          <h1>1245+</h1>
          <p>Telah banyak mitra kami yang terpercaya dan berada dibeberapa wilayah Indonesia, seperti Bandar Lampung.</p>
        </div>
        <div class="col-lg-3">
          <h1>1300+</h1>
          <p>Telah banyak mitra kami yang terpercaya dan berada dibeberapa wilayah Indonesia, seperti Bandar Lampung.</p>
        </div>
        <div class="col-lg-3">
          <h1>1545+</h1>
          <p>Telah banyak mitra kami yang terpercaya dan berada dibeberapa wilayah Indonesia, seperti Bandar Lampung.</p>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
