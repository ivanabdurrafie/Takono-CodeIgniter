<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Ubah Data</h3>
                </div>
            </div>
            <form action="<?= base_url() ?>users/edit" method="POST" enctype="multipart/form-data">
                <div class="card-body font-weight-bold">
                    <input type="hidden" name="id_user" value="">
                    <div class="form-group">
                        <label for="nis">Username : </label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="nis">Password : </label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Level :</label>
                        <select class="form-control" id="exampleSelectGender">
                            <option>Pilih level</option>
                            <option>Admin</option>
                            <option>Guru</option>
                            <option>Siswa</option>
                        </select>
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