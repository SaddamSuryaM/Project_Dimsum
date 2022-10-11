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
    .detail {
            margin-top: -30px;
            /* margin-bottom: 0px; */
            /* margin-right: 50px; */
            margin-left: 0px;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div>
            <p class="fs-2 detail"><strong><br>Frozen Dimsum</strong></p>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-5 g-4">
            <div class="col">
                <div class="card h-100" style="width: 10rem ;">
                    <img src="/Assets/AdminLTE-3.2.0/dist/img/frozen1.png" class="card-img-top" alt="dimsum ayam">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Dimsum Ayam</strong></h5>
                        <a href="#" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 10rem ;">
                    <img src="/Assets/AdminLTE-3.2.0/dist/img/frozen2.png" class="card-img-top" alt="dimsum sosis">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Dimsum Sosis</strong></h5>
                        <a href="#" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 10rem ;">
                    <img src="/Assets/AdminLTE-3.2.0/dist/img/frozen2.png" class="card-img-top" alt="dimsum sayur">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Dimsum Sayur</strong></h5>
                        <a href="#" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 10rem ;">
                    <img src="/Assets/AdminLTE-3.2.0/dist/img/frozen2.png" class="card-img-top" alt="dimsum sayur">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Dimsum Salmon</strong></h5>
                        <a href="#" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 10rem ;">
                    <img src="/Assets/AdminLTE-3.2.0/dist/img/frozen2.png" class="card-img-top" alt="dimsum sayur">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Dimsum Volcano</strong></h5>
                        <a href="#" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-2 g-4">
                <div class="col">
                    <div class="card h-100" style="width: 10rem ;">
                        <img src="/Assets/AdminLTE-3.2.0/dist/img/frozen1.png" class="card-img-top" alt="dimsum ayam">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Dimsum Ayam</strong></h5>
                            <a href="#" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

<?= $this->endSection(); ?>