<?php $no = 1 ?>
<div class="berhasil" data-flashdata="<?php echo $this->session->flashdata('berhasil'); ?>"></div>
<div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<div class="nama" data-flashdata="Siswa"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Data Siswa</h3>
            </div>
            <div class="card-body">
                <div class="button">
                    <a href="<?= base_url() ?>siswa/tambah" class="btn btn-success">Tambah Siswa</a>
                </div>
                <hr>
                <div class="pl-1 pr-1 mt-2">
                    <table class="table" id="lang-dt">
                        <thead>
                            <tr>
                                <th style="width: 50px">#</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($siswa as $s) : ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $s->nis ?></td>
                                    <td><?= $s->nama ?></td>
                                    <td><?= $s->kelas ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="<?= base_url() ?>siswa/detail/<?= $s->id_siswa ?>"><i class="ik ik-eye text-primary"></i></a>
                                            <a href="<?= base_url() ?>siswa/edit/<?= $s->id_siswa ?>"><i class="ik ik-edit text-success"></i></a>
                                            <a href="<?= base_url() ?>siswa/hapus/<?= $s->id_siswa ?>" class="btn-hapus"><i class="ik ik-trash-2 text-danger"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $no++?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>