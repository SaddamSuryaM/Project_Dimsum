<?= $this->extend('templates/template');?>
<?= $this->section('content');?>

<div class="p-4">

<form action="/update/<?=$mahasiswa['id'] ?>" method="POST">
<div class='row'>
<div class="col-6">
    <div class="form-group">
        <label for="npm">NPM</label>
        <input type="text" name="npm" class="form-control" id="npm" value="<?= $mahasiswa['npm']?>">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama'] ?>">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa['alamat']?>">
    </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea type="text" name="deskripsi" rows="3" class="form-control" id="deskripsi" value="<?= $mahasiswa['deskripsi']?>"></textarea>
        </div>
    </div>
</div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
</form>
</div>

<?= $this->endSection('content');?>