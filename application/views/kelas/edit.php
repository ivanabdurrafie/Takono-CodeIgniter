<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Ubah Data</h3>
                </div>
            </div>
            <div class="card-body font-weight-bold">
                <?php foreach ($kelas as $k) : ?>
                    <form action="<?= base_url() ?>kelas/edit/<?= $k->id_kelas ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_kelas" value="<?= $k->id_kelas ?>">
                        <?php if (form_error('kelas')) : ?>
                            <div class="form-group">
                                <label for="nis">Nama Kelas : </label>
                                <input type="text" class="form-control form-control-warning form-txt-warning" id="kelas" placeholder="<?= strip_tags(form_error('kelas')) ?>" name="kelas">
                            </div>
                        <?php else : ?>
                            <div class="form-group">
                                <label for="nis">Nama Kelas : </label>
                                <input type="text" class="form-control" id="kelas" placeholder="Masukkan nama kelas" name="kelas" value="<?= $k->kelas ?>">
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Ubah data</button>
                <a href="<?= base_url() ?>kelas/" class="btn btn-light ml-2">Kembali</a>
            </div>
            </form>
        </div>
    </div>
</div>
</div>