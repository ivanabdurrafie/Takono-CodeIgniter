<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Detail Siswa</h3>
            </div>
            <div class="card-body">
                <?php if ($user['level'] == "admin") : ?>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="<?= base_url() ?>uploads/guest.png" alt="foto" width="200px">
                        </div>
                        <div class="col-md-6 font-weight-bold">
                            <table>
                                <tr>
                                    <td style="width: 120px">Username</td>
                                    <td style="width: 20px">: </td>
                                    <td><?= $user['username'] ?></td>
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>: </td>
                                    <td><?= $user['level'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php elseif ($user['level'] == "guru") : ?>
                    <div class="row">
                        <?php foreach ($guru as $g) : ?>
                            <?php if ($g->nip == $user['id_guru']) : ?>
                                <div class="col-md-2">
                                    <?php if ($g->foto == null) : ?>
                                        <img src="<?= base_url() ?>uploads/guest.png" alt="foto" width="200px">
                                    <?php else : ?>
                                        <img src="<?= base_url() ?>uploads/profil/<?= $g->foto ?>" alt="foto" width="200px">
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 font-weight-bold">
                                    <table>
                                        <p>Informasi user </p>
                                        <tr>
                                            <td style="width: 120px">NIP</td>
                                            <td style="width: 20px">: </td>
                                            <td><?= $g->nip ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>: </td>
                                            <td><?= $g->nama ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis kelamin</td>
                                            <td>: </td>
                                            <td><?= $g->jenkel ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>: </td>
                                            <td><?= $g->email ?></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table>
                                        <p>Informasi akun </p>
                                        <tr>
                                            <td style="width: 120px">Username</td>
                                            <td style="width: 20px">: </td>
                                            <td><?= $user['username'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Level</td>
                                            <td>: </td>
                                            <td><?= $user['level'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                <?php else : ?>
                    <div class="row">
                        <?php foreach ($siswa as $s) : ?>
                            <?php if ($s->nis == $user['id_siswa']) : ?>
                                <div class="col-md-2">
                                    <?php if ($s->foto == null) : ?>
                                        <img src="<?= base_url() ?>uploads/guest.png" alt="foto" width="200px">
                                    <?php else : ?>
                                        <img src="<?= base_url() ?>uploads/profil/<?= $s->foto ?>" alt="foto" width="200px">
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 font-weight-bold">
                                    <table>
                                        <p>Informasi user </p>
                                        <tr>
                                            <td style="width: 120px">NIS</td>
                                            <td style="width: 20px">: </td>
                                            <td><?= $s->nis ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>: </td>
                                            <td><?= $s->nama ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis kelamin</td>
                                            <td>: </td>
                                            <td><?= $s->jenkel ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>: </td>
                                            <td><?= $s->email ?></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table>
                                        <p>Informasi akun </p>
                                        <tr>
                                            <td style="width: 120px">Username</td>
                                            <td style="width: 20px">: </td>
                                            <td><?= $user['username'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Level</td>
                                            <td>: </td>
                                            <td><?= $user['level'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="card-footer">
                <a href="<?= base_url() ?>users" class="btn btn-light">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>