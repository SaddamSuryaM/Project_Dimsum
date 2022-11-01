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
      <h1>SI DIMSUM</h1>
    </div>

    <div class="content-wrapper">

      <nav class="navbar">
        <div class="navbar-left">
          <img class="img-fluid mb-5" src="<?php echo base_url('Assets/AdminLTE-3.2.0/dist/img/Logo-Dimsum.png') ?>">
          <a class="link-item active" href="<?php echo base_url('HomeAdmin') ?>">
            <span class="icon"></span>
            <span class="text">Management Produk</span>
          </a>
          <a class="link-item" href="<?php echo base_url('Help') ?>">
            <span class="icon"></span>
            <span class="text">Management Bantuan</span>
          </a>
        </div>
      </nav>

      <div class="page-wrapper">
        <div class="card">
        <div class='pd-2'>
          
        <a class=" btn btn-primary mb-3" href="<?php echo base_url('tambahProduk') ?>" role="button"><i class="fa fa-plus"></i>Tambah</a>
        <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Gambar</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Harga</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; 
    foreach($produk as $pr) : ?>
    <tr>
    
      <th scope="row"><?= $no ?></th>
      <td><?= $pr['produk'] ?></td>
      <td><?php echo "<img src='Assets/AdminLTE-3.2.0/dist/img/produk/$pr[foto] 'width='70' height='90'/>"?></td>
      <td><?= $pr['desk'] ?></td>
      <td><?= $pr['harga'] ?></td>
      <td>
        <div class="d-flex">
          <a class="btn btn-warning mr-3" href="/editProduk/<?php echo $pr['id'] ?>"><i class="fa fa-edit"></i> Edit</a>
          <form action="/deleteProduk/<?php echo $pr['id'] ?>" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger" style="margin-left: 10px;"><i class="fa fa-trash"></i> Delete</button>
          </form>
        </div>
        </td>
    </tr>
    <?php $no++; endforeach;?>
   </tbody>
 </table>
        </div>
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
