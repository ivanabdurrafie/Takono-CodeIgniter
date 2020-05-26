<div class="berhasil" data-flashdata="<?php echo $this->session->flashdata('berhasil'); ?>"></div>
<div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<div class="nama" data-flashdata="Profil / Akun"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Profil</h3>
            </div>
            <form action="<?= base_url() ?>profil/ubahprofil/<?= $siswa[0]->id_siswa ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <input type="hidden" name="id_siswa" value="<?= $siswa[0]->id_siswa ?>">
                    <input type="hidden" name="fotoLama" value="<?= $siswa[0]->foto ?>">
                    <input type="hidden" name="nis" value="<?= $siswa[0]->nis ?>">
                    <input type="hidden" name="nama" value="<?= $siswa[0]->nama ?>">
                    <input type="hidden" name="jenkel" value="<?= $siswa[0]->jenkel ?>">
                    <input type="hidden" name="id_kelas" value="<?= $siswa[0]->id_kelas ?>">
                    <input type="hidden" name="email" value="<?= $siswa[0]->email ?>">
                    <?php if (form_error('txtFoto')) : ?>
                        <div class="form-group">
                            <label>Ubah Foto : </label>
                            <input type="file" name="foto" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info form-control-danger form-txt-danger" readonly placeholder="<?= strip_tags(form_error('txtFoto')) ?>" name="txtFoto" required>
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Tekan aku</button>
                                </span>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="form-group">
                            <label>Ubah Foto : </label>
                            <input type="file" name="foto" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" readonly placeholder="Upload fotomu" name="txtFoto" required>
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Tekan aku</button>
                                </span>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Ubah profil</button>
                    <a href="<?= base_url() ?>" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Akun</h3>
            </div>
            <form action="<?= base_url()?>profil/ubahakun" method="post">
                <div class="card-body">
                    <input type="hidden" name="id_user" value="<?= $this->session->userdata("id_user") ?>">
                    <input type="hidden" name="id_siswa" value="<?= $this->session->userdata("id_siswa") ?>">
                    <!-- <input type="hidden" name="id_guru" value="<?= $this->session->userdata("id_guru") ?>"> -->
                    <input type="hidden" name="email" value="<?= $this->session->userdata("email") ?>">
                    <input type="hidden" name="username" value="<?= $this->session->userdata("username") ?>">
                    <input type="hidden" name="level" value="<?= $this->session->userdata("level") ?>">
                    <div class="form-group">
                        <label for="password">Password : </label>
                        <?php if (form_error('password')) : ?>
                            <input type="password" class="form-control form-control-warning form-txt-warning" id="password" placeholder="<?= strip_tags(form_error('password')) ?>" name="password">
                        <?php else : ?>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password" value="">
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password : </label>
                        <?php if (form_error('repassword')) : ?>
                            <input type="password" class="form-control form-control-warning form-txt-warning" id="password" placeholder="<?= strip_tags(form_error('repassword')) ?>" name="repassword">
                        <?php else : ?>
                            <input type="password" class="form-control" id="repassword" placeholder="Masukkan password" name="repassword" value="">
                        <?php endif ?>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Ubah akun</button>
                    <a href="<?= base_url() ?>" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>