<div class="berhasil" data-flashdata="<?php echo $this->session->flashdata('berhasil'); ?>"></div>
<div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<div class="nama" data-flashdata="Pertanyaan / Jawaban"></div>
<?php $no1 = 1 ?>
<?php $no2 = 1 ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pertanyaanku</h3>
            </div>
            <div class="card-body">
                <div class="pl-1 pr-1 dt-responsive">
                    <table class="table" id="lang-dt">
                        <thead>
                            <tr>
                                <th style="width: 20px;">#</th>
                                <th>Pertanyaan</th>
                                <th class="nosort">Mata Pelajaran</th>
                                <th class="nosort">Oleh</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pertanyaan as $p) : ?>
                                <?php if ($this->session->userdata('level') == "guru") : ?>
                                    <?php if ($p->id_user == $this->session->userdata('id_guru')) : ?>
                                        <tr>
                                            <td><?= $no1 ?></td>
                                            <td><a href="<?= base_url() ?>tanyajawab/detailpertanyaan/<?= $p->id_pertanyaan ?>"> <b><?= word_limiter($p->pertanyaan, 7) ?></b> </a></td>
                                            <td><?= $p->mata_pelajaran ?></td>
                                            <td><?= $p->oleh ?></td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="<?= base_url() ?>tanyajawab/editpertanyaan/<?= $p->id_pertanyaan ?>"><i class="ik ik-edit text-success"></i></a>
                                                    <a href="<?= base_url() ?>tanyajawab/hapuspertanyaan/<?= $p->id_pertanyaan ?>" class="btn-hapus"><i class="ik ik-trash-2 text-danger"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $no1++ ?>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <?php if ($p->id_user == $this->session->userdata('id_siswa')) : ?>
                                        <tr>
                                            <td><?= $no1 ?></td>
                                            <td><a href="<?= base_url() ?>tanyajawab/detailpertanyaan/<?= $p->id_pertanyaan ?>"> <b><?= word_limiter($p->pertanyaan, 7) ?></b> </a></td>
                                            <td><?= $p->mata_pelajaran ?></td>
                                            <td><?= $p->oleh ?></td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="<?= base_url() ?>tanyajawab/editpertanyaan/<?= $p->id_pertanyaan ?>"><i class="ik ik-edit text-success"></i></a>
                                                    <a href="<?= base_url() ?>tanyajawab/hapuspertanyaan/<?= $p->id_pertanyaan ?>" class="btn-hapus"><i class="ik ik-trash-2 text-danger"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $no1++ ?>
                                    <?php endif; ?>
                                <?php endif ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Jawabanku</h3>
            </div>
            <div class="card-body">
                <div class="pl-1 pr-1 dt-responsive">
                    <table class="table" id="simpletable">
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
                                <?php if ($this->session->userdata('level') == "guru") : ?>
                                    <?php if ($k->id_user == $this->session->userdata('id_guru')) : ?>
                                        <tr>
                                            <td><?= $no2 ?></td>
                                            <td><a href="<?= base_url() ?>tanyajawab/detailpertanyaan/<?= $k->id_pertanyaan ?>"> <b><?= word_limiter($k->komentar, 7) ?></b> </a></td>
                                            <td><?= $k->oleh ?></td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="<?= base_url() ?>tanyajawab/editkomentar/<?= $k->id_komentar ?>"><i class="ik ik-edit text-success"></i></a>
                                                    <a href="<?= base_url() ?>tanyajawab/hapuskomentar/<?= $k->id_komentar ?>" class="btn-hapus"><i class="ik ik-trash-2 text-danger"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $no2++ ?>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <?php if ($k->id_user == $this->session->userdata('id_siswa')) : ?>
                                        <tr>
                                            <td><?= $no2 ?></td>
                                            <td><a href="<?= base_url() ?>tanyajawab/detailpertanyaan/<?= $k->id_pertanyaan ?>"> <b><?= word_limiter($k->komentar, 7) ?></b> </a></td>
                                            <td><?= $k->oleh ?></td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="<?= base_url() ?>tanyajawab/editkomentar/<?= $k->id_komentar ?>"><i class="ik ik-edit text-success"></i></a>
                                                    <a href="<?= base_url() ?>tanyajawab/hapuskomentar/<?= $k->id_komentar ?>" class="btn-hapus"><i class="ik ik-trash-2 text-danger"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $no2++ ?>
                                    <?php endif; ?>
                                <?php endif ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>