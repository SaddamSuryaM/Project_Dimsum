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
    body {
    color: #463C23;
    background-color: #CDC2B2;
    /* padding: 0 1em 1em; */
    font-family: 'KoHo', KoHo;
}
h1{
    text-align:left;
    padding: 15px;
}
input {
    position: absolute;
    opacity: 0;
    z-index: -1;
}
.accordion-wrapper {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: #41371D;
    width: 1200px;
}
.accordion {
    width: 100%;
    color: #F3ECE1;
    overflow: hidden;
    margin-bottom: 16px;
}
.accordion:last-child{
    margin-bottom: 0;
}
.accordion-label {
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    padding: 16px;
    background: #41371D;
    font-weight: bold;
    cursor: pointer;
    font-size: 20px;
}
.accordion-label:hover {
    background: #41371D;
}
.accordion-label::after {
    content: "\276F";
    width: 16px;
    height: 16px;
    text-align: center;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
.accordion-content {
    max-height: 0;
    padding: 0 16px;
    color: #F3ECE1;
    background: #F3ECE1;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
.accordion-content p{
    margin: 0;
    color: #41371D;
    font-size: 18px;
}
input:checked + .accordion-label {
    background: #41371D;
}
input:checked + .accordion-label::after {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
}
input:checked ~ .accordion-content {
    max-height: 100vh;
    padding: 16px;
}
  
  </style>
  
</head>
  <body>
  <?php
    $help = 1;
     foreach ($data as $d): ?>

      <div class="accordion">
        <input type="radio" name="radio-a" id="<?php echo 'check' . $help?>" checked>
        <label class="accordion-label" for="<?php echo 'check' . $help ?>"><?php echo $d['pertanyaan'] ?></label>
        <div class="accordion-content">
          <p><?php echo $d['jawaban'] ?></p>
        </div>
      </div>

    <?php 
    $help++;
  endforeach ?>

</body>

</html>
<?= $this->endSection(); ?>