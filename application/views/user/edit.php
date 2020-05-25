<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Ubah Data</h3>
                </div>
            </div>
            <form action="<?= base_url() ?>users/edit/<?= $user['id_user'] ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body font-weight-bold">
                    <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                    <input type="hidden" name="id_siswa" value="<?= $user['id_siswa'] ?>">
                    <input type="hidden" name="id_guru" value="<?= $user['id_guru'] ?>">
                    <input type="hidden" name="email" value="<?= $user['email'] ?>">

                    <div class="form-group">
                        <label for="username">Username : </label>
                        <?php if (form_error('username')) : ?>
                            <input type="text" class="form-control form-control-warning form-txt-warning" id="nama" placeholder="<?= strip_tags(form_error('username')) ?>" name="username">
                        <?php else : ?>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan username" name="username" value="<?= $user['username'] ?>">
                        <?php endif ?>
                    </div>

                    <div class="form-group">
                        <label for="password">Password : </label>
                        <?php if (form_error('password')) : ?>
                            <input type="password" class="form-control form-control-warning form-txt-warning" id="password" placeholder="<?= strip_tags(form_error('password')) ?>" name="password">
                        <?php else : ?>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password" value="<?= $user['password'] ?>">
                        <?php endif ?>
                    </div>

                    <div class="form-group">
                        <label for="level">Level :</label>
                        <?php if (form_error('level')) : ?>
                            <select class="form-control form-control-warning form-txt-warning" id="level" name="level">
                                <option value=""><?= strip_tags(form_error('level')) ?></option>
                                <?php foreach ($level as $l) : ?>
                                    <option value="<?= $l ?>"><?= $l ?></option>
                                <?php endforeach; ?>
                            </select>
                        <?php else : ?>
                            <select class="form-control" id="level" name="level">
                                <?php foreach ($level as $l) : ?>
                                    <?php if ($l ==  $user['level']) : ?>
                                        <option value="<?= $l ?>" selected><?= $l ?></option>
                                    <?php else : ?>
                                        <option value="<?= $l ?>"><?= $l ?></option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                        <?php endif ?>
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Ubah data</button>
                    <a href="<?= base_url() ?>users/" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>