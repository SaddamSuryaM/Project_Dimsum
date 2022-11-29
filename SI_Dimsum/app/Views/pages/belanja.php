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
.shopping-cart{
	padding-bottom: 50px;
	font-family: 'Montserrat', sans-serif;
}

.shopping-cart.dark{
	background-color: #F3ECE1;
  border-radius: 20px;
}

.shopping-cart .content{
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
  border-radius: 20px;
}

.shopping-cart .block-heading{
    padding-top: 50px;
    margin-bottom: 40px;
    text-align: center;
}

.shopping-cart .block-heading p{
	text-align: center;
	max-width: 420px;
	margin: auto;
	opacity:0.7;
}

.shopping-cart .dark .block-heading p{
	opacity:0.8;
}

.shopping-cart .block-heading h1,
.shopping-cart .block-heading h2,
.shopping-cart .block-heading h3 {
	margin-bottom:1.2rem;
	color: #3b99e0;
}

.shopping-cart .items{
	margin: auto;
}

.shopping-cart .items .product{
	margin-bottom: 20px;
	padding-top: 20px;
	padding-bottom: 20px;
}

.shopping-cart .items .product .info{
	padding-top: 0px;
	text-align: center;
}

.shopping-cart .items .product .info .product-name{
	font-weight: 600;
}

.shopping-cart .items .product .info .product-name .product-info{
	font-size: 14px;
	margin-top: 15px;
}

.shopping-cart .items .product .info .product-name .product-info .value{
	font-weight: 400;
}

.shopping-cart .items .product .info .quantity .quantity-input{
    margin: auto;
    width: 80px;
}

.shopping-cart .items .product .info .price{
	margin-top: 15px;
    font-weight: bold;
    font-size: 22px;
 }

.shopping-cart .summary{
	border-top: 2px solid #41371D;
    height: 100%;
    padding: 30px;
}

.shopping-cart .summary h3{
	text-align: center;
	font-size: 1.3em;
	font-weight: 600;
	padding-top: 20px;
	padding-bottom: 20px;
}

.shopping-cart .summary .summary-item:not(:last-of-type){
	padding-bottom: 10px;
	padding-top: 10px;
	border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.shopping-cart .summary .text{
	font-size: 1em;
	font-weight: 600;
}

.shopping-cart .summary .price{
	font-size: 1em;
	float: right;
}

.shopping-cart .summary button{
	margin-top: 20px;
}

@media (min-width: 768px) {
	.shopping-cart .items .product .info {
		padding-top: 25px;
		text-align: left; 
	}

	.shopping-cart .items .product .info .price {
		font-weight: bold;
		font-size: 19px;
		top: 17px; 
	}

	.shopping-cart .items .product .info .quantity {
		text-align: center; 
	}
	.shopping-cart .items .product .info .quantity .quantity-input {
		padding: 4px 10px;
		text-align: center; 
	}
}

  </style>
  
</head>

<body>
<main class="page">
	 	<section class="shopping-cart dark">
		 <?php
          		echo form_open('pages/update');
				?>
	 		<div class="container">
		        <div class="content">
	 				<div class="row">
	 					<div class="col-md-12 col-lg-8">
						 <?php 
						 $i = 1;
						 foreach ($cart->contents() as $key => $value){ ?>
	 						<div class="items">
				 				<div class="product">
				 					<div class="row">
									 <div class="col-md-3">
										 	<img src="<?= base_url('Assets/AdminLTE-3.2.0/dist/img/produk/' . $value['foto']) ?>" style="width:205px; height:141px">
									    </div>
					 					<div class="col-md-8">
					 						<div class="info">
						 						<div class="row">
							 						<div class="col-md-4 product-name">
							 							<div class="product-name">
								 							<a style="font-family: Laila;"><?= $value['name'] ?></a>
									 					</div>
														 <div class="col-md-4 quantity">
							 							<label for="quantity">Quantity: </label>
							 							<input id="quantity" min="1" name="qty<?= $i++?>" type="number" value ="<?= $value['qty'] ?>" class="form-control quantity-input">
							 						</div>
							 						</div> 
							 						<div class="col-md-3 price">
													 <label for="price">Harga: </label>
							 							<span><?= number_to_currency($value['price'],'IDR'); ?></span>
							 						</div>
							 						<div class="col-md-3 price">
													 <label for="price">SubTotal: </label>
							 							<span><?= number_to_currency($value['subtotal'],'IDR'); ?></span>
							 						</div>
													 <div class="col-md-2 price">
													 	<a href="pages/delete/<?= $value['rowid']?>" onclick="return confirm('Apakah anda ingin menghapus <?= $value['name'] ?>');"><button type="button" class="btn btn-primary" style="margin: 15px; background-color:#463C23"><i class="fa fa-trash"></i></button></a> 

													</div>
							 					</div>
							 				</div>
					 					</div>
					 				</div>
				 				</div>
				 			</div>
						 <?php } ?>
			 			</div>
			 			<div class="col-md-12 col-lg-4">
			 				<div class="summary">
			 					<h3>Total</h3>
			 					<div class="summary-item"><span class="text">Subtotal</span><span class="price"><?= number_to_currency($cart->total(),'IDR'); ?></span></div>
			 					<div class="summary-item"><span class="text">Discount</span><span class="price"><?= number_to_currency($cart->total() *0.05,'IDR'); ?></span></div>
			 					<div class="summary-item"><span class="text">Total</span><span class="price"><?= number_to_currency($cart->total() - ($cart->total() *0.05),'IDR'); ?></span></span></div>
								<a href="/buy"><button type="button" class="btn btn-primary btn-lg btn-block" style="background-color:#463C23">Bayar</button></a>
				 			</div>
			 			</div>
		 			</div> 
		 		</div>
				 
	 		</div>
			
			<div class="row">
				<div class="col-md">
					<button type="submit" class="btn btn-primary" style="margin: 15px; background-color:green;"><i class="fa fa-save"></i> Update</button>
					<a href="/clear"><button type="button" class="btn btn-primary" style="margin: 15px; background-color:#F6B040" onclick="return confirm('Apakah anda yakin ingin menghapus semua daftar belanja anda?');"><i class="fa fa-trash"></i> Clear</button></a> 
				</div>
			</div>
			
			<?php echo form_close(); ?>

		</section>
	</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>

<?= $this->endSection(); ?>