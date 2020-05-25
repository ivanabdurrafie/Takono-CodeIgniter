<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Tambah Data</h3>
                </div>
            </div>
            <form action="<?= base_url() ?>users/tambahakunguru/<?= $guru[0]->id_guru ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body font-weight-bold">
                    <?php if (form_error('id_guru')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Ups!</strong> <?= strip_tags(form_error('id_guru')) ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="ik ik-x"></i>
                            </button>
                        </div>
                    <?php endif; ?>
                    <input type="hidden" name="id_guru" value="<?= $guru[0]->nip ?>">
                    <div class="form-group">
                        <label for="username">Username : </label>
                        <?php if (form_error('username')) : ?>
                            <input type="text" class="form-control form-control-warning form-txt-warning" id="nama" placeholder="<?= strip_tags(form_error('username')) ?>" name="username">
                        <?php else : ?>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan username" name="username" value="<?= $guru[0]->nip ?>">
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password : </label>
                        <?php if (form_error('password')) : ?>
                            <input type="password" class="form-control form-control-warning form-txt-warning" id="password" placeholder="<?= strip_tags(form_error('password')) ?>" name="password">
                        <?php else : ?>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password" value="<?= $guru[0]->nip ?>">
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email : </label>
                        <?php if (form_error('email')) : ?>
                            <input type="text" class="form-control form-control-warning form-txt-warning" id="email" placeholder="<?= strip_tags(form_error('email')) ?>" name="email">
                        <?php else : ?>
                            <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email" value="<?= $guru[0]->email ?>">
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="level">Level : </label>
                        <input type="text" class="form-control" id="level" name="level" value="guru" readonly>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Tambah data</button>
                    <a href="<?= base_url() ?>users/pilihguru" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>