<?php $no = 1 ?>
<div class="berhasil" data-flashdata="<?php echo $this->session->flashdata('berhasil'); ?>"></div>
<div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<div class="nama" data-flashdata="User"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Data User</h3>
            </div>
            <div class="card-body">
                <div class="button">
                    <a href="<?= base_url() ?>users/jenisAkun" class="btn btn-success">Tambah User</a>
                </div>
                <hr>
                <div class="pl-1 pr-1 mt-2">
                    <table class="table" id="lang-dt">
                        <thead>
                            <tr>
                                <th style="width: 50px">#</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($user as $u) : ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $u['username'] ?></td>
                                    <td>
                                        <?php if ($u['email'] == null) {
                                            echo "-";
                                        } else {
                                            echo $u['email'];
                                        } ?>
                                    </td>
                                    <td><?= $u['level'] ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="<?= base_url() ?>users/detail/<?= $u['id_user'] ?>"><i class="ik ik-eye text-primary"></i></a>
                                            <a href="<?= base_url() ?>users/edit/<?= $u['id_user'] ?>"><i class="ik ik-edit text-success"></i></a>
                                            <a href="<?= base_url() ?>users/hapus/<?= $u['id_user'] ?>" class="btn-hapus"><i class="ik ik-trash-2 text-danger"></i></a>
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