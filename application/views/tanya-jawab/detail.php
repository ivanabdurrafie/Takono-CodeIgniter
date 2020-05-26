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
                    <form action="<?= base_url() ?>tanyajawab/tambahKomentar" method="POST">
                        <div class="form-group">
                            <label for="exampleTextarea1">Jawabanmu :</label>
                            <!-- todo butuh input hidden id_pertanyaan, id_user -->
                            <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Masukkan jawabanmu disini"></textarea>
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