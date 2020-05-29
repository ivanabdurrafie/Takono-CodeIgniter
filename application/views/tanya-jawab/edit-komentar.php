<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Bantu jawab</h3>
                </div>
            </div>
            <form action="<?= base_url() ?>tanyajawab/editkomentar/<?= $komentar[0]->id_komentar ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body font-weight-bold">

                    <div class="form-group">
                        <input type="hidden" name="id_komentar" value="<?= $komentar[0]->id_komentar ?>">
                        <input type="hidden" name="oleh" value="<?= $komentar[0]->oleh ?>">
                        <input type="hidden" name="skor" value="<?= $komentar[0]->skor ?>">
                        <input type="hidden" name="id_pertanyaan" value="<?= $komentar[0]->id_pertanyaan ?>">
                        <input type="hidden" name="id_user" value="<?= $komentar[0]->id_user ?>">
                        <input type="hidden" name="fotoLama" value="<?= $komentar[0]->foto ?>">

                        <?php if (form_error('komentar')) : ?>
                            <div class="form-group">
                                <label for="exampleTextarea1">Jawabanmu :</label>
                                <textarea class="form-control form-control-danger form-txt-danger" rows="4" placeholder="<?= strip_tags(form_error('komentar')) ?>" name="komentar"></textarea>
                            </div>
                        <?php else : ?>
                            <div class="form-group">
                                <label for="exampleTextarea1">Jawabanmu :</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Masukkan jawabanmu disini" name="komentar"><?= $komentar[0]->komentar ?></textarea>
                            </div>
                        <?php endif ?>

                        <div class="form-group">
                            <label>Bantu dengan Foto? </label>
                            <input type="file" name="foto" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" readonly placeholder="Jangan lupa beri keterangan foto di kolom jawaban ya" name="txtFoto" required>
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Tekan aku</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Ubah jawaban</button>
                    <a href="<?= base_url()?>tanyajawab/tanyajawabku/<?= $komentar[0]->id_user ?>" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>