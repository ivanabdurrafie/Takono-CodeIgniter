<div class="row">
    <div class="col-md-12">
        <div class="card">
            <?php if ($this->session->userdata('level') == "guru") : ?>
                <div class="card-body">
                    <div class="text-center">
                        <?php if ($gurudetail[0]->foto == null) : ?>
                            <img src="<?= base_url() ?>uploads/guest.png" alt="foto" class="rounded-circle" width="150">
                        <?php else : ?>
                            <img src="<?= base_url() ?>uploads/profil/<?= $gurudetail[0]->foto ?>" alt="foto" class="rounded-circle" width="150">
                        <?php endif; ?>
                        <h4 class="card-title mt-10"><?= $gurudetail[0]->nama ?></h4>
                        <p class="card-subtitle">Guru</p>
                    </div>
                    <hr class="mb-0">
                    <div class="card-body">
                        <small class="text-muted d-block">NIP</small>
                        <h6><?= $gurudetail[0]->nip ?></h6>
                        <small class="text-muted d-block pt-10">Jenis Kelamin</small>
                        <h6><?= $gurudetail[0]->jenkel ?></h6>
                        <small class="text-muted d-block pt-10">Email</small>
                        <h6><?= $gurudetail[0]->email ?></h6>
                    </div>
                </div>
            <?php else : ?>
                <div class="card-body">
                    <div class="text-center">
                        <?php if ($siswadetail[0]->foto == null) : ?>
                            <img src="<?= base_url() ?>uploads/guest.png" alt="foto" class="rounded-circle" width="150">
                        <?php else : ?>
                            <img src="<?= base_url() ?>uploads/profil/<?= $siswadetail[0]->foto ?>" alt="foto" class="rounded-circle" width="150">
                        <?php endif; ?>
                        <h4 class="card-title mt-10"><?= $siswadetail[0]->nama ?></h4>
                        <p class="card-subtitle">Siswa</p>
                    </div>
                    <hr class="mb-0">
                    <div class="card-body">
                        <small class="text-muted d-block">NIS</small>
                        <h6><?= $siswadetail[0]->nis ?></h6>
                        <small class="text-muted d-block">Kelas</small>
                        <h6><?= $siswadetail[0]->kelas ?></h6>
                        <small class="text-muted d-block pt-10">Jenis Kelamin</small>
                        <h6><?= $siswadetail[0]->jenkel ?></h6>
                        <small class="text-muted d-block pt-10">Email</small>
                        <h6><?= $siswadetail[0]->email ?></h6>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>
</div>