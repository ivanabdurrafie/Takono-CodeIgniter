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
                    <div class="form-group">
                        <label for="nis">Nama Mata Pelajaran : </label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama mata pelajaran" name="nama">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Ubah data</button>
                    <a href="<?= base_url() ?>mapel/" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>