<?= $this->extend('Dashboard')?>
<?= $this->section('content')?>
<h2>Edit Fasilitas Hotel</h2>
<p>Silahkan masukan data Fasilitas Hotel baru pada form dibawah ini</p>
<form method="POST" action="/fasilitas-hotel/update" enctype="multipart/form-data">
    <div class="form-group">
        <label class="font-weight-bold">Nama Fasilitas Hotel</label>
        <!-- <input type="hidden" name="txtidfasilitas" value="<?=$detailFasilitasHotel[0]['id_fasilitas_umum']; ?>"> -->
        <input type="text" name="txtnamafasilitas" value="<?=$detailFasilitasHotel[0]['nama_fasilitas_umum']; ?>" class="form-control" placeholder="Masukan fasilitas hotel" value="<?=$detailFasilitasHotel[0]['nama_fasilitas_umum']; ?>">
    </div>

    <div class="form-group">
    <label class="font-weight-bold">Deskripsi Fasilitas Hotel</label>
        <!-- <input type="hidden" name="txtidfasilitas" value="<?=$detailFasilitasHotel[0]['id_fasilitas_umum']; ?>"> -->
        <input type="text" name="txtinputdeskripsi" value="<?=$detailFasilitasHotel[0]['deskripsi']; ?>" class="form-control" placeholder="Masukan deskripsi fasilitas hotel" value="<?=$detailFasilitasHotel[0]['nama_fasilitas_umum']; ?>">
    </div>

    <div class="form-group">
        <button class="btn btn-primary"type="submit">Update Fasilitas Hotel</button>
    </div>
</form>
<?=$this->endSection(); ?>