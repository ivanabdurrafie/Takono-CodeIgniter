<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Buat pertanyaan</h3>
                </div>
            </div>
            <form action="<?= base_url() ?>tanyajawab/editPertanyaan/<?= $pertanyaan[0]->id_pertanyaan ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body font-weight-bold">
                    <input type="hidden" name="id_pertanyaan" value="<?= $pertanyaan[0]->id_pertanyaan ?>">
                    <input type="hidden" name="oleh" value="<?= $pertanyaan[0]->oleh ?>">
                    <input type="hidden" name="id_user" value="<?= $pertanyaan[0]->id_user ?>">
                    <input type="hidden" name="fotoLama" value="<?= $pertanyaan[0]->foto ?>">

                    <div class="form-group">
                        <label for="mapel">Mata Pelajaran :</label>
                        <?php if (form_error('id_mapel')) : ?>
                            <select class="form-control form-control-warning form-txt-warning" id="mapel" name="id_mapel">
                                <option value=""><?= strip_tags(form_error('id_mapel')) ?></option>
                                <?php foreach ($mapel as $k) : ?>
                                    <option value="<?= $k->id_mapel ?>"><?= $k->mata_pelajaran ?></option>
                                <?php endforeach; ?>
                            </select>
                        <?php else : ?>
                            <select class="form-control" id="mapel" name="id_mapel">
                                <option value="">Pilih mata pelajaran</option>
                                <?php foreach ($mapel as $k) : ?>
                                    <?php if ($k->id_mapel ==  $pertanyaan[0]->id_mapel) : ?>
                                        <option value="<?= $k->id_mapel ?>" selected><?= $k->mata_pelajaran ?></option>
                                    <?php else : ?>
                                        <option value="<?= $k->id_mapel ?>"><?= $k->mata_pelajaran ?></option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                        <?php endif ?>
                    </div>

                    <?php if (form_error('pertanyaan')) : ?>
                        <div class="form-group">
                            <label for="exampleTextarea1">Pertanyaanmu :</label>
                            <textarea class="form-control form-control-danger form-txt-danger" rows="4" placeholder="<?= strip_tags(form_error('pertanyaan')) ?>" name="pertanyaan"></textarea>
                        </div>
                    <?php else : ?>
                        <div class="form-group">
                            <label for="exampleTextarea1">Pertanyaanmu :</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Masukkan pertanyaanmu disini" name="pertanyaan"><?= $pertanyaan[0]->pertanyaan ?></textarea>
                        </div>
                    <?php endif ?>

                    <div class="form-group">
                        <label>Perlu upload foto?</label>
                        <input type="file" name="foto" class="file-upload-default">
                        <input type="hidden" name="fotoLama" value="<?= $pertanyaan[0]->foto ?>">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" readonly placeholder="Jangan lupa beri keterangan foto di kolom pertanyaan ya">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Tekan aku</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Ubah pertanyaan</button>
                    <a href="<?= base_url() ?>tanyajawab/tanyajawabku/<?= $pertanyaan[0]->id_user ?>" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>