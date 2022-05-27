<?= $this->extend('Dashboard')?>
<?= $this->section('content')?>
<h2>Edit Fasilitas Kamar</h2>
<p>Silahkan masukan data Fasilitas Kamar baru pada form dibawah ini</p>
<form method="POST" action="/fasilitas-kamar/update" enctype="multipart/form-data">
    <div class="form-group">
        <input type="hidden" name="txtidfasilitas" value="<?=$detailFasilitasKamar[0]['id_fasilitas_kamar']; ?>">
        <label class="font-weight-bold">Nama Fasilitas Kamar</label>
        <input type="text" name="txtinputfasilitaskamar" class="form-control" placeholder="Masukan fasilitas kamar" value="<?=$detailFasilitasKamar[0]['nama_fasilitas']; ?>">
    </div>
<div class="form-group">
        <label class="font-weight-bold">Pilih Tipe Kamar</label>
        <label for="tipe_kamar" ></label>
        <select class="form-control" id="tipe_kamar" name="txtinputtipekamar">
            <?php foreach ($tipe_kamar as $key => $value) : ?>
                <option value="<?= $value['id_tipe_kamar']; ?>"<?= ($detailFasilitasKamar[0]['id_tipe_kamar'] == $value['id_tipe_kamar']) ? 'selected' : ' ' ?>><?= $value['tipe_kamar']?></option>
    <?php endforeach; ?>
            </select>
    <div class="form-group">
        <button class="btn btn-primary">Update Fasilitas Kamar</button>
    </div>
</form>
<?=$this->endSection(); ?>