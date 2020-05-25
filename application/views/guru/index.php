<?php $no = 1 ?>
<div class="berhasil" data-flashdata="<?php echo $this->session->flashdata('berhasil'); ?>"></div>
<div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<div class="nama" data-flashdata="Guru"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Data Guru</h3>
            </div>
            <div class="card-body">
                <div class="button">
                    <a href="<?= base_url() ?>guru/tambah" class="btn btn-success">Tambah Guru</a>
                </div>
                <hr>
                <div class="pl-1 pr-1 mt-2">
                    <table class="table" id="lang-dt">
                        <thead>
                            <tr>
                                <th style="width: 50px">#</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($guru as $g) : ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $g->nip ?></td>
                                    <td><?= $g->nama ?></td>
                                    <td><?= $g->email ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="<?= base_url() ?>guru/detail/<?= $g->id_guru ?>"><i class="ik ik-eye text-primary"></i></a>
                                            <a href="<?= base_url() ?>guru/edit/<?= $g->id_guru ?>"><i class="ik ik-edit text-success"></i></a>
                                            <a href="<?= base_url() ?>guru/hapus/<?= $g->id_guru ?>" class="btn-hapus"><i class="ik ik-trash-2 text-danger"></i></a>
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