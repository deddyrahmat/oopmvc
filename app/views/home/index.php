<div class="row mt-5">
    <div class="col-md-6">
        <!-- panggil class flash untuk menampilkan pesan -->
        <?php Flasher::flash() ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6 ">
        <a href="<?= BASEURL; ?>/home/tambahPegawai" class="btn btn-primary float-left">Tambah Data Pegawai</a>
    </div>
    <div class="col-md-6 float-right">
        <form action="<?= BASEURL; ?>/home/search" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Cari Pegawai...">
                <div class="input-group-append">
                    <button class="btn btn-info" type="submit" id="button-addon2">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row mt-2 text-left">
    <div class="col-md-12">
        <div class="table table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No. HP</th>
                        <th scope="col">Status Pegawai</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no=1;
                        foreach ($data['pegawai'] as $pegawai) : ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $pegawai['nip'] ?></td>
                        <td><?= ucwords($pegawai['nama_pegawai']) ?></td>
                        <td><?= ucwords($pegawai['jenis_kelamin']) ?></td>
                        <td><?= $pegawai['no_hp'] ?></td>
                        <td><?= ucwords($pegawai['status_kepegawaian']) ?></td>
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>/home/edit/<?= $pegawai['nip'] ?>" class="btn btn-warning text-white">Ubah</a>
                            <a href="<?= BASEURL; ?>/home/delete/<?= $pegawai['nip'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus </a>
                            <a href="<?= BASEURL; ?>/home/detail/<?= $pegawai['nip'] ?>" class="btn btn-success">Detail </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>