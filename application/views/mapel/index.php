<?php $no = 1 ?>
<div class="berhasil" data-flashdata="<?php echo $this->session->flashdata('berhasil'); ?>"></div>
<div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<div class="nama" data-flashdata="Mata Pelajaran"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Data Mata Pelajaran</h3>
            </div>
            <div class="card-body">
                <div class="button">
                    <a href="<?= base_url() ?>mapel/tambah" class="btn btn-success">Tambah Mata Pelajaran</a>
                </div>
                <hr>
                <div class="pl-1 pr-1 mt-2">
                    <table class="table" id="lang-dt">
                        <thead>
                            <tr>
                                <th style="width: 50px">#</th>
                                <th>Nama Mata Pelajaran</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mapel as $m) : ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $m->mata_pelajaran ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="<?= base_url() ?>mapel/edit/<?= $m->id_mapel ?>"><i class="ik ik-edit text-success"></i></a>
                                            <a href="<?= base_url() ?>mapel/hapus/<?= $m->id_mapel ?>" class="btn-hapus"><i class="ik ik-trash-2 text-danger"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $no++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>