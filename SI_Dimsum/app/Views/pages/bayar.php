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
            --surface-color: #FFFF;
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
            background-color: #fef8f8;
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
    <div class="container-fluid">
        <div class="card" style="width : 25 rem;padding-bottom:60px;border-radius:50px; background-color:#F3ECE1">
            <div class="container" style="margin-top: 60px;">
            <?php echo form_open('OrderController/bayar'); ?>
                <div class="card-body" >
                <?php foreach ($cart->contents() as $key => $value){ ?>
                    <?php
                    echo form_hidden('ide'.$value['id'],$value['id']); 
                    echo form_hidden('fotoe'.$value['id'],$value['foto']); 
                    echo form_hidden('produke'.$value['id'],$value['name']);
                    echo form_hidden('qtye'.$value['id'],$value['qty']);
                    echo form_hidden('subtotale'.$value['id'],$value['subtotal']); 
                    echo form_hidden('pricee'.$value['id'],$value['price']); 
                    echo form_hidden('transaksi',$value['id']); 
                    
                    ?>
                    <div class="container" style="margin-left:30px ;">
                        
                        <div style="display:flex ; margin:25px">
                            <img src="<?= 
                            base_url('Assets/AdminLTE-3.2.0/dist/img/produk/' . $value['foto']) ?>" style="border-radius: 20px;width:250px;height:200px;margin-right:80px;">
                            <div>
                            <h2><?= $value['name'] ?></h2>
                                <p class="card-text">Harga : <?= number_to_currency($value['price'],'IDR'); ?></p>
                                <p class="card-text">Jumlah : <?= $value['qty'] ?></p>
                                <p class="card-text">Diskon : <?= number_to_currency(($value['subtotal'] *0.05),'IDR'); ?></p>
                                <p class="card-text">Total : <?= number_to_currency($value['subtotal'],'IDR'); ?></p>
                                
                            </div>
                        </div>
                    </div>
                    <?php } ?>  
                    <button type="submit" class="btn btn-primary" style="margin: 15px; background-color:black;"><i class="fa fa-buy"></i> Bayar</button>
                </div>
                <?php echo form_close(); ?>
            </div>
            <br>
        </div>
    </div>

</body>

</html>

<?= $this->endSection(); ?>