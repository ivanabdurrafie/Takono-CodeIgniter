<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Tambah Data</h3>
                </div>
            </div>
            <form action="<?= base_url() ?>mapel/tambah" method="POST" enctype="multipart/form-data">
                <div class="card-body font-weight-bold">
                    <?php if (form_error('mata_pelajaran')) : ?>
                        <div class="form-group">
                            <label for="nis">Nama Mata Pelajaran : </label>
                            <input type="text" class="form-control form-control-warning form-txt-warning" id="mata_pelajaran" placeholder="Masukkan nama mata pelajaran" name="mata_pelajaran">
                        </div>
                    <?php else : ?>
                        <div class="form-group">
                            <label for="nis">Nama Mata Pelajaran : </label>
                            <input type="text" class="form-control" id="mata_pelajaran" placeholder="Masukkan nama mata pelajaran" name="mata_pelajaran" value="<?= set_value('mata_pelajaran') ?>">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Tambah data</button>
                    <a href="<?= base_url() ?>mapel/" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>