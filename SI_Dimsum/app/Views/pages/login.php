<?php

use Faker\Provider\Base;
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <style>
        .main {
            background-color: #CDC2B2;
        }
    </style>
    <div class="main">
        <div class="container mt-5 col-5">
            <div class="card">
                <div class="card-header" style="background-color: blue ; color:#ffffff ;">
                    LOGIN
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url("/admin") ?>" method="POST">
                        <?php if (session()->getFlashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <?php echo session()->getFlashdata('error') ?>
                            </div>
                        <?php } ?>
                        <div class="mb-3">
                            <label for="inputUsername" class="form-label">
                                Username
                            </label>
                            <input type="text" name="member_username" class="form-control" value="<?php echo session()->getFlashdata('member_username') ?>" id="inputUsername" placeholder="Masukan Username">
                        </div>
                        <div class="mb-3">
                            <label for="inputUsername" class="form-label">
                                Password
                            </label>
                            <input type="password" name="member_password" class="form-control" id="inputPassword" placeholder="Masukan Password">
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="login" class="btn btn-primary" value="LOGIN">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>