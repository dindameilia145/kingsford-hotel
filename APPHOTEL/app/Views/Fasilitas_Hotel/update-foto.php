<?= $this->extend('Dashboard') ?>
<?= $this->section('content') ?>
<h2>update foto</h2>
<p>Silahkan update Foto</p>
<form method="POST" action="/fasilitas-hotel/update-foto" enctype="multipart/form-data">
    <div class="form-group">
        <label class="font-weight-bold">Nama Fasilitas Hotel</label>
        <input type="text" name="txtnamafasilitas" class="form-control" value="<?= $detailFasilitasHotel[0]['nama_fasilitas_umum']; ?>" readonly>
        <input type="hidden" name="tfoto" class="form-control" value="<?= $detailFasilitasHotel[0]['foto']; ?>" readonly>
    </div>
    <div class="form-group">
        <label class="font-weight-bold"> Foto Fasilitas Hotel</label><br />
        <?php
        if (!empty($detailFasilitasHotel[0]['foto'])) {
            echo '<img src="' . base_url("/gambar/" . $detailFasilitasHotel[0]['foto']) . '" width="150">';
        }
        ?>
        <input type="file" name="txtFoto" class="form-control" >
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Update Foto Fasilitas</button>
    </div>
</form>
<?= $this->endSection(); ?>