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
                    <input type="hidden" name="id_komentar" value="<?= $k->id_komentar ?>">
                    <input type="hidden" name="id_pertanyaan" value="<?= $k->id_pertanyaan ?>">
                    <a href="#" class="btn btn-success">Terimakasih <span class="badge badge-light"> <?= $k->skor ?></span> </a>
                    <a href="<?= base_url() ?>jawaban/hapuskomentar/<?= $k->id_komentar ?>" class="btn btn-danger">Hapus? </a>
                    <p class="float-right"><?= $k->tanggal ?> </p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>