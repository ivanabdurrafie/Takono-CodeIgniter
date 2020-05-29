<div class="berhasil" data-flashdata="<?php echo $this->session->flashdata('berhasil'); ?>"></div>
<div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<div class="nama" data-flashdata="Jawaban"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>
                        Pertanyaan
                        <?php if ($pertanyaan[0]->status != null) {
                            echo " (" . $pertanyaan[0]->status . ", " . $pertanyaan[0]->tanggal_edit . ")";
                        } ?>
                    </h3>
                </div>
            </div>
            <div class="card-body">
                <p class="font-weight-bold"><?= $pertanyaan[0]->oleh ?></p>
                <h5 class="font-weight-bold"><?= $pertanyaan[0]->pertanyaan ?></h5>
                <?php if ($pertanyaan[0]->foto != null) : ?>
                    <img src="<?= base_url() ?>uploads/foto-soal/<?= $pertanyaan[0]->foto ?>" alt="" width="500px" class="img-thumbnail">
                <?php endif ?>

            </div>
            <div class="card-footer">
                <a href="<?= base_url() ?>pertanyaan/" class="btn btn-light">Kembali</a>
                <p class="float-right"><?= $pertanyaan[0]->tanggal ?></p>
            </div>
        </div>
    </div>
</div>

<?php foreach ($komentar as $k) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="judul">
                        <h3>
                            Jawaban
                            <?php if ($k->status != null) {
                                echo " (" . $k->status . ", " . $k->tanggal_edit . ")";
                            } ?>
                        </h3>
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
                    <form action="<?= base_url() ?>pertanyaan/hapusKomentar/" method="post">
                        <input type="hidden" name="id_komentar" value="<?= $k->id_komentar ?>">
                        <input type="hidden" name="id_pertanyaan" value="<?= $k->id_pertanyaan ?>">
                        <a href="#" class="btn btn-success btn-disabled">Terimakasih <span class="badge badge-light"> <?= $k->skor ?></span> </a>
                        <button class="btn btn-danger">Hapus? </button>
                        <p class="float-right"><?= $k->tanggal ?> </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>