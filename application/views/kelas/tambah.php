<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Tambah Data</h3>
                </div>
            </div>
            <form action="<?= base_url() ?>kelas/tambah" method="POST" enctype="multipart/form-data">
                <div class="card-body font-weight-bold">
                    <?php if (form_error('kelas')) : ?>
                        <div class="form-group">
                            <label for="nis">Nama Kelas : </label>
                            <input type="text" class="form-control form-control-warning form-txt-warning" id="kelas" placeholder="<?= strip_tags(form_error('kelas'))?>" name="kelas">
                        </div>
                    <?php else : ?>
                        <div class="form-group">
                            <label for="nis">Nama Kelas : </label>
                            <input type="text" class="form-control" id="kelas" placeholder="Masukkan nama kelas" name="kelas" value="<?= set_value('kelas')?>">
                        </div>
                    <?php endif ?>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Tambah data</button>
                    <a href="<?= base_url() ?>kelas/" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>