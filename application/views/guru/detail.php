<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Detail Guru</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <?php if ($guru[0]->foto == null) : ?>
                            <img src="<?= base_url() ?>uploads/guest.png" alt="foto" width="200px">
                        <?php else : ?>
                            <img src="<?= base_url() ?>uploads/profil/<?= $guru[0]->foto ?>" alt="foto" width="200px">
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 font-weight-bold">
                        <table>
                            <tr>
                                <td style="width: 120px">NIS</td>
                                <td style="width: 20px">: </td>
                                <td><?= $guru[0]->nip ?></td>
                            </tr>
                            <tr>
                                <td style="width: 120px">Nama</td>
                                <td style="width: 20px">: </td>
                                <td><?= $guru[0]->nama ?></td>
                            </tr>
                            <tr>
                                <td>Jenis kelamin</td>
                                <td>: </td>
                                <td><?= $guru[0]->jenkel ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: </td>
                                <td><?= $guru[0]->email ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="<?= base_url() ?>guru" class="btn btn-light">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>