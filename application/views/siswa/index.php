<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Data Siswa</h3>
            </div>
            <div class="card-body">
                <div class="button">
                    <a href="<?= base_url() ?>siswa/tambah" class="btn btn-success">Tambah Siswa</a>
                </div>
                <hr>
                <div class="pl-1 pr-1 mt-2">
                    <table class="table" id="data_table">
                        <thead>
                            <tr>
                                <th style="width: 50px">#</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1847162992</td>
                                <td>Oktapiaono</td>
                                <td>RPL-2</td>
                                <td>
                                    <div class="table-actions">
                                        <a href="<?= base_url() ?>siswa/detail"><i class="ik ik-eye text-primary"></i></a>
                                        <a href="<?= base_url() ?>siswa/edit"><i class="ik ik-edit text-success"></i></a>
                                        <a href="<?= base_url() ?>siswa/hapus"><i class="ik ik-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>1847162992</td>
                                <td>Stipen</td>
                                <td>RPL-2</td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#"><i class="ik ik-eye text-primary"></i></a>
                                        <a href="#"><i class="ik ik-edit text-success"></i></a>
                                        <a href="#"><i class="ik ik-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>