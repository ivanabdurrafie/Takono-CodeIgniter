<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Ubah Data</h3>
                </div>
            </div>
            <form action="<?= base_url() ?>siswa/edit/<?= $siswa[0]->id_siswa ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body font-weight-bold">
                    <input type="hidden" name="id_siswa" value="<?= $siswa[0]->id_siswa ?>">
                    <div class="form-group">
                        <label for="nis">NIS : </label>
                        <?php if (form_error('nis')) : ?>
                            <input type="text" class="form-control form-txt-warning form-txt-warning" id="nis" placeholder="<?= strip_tags(form_error('nis')) ?>" name="nis">
                        <?php else : ?>
                            <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS siswa" name="nis" value="<?= $siswa[0]->nis ?>">
                        <?php endif ?>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama : </label>
                        <?php if (form_error('nama')) : ?>
                            <input type="text" class="form-control form-control-warning form-txt-warning" id="nama" placeholder="<?= strip_tags(form_error('nama')) ?>" name="nama">
                        <?php else : ?>
                            <input type="text" class="form-control " id="nama" placeholder="Masukkan nama siswa" name="nama" value="<?= $siswa[0]->nama ?>">
                        <?php endif ?>
                    </div>

                    <div class="form-group">
                        <label for="jenkel">Jenis Kelamin : </label>
                        <div class="form-radio">
                            <?php if ($siswa[0]->jenkel == "Laki - laki") : ?>
                                <div class="radio radio-inline">
                                    <label>
                                        <input type="radio" name="jenkel" checked="checked" value="Laki - laki">
                                        <i class="helper"></i>Laki-laki
                                    </label>
                                </div>
                                <div class="radio radio-inline">
                                    <label>
                                        <input type="radio" name="jenkel" value="Perempuan">
                                        <i class="helper"></i>Perempuan
                                    </label>
                                </div>
                            <?php else : ?>
                                <div class="radio radio-inline">
                                    <label>
                                        <input type="radio" name="jenkel" value="Laki - laki">
                                        <i class="helper"></i>Laki-laki
                                    </label>
                                </div>
                                <div class="radio radio-inline">
                                    <label>
                                        <input type="radio" name="jenkel" value="Perempuan" checked="checked">
                                        <i class="helper"></i>Perempuan
                                    </label>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email : </label>
                        <?php if (form_error('email')) : ?>
                            <input type="text" class="form-control form-control-warning form-txt-warning" id="email" placeholder="<?= strip_tags(form_error('email')) ?>" name="email">
                        <?php else : ?>
                            <input type="text" class="form-control" id="email" placeholder="Masukkan email siswa" name="email" value="<?= $siswa[0]->email ?>">
                        <?php endif ?>
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas :</label>
                        <?php if (form_error('id_kelas')) : ?>
                            <select class="form-control form-control-warning form-txt-warning" id="kelas" name="id_kelas">
                                <option value=""><?= strip_tags(form_error('id_kelas')) ?></option>
                                <?php foreach ($kelas as $k) : ?>
                                    <option value="<?= $k->id_kelas ?>"><?= $k->kelas ?></option>
                                <?php endforeach; ?>
                            </select>
                        <?php else : ?>
                            <select class="form-control" id="kelas" name="id_kelas">
                                <?php foreach ($kelas as $k) : ?>
                                    <?php if ($k->kelas ==  $siswa[0]->kelas) : ?>
                                        <option value="<?= $k->id_kelas ?>" selected><?= $k->kelas ?></option>
                                    <?php else : ?>
                                        <option value="<?= $k->id_kelas ?>"><?= $k->kelas ?></option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                        <?php endif ?>
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Ubah data</button>
                    <a href="<?= base_url() ?>siswa/" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>