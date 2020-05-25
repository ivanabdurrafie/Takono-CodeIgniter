<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Tambah Data</h3>
                </div>
            </div>
            <form action="<?= base_url() ?>guru/tambah" method="POST" enctype="multipart/form-data">
                <div class="card-body font-weight-bold">
                    <div class="form-group">
                        <label for="nip">NIP : </label>
                        <?php if (form_error('nip')) : ?>
                            <input type="text" class="form-control form-txt-warning form-txt-warning" id="nip" placeholder="<?= strip_tags(form_error('nip')) ?>" name="nip">
                        <?php else : ?>
                            <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP guru" name="nip" value="<?= set_value('nip') ?>">
                        <?php endif ?>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama : </label>
                        <?php if (form_error('nama')) : ?>
                            <input type="text" class="form-control form-control-warning form-txt-warning" id="nama" placeholder="<?= strip_tags(form_error('nama')) ?>" name="nama">
                        <?php else : ?>
                            <input type="text" class="form-control " id="nama" placeholder="Masukkan nama guru" name="nama" value="<?= set_value('nama') ?>">
                        <?php endif ?>
                    </div>

                    <div class="form-group">
                        <label for="jenkel">Jenis Kelamin : </label>
                        <div class="form-radio">
                            <div class="radio radio-inline">
                                <label>
                                    <input type="radio" name="jenkel" checked="checked" value="Laki - laki">
                                    <i class="helper"></i>Laki-laki
                                </label>
                            </div>
                            <div class="radio radio-inline">
                                <label>
                                    <input type="radio" name="jenkel" value="Perempuan">
                                    <i class="helper"></i>Perempuan
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email : </label>
                        <?php if (form_error('email')) : ?>
                            <input type="text" class="form-control form-control-warning form-txt-warning" id="email" placeholder="<?= strip_tags(form_error('email')) ?>" name="email">
                        <?php else : ?>
                            <input type="text" class="form-control" id="email" placeholder="Masukkan email guru" name="email" value="<?= set_value('email') ?>">
                        <?php endif ?>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Tambah data</button>
                    <a href="<?= base_url() ?>guru/" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>