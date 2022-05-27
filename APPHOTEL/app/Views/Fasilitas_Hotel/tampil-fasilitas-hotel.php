<?= $this->extend('Dashboard') ?>
<?= $this->section('content') ?>
<h2>Data Fasilitas Hotel</h2>
<p>Berikut ini daftar Fasilitas Hotel yang sudah terdaftar dalam database </p>
<P>
    <a href="/fasilitas-hotel/tambah" class="btn btn-primary btn-sm">Tambah Fasilitas Hotel</a>
</p>
<?php if (!empty(session()->getFlashdata('berhasil'))) : ?>
    <div class="alert aler-success">
        <?php echo session()->getFlashdata('berhasil'); ?>
    </div>
<?php endif ?>
<table class="table table-sm table-hover">
    <thead class="bg-light text-center">
        <tr>
            <th>Nama Fasilitas Hotel</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ListFasilitasHotel as $row) : ?>
            <tr>
                <!-- <td><?= $row['id_fasilitas_umum'] ?></td> -->
                <td><?= $row['nama_fasilitas_umum'] ?></td>
                <td><?= $row['deskripsi'] ?></td>
                <td><img src="/gambar/<?=$row['foto'] ?>" width="300px" alt=""></td>
                <td class="text-center">
                    <a href="edit/<?= $row['id_fasilitas_umum'] ?>" class="btn btn-info btn-sm mr-1">edit</a>
                    <a href="foto/<?= $row['id_fasilitas_umum'] ?>" class="btn btn-info btn-sm mr-1">foto</a>
                    <a href="hapus/<?= $row['id_fasilitas_umum'] ?>"OnClick="return confirm('Anda Yakin Data Ini Dihapus?')" class="btn btn-danger btn-sm">hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection() ?>