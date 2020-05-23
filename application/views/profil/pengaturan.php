<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Profil</h3>
            </div>
            <div class="card-body">
                <input type="hidden" name="id_siswa" value="">
                <div class="form-group">
                    <label for="nis">NIS : </label>
                    <input type="text" class="form-control" id="nis" placeholder="Masukkan NISmu" name="nis">
                </div>

                <div class="form-group">
                    <label for="nama">Nama : </label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan namamu" name="nama">
                </div>

                <div class="form-group">
                    <label for="jenkel">Jenis Kelamin : </label>
                    <div class="form-radio">
                        <div class="radio radio-inline">
                            <label>
                                <input type="radio" name="jenkel" checked="checked" value="Laki-laki">
                                <i class="helper"></i>Laki-laki
                            </label>
                        </div>
                        <div class="radio radio-inline">
                            <label>
                                <input type="radio" name="jenkel" value="Perempuan">
                                <i class="helper"></i>Perempuan
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email : </label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan emailmu" name="email">
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas :</label>
                    <select class="form-control" id="exampleSelectGender">
                        <option>Pilih kelas</option>
                        <option>Sistem Informasi</option>
                        <option>IPS</option>
                        <option>Fisika</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Foto : </label>
                    <input type="file" name="foto" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" readonly placeholder="Upload fotomu">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Tekan aku</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Ubah profil</button>
                <a href="<?= base_url() ?>" class="btn btn-light ml-2">Kembali</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Akun</h3>
            </div>
            <div class="card-body">
                <input type="hidden" name="id_user" value="">
                <div class="form-group">
                    <label for="nis">Username : </label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan username barumu" name="username">
                </div>
                <div class="form-group">
                    <label for="nis">Password : </label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan password barumu" name="password">
                </div>
                <div class="form-group">
                    <label for="nis">Ulangi password : </label>
                    <input type="text" class="form-control" id="nama" placeholder="Ulangi password barumu" name="repassword">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Ubah akun</button>
                <a href="<?= base_url() ?>" class="btn btn-light ml-2">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>