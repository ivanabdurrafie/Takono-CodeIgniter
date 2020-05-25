<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Tambah Data</h3>
                </div>
            </div>
            <form action="<?= base_url() ?>users/tambahakunadmin" method="POST" enctype="multipart/form-data">
                <div class="card-body font-weight-bold">
                    <div class="form-group">
                        <label for="nis">Username : </label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password : </label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="level">Level : </label>
                        <input type="text" class="form-control" id="level" name="level" value="admin" readonly>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Tambah data</button>
                    <a href="<?= base_url() ?>users/jenisakun" class="btn btn-light ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>