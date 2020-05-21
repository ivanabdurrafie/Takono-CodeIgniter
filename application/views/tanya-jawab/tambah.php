<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Buat pertanyaan</h3>
                </div>
            </div>
            <form action="<?= base_url() ?>tanyajawab/tambahKomentar" method="POST">
                <div class="card-body font-weight-bold">

                    <div class="form-group">
                        <label for="exampleSelectGender">Mata Pelajaran :</label>
                        <select class="form-control" id="exampleSelectGender">
                            <option>Pilih mata pelajaran</option>
                            <option>Sistem Informasi</option>
                            <option>IPS</option>
                            <option>Fisika</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Pertanyaanmu :</label>
                        <!-- todo butuh input hidden id_pertanyaan, id_user -->
                        <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Masukkan pertanyaanmu disini"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Perlu upload foto?</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" readonly placeholder="Masukkan fotomu disini">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Tekan aku</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Kirim pertanyaan</button>
                    <a href="<?= base_url() ?>tanyajawab/" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>