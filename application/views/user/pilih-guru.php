<?php $no = 1 ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pilih Guru</h3>
            </div>
            <div class="card-body">
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
                                            <a href="<?= base_url() ?>users/tambahakunguru/<?= $g->id_guru ?>"><i class="ik ik-user-plus text-success"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $no++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <a href="<?= base_url() ?>users/jenisakun" class="btn btn-light">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>