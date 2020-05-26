<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Profilku</h3>
            </div>
            <div class="card-body">
                <?php if ($this->session->userdata('level') == "guru") : ?>
                    <div class="row">
                        <div class="col-md-2">
                            <?php if ($gurudetail[0]->foto == null) : ?>
                                <img src="<?= base_url() ?>uploads/guest.png" alt="foto" width="200px">
                            <?php else : ?>
                                <img src="<?= base_url() ?>uploads/profil/<?= $gurudetail[0]->foto ?>" alt="foto" width="200px">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6 font-weight-bold">
                            <table>
                                <tr>
                                    <td style="width: 120px">NIS</td>
                                    <td style="width: 20px">: </td>
                                    <td><?= $gurudetail[0]->nip ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 120px">Nama</td>
                                    <td style="width: 20px">: </td>
                                    <td><?= $gurudetail[0]->nama ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis kelamin</td>
                                    <td>: </td>
                                    <td><?= $gurudetail[0]->jenkel ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: </td>
                                    <td><?= $gurudetail[0]->email ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="row">
                        <div class="col-md-2">
                            <?php if ($siswadetail[0]->foto == null) : ?>
                                <img src="<?= base_url() ?>uploads/guest.png" alt="foto" width="200px">
                            <?php else : ?>
                                <img src="<?= base_url() ?>uploads/profil/<?= $siswadetail[0]->foto ?>" alt="foto" width="200px">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6 font-weight-bold">
                            <table>
                                <tr>
                                    <td style="width: 120px">NIS</td>
                                    <td style="width: 20px">: </td>
                                    <td><?= $siswadetail[0]->nis ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 120px">Nama</td>
                                    <td style="width: 20px">: </td>
                                    <td><?= $siswadetail[0]->nama ?></td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td>: </td>
                                    <td><?= $siswadetail[0]->kelas ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis kelamin</td>
                                    <td>: </td>
                                    <td><?= $siswadetail[0]->jenkel ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: </td>
                                    <td><?= $siswadetail[0]->email ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php endif ?>
            </div>
            <div class="card-footer">
                <a href="<?= base_url() ?>" class="btn btn-light">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>