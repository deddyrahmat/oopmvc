<div class="card shadow my-5">
    <div class="card-header">
        <h3>Detail Pegawai</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow text-center">
                    <div class="card-body">
                        <img src="<?= BASEURL; ?>/img/<?= $data['pegawai']['foto_pegawai'] ?>" alt="user" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-8 text-left">
                <div class="card">
                    <div class="card-body">
                        <table class="text-dark ">
                            <tr>
                                <td class="font-weight-bold">NIP</td>
                                <td>&nbsp; : &nbsp;</td>
                                <td><?= $data['pegawai']['nip'] ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Nama Lengkap</td>
                                <td>&nbsp; :</td>
                                <td><?= ucwords($data['pegawai']['nama_pegawai']) ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Tempat, Tanggal Lahir</td>
                                <td>&nbsp; :</td>
                                <td><?= ucwords($data['pegawai']['tempat_lahir']) . ', ' . date('d-m-Y',strtotime($data['pegawai']['tanggal_lahir'])) ?> </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Agama</td>
                                <td>&nbsp; :</td>
                                <td><?= ucwords($data['pegawai']['agama']) ?> </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Jenis Kelamin</td>
                                <td>&nbsp; :</td>
                                <td><?= ucwords($data['pegawai']['jenis_kelamin']) ?> </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Golongan Darah</td>
                                <td>&nbsp; :</td>
                                <td><?= strtoupper($data['pegawai']['gol_darah']) ?> </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Status Perkawinan</td>
                                <td>&nbsp; :</td>
                                <td><?= ucwords($data['pegawai']['status_pernikahan']) ?> </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Status Kepegawaian</td>
                                <td>&nbsp; :</td>
                                <td><?= strtoupper($data['pegawai']['status_kepegawaian']) ?> </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Alamat</td>
                                <td>&nbsp; :</td>
                                <td><?= ucwords($data['pegawai']['alamat']) ?> </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Email</td>
                                <td>&nbsp; :</td>
                                <td><?= $data['pegawai']['email'] ?> </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">No. HP</td>
                                <td>&nbsp; :</td>
                                <td><?= $data['pegawai']['no_hp'] ?> </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="<?= BASEURL; ?>/home/index" class="btn btn-warning float-left text-white">Kembali</a>
    </div>
</div>