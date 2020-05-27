<div class="berhasil" data-flashdata="<?php echo $this->session->flashdata('berhasil'); ?>"></div>
<div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<div class="nama" data-flashdata="Jawaban"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Pertanyaan</h3>
                </div>
            </div>
            <div class="card-body">
                <p class="font-weight-bold"><?= $pertanyaan[0]->oleh ?></p>
                <h5 class="font-weight-bold"><?= $pertanyaan[0]->pertanyaan ?></h5>
                <?php if ($pertanyaan[0]->foto != null) : ?>
                    <img src="<?= base_url() ?>uploads/foto-soal/<?= $pertanyaan[0]->foto ?>" alt="" width="500px" class="img-thumbnail">
                <?php endif ?>
                <p class="float-right"><?= $pertanyaan[0]->tanggal ?></p>
            </div>
        </div>
    </div>
</div>

<?php if ($this->session->userdata('level') == null) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="judul">
                        <h3>Bantu jawab</h3>
                    </div>
                </div>
                <div class="card-body">
                    <p>Sepertinya kamu belum login ya? yuk login dulu.</p>
                    <p>Klik link di bawah ini untuk menuju halaman login yaa..</p>
                    <a href="<?= base_url() ?>login/" class="btn btn-primary btn-rounded btn-sm">Login</a>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="judul">
                        <h3>Bantu jawab</h3>
                    </div>
                </div>
                <div class="card-body font-weight-bold">
                    <form action="<?= base_url() ?>tanyajawab/detailpertanyaan/<?= $pertanyaan[0]->id_pertanyaan ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id_pertanyaan" value="<?= $pertanyaan[0]->id_pertanyaan ?>">

                            <?php if ($this->session->userdata('level') == "guru") : ?>
                                <?php foreach ($guru as $g) : ?>
                                    <?php if ($g->nip == $this->session->userdata('id_guru')) : ?>
                                        <input type="hidden" name="id_user" value="<?= $this->session->userdata('id_guru') ?>">
                                        <input type="hidden" name="oleh" value="<?= $g->nama . ", Guru" ?>">
                                    <?php endif ?>
                                <?php endforeach ?>
                            <?php else : ?>
                                <?php foreach ($siswa as $s) : ?>
                                    <?php if ($s->nis == $this->session->userdata('id_siswa')) : ?>
                                        <input type="hidden" name="id_user" value="<?= $this->session->userdata('id_siswa') ?>">
                                        <input type="hidden" name="oleh" value="<?= $s->nama . ", " . $s->kelas ?>">
                                    <?php endif ?>
                                <?php endforeach ?>
                            <?php endif ?>

                            <input type="hidden" name="skor" value="0">

                            <?php if (form_error('komentar')) : ?>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Komentarmu :</label>
                                    <textarea class="form-control form-control-danger form-txt-danger" rows="4" placeholder="<?= strip_tags(form_error('komentar'))?>" name="komentar"></textarea>
                                </div>
                            <?php else : ?>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Komentarmu :</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Masukkan komentarmu disini" name="komentar"></textarea>
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
                        <button class="btn btn-primary">Kirim jawaban</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>
<?php foreach ($komentar as $k) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="judul">
                        <h3>Jawaban</h3>
                    </div>
                </div>
                <div class="card-body">
                    <p class="font-weight-bold"><?= $k->oleh ?></p>
                    <h6 class="font-weight-bold"><?= $k->komentar ?></h6>
                    <?php if ($k->foto != null) : ?>
                        <img src="<?= base_url() ?>uploads/foto-jawaban/<?= $k->foto ?>" alt="" width="500px" class="img-thumbnail">
                    <?php endif ?>
                </div>
                <div class="card-footer">
                    <form action="<?= base_url() ?>tanyajawab/like/" method="post">
                        <input type="hidden" name="id_komentar" value="<?= $k->id_komentar ?>">
                        <input type="hidden" name="id_pertanyaan" value="<?= $k->id_pertanyaan ?>">
                        <button class="btn btn-success">Terimakasih <span class="badge badge-light"> <?= $k->skor ?></span> </button>
                        <p class="float-right"><?= $k->tanggal ?> </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>