<?= $this->extend('Dashboard') ?>
<?= $this->section('content') ?>
<h2>Penambahan Data Fasilitas Hotel</h2>
<p>Silakan gunakan form dibawah ini untuk menambahkan data Fasilitas Hotel Baru</p>
<form method="POST" action="/fasilitas-hotel/simpan" enctype="multipart/form-data">
<div class="form-group">
<label class="font-weight-bold">Nama Fasilitas Hotel</label>
<input type="text" name="txtNamafasilitasHotel" class="form-control" placeholder=" ", autocomplete="off" autofocus>

<div class="form-group">
<label for="exampleFormControlTextarea1" class="font-weight-bold" >Deskripsi Fasilitas Hotel </label>
<textarea name="txtInputDeskripsi" class="form-control rounded-0" id="exampleFormControlTextarea" rows="10"></textarea>
</div>

<div class="form-group">
<label class="font-weight-bold">Foto Fasilitas Hotel</label>
<input type="file" name="txtInputFoto" class="form-control"> 
</div>

<div class="form-group">
    <button class="btn btn-primary" type="submit">Simpan Fasilitas Hotel</button>
</div>
</form>
<?= $this->endSection() ?>