<div class="card shadow my-5">
    <div class="card-header">
        <h3>Ubah Data Pegawai</h3>
    </div>
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="<?= BASEURL; ?>/home/updatePegawai" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="nip_lama" value="<?= $data['pegawai']['nip'] ?>" >
                    <div class="form-group row">
                        <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="nip" placeholder="NIP" required autocomplete="off" autofocus id="nip" value="<?= $data['pegawai']['nip'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama" required placeholder="Nama Lengkap" autocomplete="off" id="nama" value="<?= $data['pegawai']['nama_pegawai'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-4 col-form-label">Tempat / Tanggal Lahir</label>
                        <div class="col">
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required autocomplete="off" value="<?= $data['pegawai']['tempat_lahir'] ?>">
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" value="<?= $data['pegawai']['tanggal_lahir'] ?>" name="tgl_lahir" placeholder="Tanggal Lahir" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" required name="agama" placeholder="Agama" autocomplete="off" id="agama" value="<?= $data['pegawai']['agama'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <select class="form-control" required name="jk" id="jk">
                                <option value="laki-laki" <?= $data['pegawai']['jenis_kelamin'] == 'laki-laki' ? 'selected' : null ?>>Laki-laki</option>
                                <option value="perempuan" <?= $data['pegawai']['jenis_kelamin'] == 'perempuan' ? 'selected' : null ?>>Perempuan</option>
                                <!-- <option value="perempuan">Perempuan</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-4 col-form-label">No. HP</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" required name="no_hp" placeholder="No. HP" autocomplete="off" id="no_hp" value="<?= $data['pegawai']['no_hp'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                        <input type="email" class="form-control" required placeholder="Email" autocomplete="off" name="email" id="email" value="<?= $data['pegawai']['email'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-8">
                            <textarea name="alamat" id="alamat" cols="30" required rows="5" class="form-control" placeholder="Alamat Lengkap"><?= $data['pegawai']['alamat'] ?></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Golongan Darah</legend>
                            <div class="col-sm-8">
                                <div class="form-check d-inline mr-3">
                                    <input class="form-check-input" type="radio" name="goldarah" id="goldarah1" value="a" <?= $data['pegawai']['gol_darah'] == 'a' ? 'checked' : null ?> >
                                    <label class="form-check-label" for="goldarah1">
                                        A
                                    </label>
                                </div>
                                <div class="form-check d-inline mr-3">
                                    <input class="form-check-input" type="radio" name="goldarah" id="goldarah2" value="b" <?= $data['pegawai']['gol_darah'] == 'b' ? 'checked' : null ?>>
                                    <label class="form-check-label" for="goldarah2">
                                        B
                                    </label>
                                </div>
                                <div class="form-check d-inline mr-3">
                                    <input class="form-check-input" type="radio" name="goldarah" id="goldarah2" value="ab" <?= $data['pegawai']['gol_darah'] == 'ab' ? 'checked' : null ?>>
                                    <label class="form-check-label" for="goldarah2">
                                        AB
                                    </label>
                                </div>
                                <div class="form-check d-inline mr-3">
                                    <input class="form-check-input" type="radio" name="goldarah" id="goldarah3" value="o" <?= $data['pegawai']['gol_darah'] == 'o' ? 'checked' : null ?>>
                                    <label class="form-check-label" for="goldarah3">
                                        O
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="stat_nikah" class="col-sm-4 col-form-label">Status Pernikahan</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="stat_nikah" id="stat_nikah" required autocomplete="off">
                                <option value="lajang" <?= $data['pegawai']['status_pernikahan'] == 'lajang' ? 'selected' : null ?>>Lajang</option>
                                <option value="kawin" <?= $data['pegawai']['status_pernikahan'] == 'kawin' ? 'selected' : null ?>>Menikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stat_pegawai" class="col-sm-4 col-form-label">Status Kepegawaian</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="stat_pegawai" id="stat_pegawai" required autocomplete="off">
                                <option value="pns" <?= $data['pegawai']['status_kepegawaian'] == 'pns' ? 'selected' : null ?>>PNS</option>
                                <option value="honor" <?= $data['pegawai']['status_kepegawaian'] == 'honor' ? 'selected' : null ?>>Honor</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nip" class="col-sm-4 col-form-label">Pas Photo</label>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="foto">
                                <label class="custom-file-label" for="customFile">Tentukan file</label>
                            </div>
                            <small class="text-info">* Maksimal Ukuran File 1 MB</small>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="<?= BASEURL; ?>/home/index" class="btn btn-warning float-left text-white">Kembali</a>
        <button type="submit" class="btn btn-primary float-right" name="simpanPegawai">Simpan</button>
    </div>    
    </form>
</div>