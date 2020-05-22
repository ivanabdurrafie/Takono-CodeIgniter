<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Tambah Data</h3>
                </div>
            </div>
            <form action="<?= base_url() ?>siswa/tambah" method="POST" enctype="multipart/form-data">
                <div class="card-body font-weight-bold">
                    <div class="form-group">
                        <label for="nis">NIS : </label>
                        <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS siswa" name="nis">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama : </label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama siswa" name="nama">
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
                        <input type="text" class="form-control" id="email" placeholder="Masukkan email siswa" name="email">
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
                            <input type="text" class="form-control file-upload-info" readonly placeholder="Upload foto siswa">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Tekan aku</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Tambah data</button>
                    <a href="<?= base_url() ?>siswa/" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>