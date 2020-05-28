<div class="berhasil" data-flashdata="<?php echo $this->session->flashdata('berhasil'); ?>"></div>
<div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<div class="nama" data-flashdata="Jawaban"></div>
<?php $no = 1 ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="pl-1 pr-1 mt-2">
                    <table class="table" id="lang-dt">
                        <thead>
                            <tr>
                                <th style="width: 20px;">#</th>
                                <th>Komentar</th>
                                <th class="nosort">Oleh</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($komentar as $k) : ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><a href="<?= base_url() ?>jawaban/detail/<?= $k->id_pertanyaan ?>"> <b><?= word_limiter($k->komentar, 7) ?></b> </a></td>
                                    <td><?= $k->oleh ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="<?= base_url() ?>jawaban/hapuskomentar/<?= $k->id_komentar ?>" class="btn-hapus"><i class="ik ik-trash-2 text-danger"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $no++ ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>