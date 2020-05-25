<?php $no = 1 ?>
<div class="berhasil" data-flashdata="<?php echo $this->session->flashdata('berhasil'); ?>"></div>
<div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<div class="nama" data-flashdata="Kelas"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Data Kelas</h3>
            </div>
            <div class="card-body">
                <div class="button">
                    <a href="<?= base_url() ?>kelas/tambah" class="btn btn-success">Tambah Kelas</a>
                </div>
                <hr>
                <div class="pl-1 pr-1 mt-2">
                    <table class="table" id="lang-dt">
                        <thead>
                            <tr>
                                <th style="width: 50px">#</th>
                                <th>Nama Kelas</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kelas as $k) : ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $k->kelas ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="<?= base_url() ?>kelas/edit/<?= $k->id_kelas ?>"><i class="ik ik-edit text-success"></i></a>
                                            <a href="<?= base_url() ?>kelas/hapus/<?= $k->id_kelas ?>" class="btn-hapus"><i class="ik ik-trash-2 text-danger"></i></a>
                                        </div>
                                    </td>
                                    <?php $no++ ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>