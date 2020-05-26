<div class="berhasil" data-flashdata="<?php echo $this->session->flashdata('berhasil'); ?>"></div>
<div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<div class="nama" data-flashdata="Pertanyaan"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="pl-1 pr-1 mt-2">
                    <table class="table" id="lang-dt">
                        <thead>
                            <tr>
                                <th>Pertanyaan</th>
                                <th>Mata Pelajaran</th>
                                <th>Oleh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pertanyaan as $p) : ?>
                                <tr>
                                    <td><a href="<?= base_url() ?>tanyajawab/detailpertanyaan/<?= $p->id_pertanyaan?>"> <b><?= word_limiter($p->pertanyaan, 7) ?></b> </a></td>
                                    <td><?= $p->mata_pelajaran?></td>
                                    <td><?= $p->oleh?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>