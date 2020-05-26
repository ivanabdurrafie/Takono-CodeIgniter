<div class="wrapper">
    <header class="header-top" header-theme="light">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <div class="top-menu d-flex align-items-center">
                    <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                </div>
                <div class="top-menu d-flex align-items-center">
                    <a href="<?= base_url() ?>tanyajawab/tambahpertanyaan" class="btn btn-success">Tanyakan sesuatu</a>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if ($this->session->userdata("level") == "guru") : ?>
                                <?php foreach ($guru as $g) : ?>
                                    <?php if ($g->nip == $this->session->userdata('id_guru')) : ?>
                                        <?php if ($g->foto != null) : ?>
                                            <img class="avatar" src="<?= base_url() ?>uploads/profil/<?= $g->foto ?>" alt="">
                                        <?php else : ?>
                                            <img class="avatar" src="<?= base_url() ?>uploads/guest.png" alt="">
                                        <?php endif ?>
                                    <?php endif ?>
                                <?php endforeach ?>
                            <?php else : ?>
                                <?php foreach ($siswa as $s) : ?>
                                    <?php if ($s->nis == $this->session->userdata('id_siswa')) : ?>
                                        <?php if ($s->foto != null) : ?>
                                            <img class="avatar" src="<?= base_url() ?>uploads/profil/<?= $s->foto ?>" alt="">
                                        <?php else : ?>
                                            <img class="avatar" src="<?= base_url() ?>uploads/guest.png" alt="">
                                        <?php endif ?>
                                    <?php endif ?>
                                <?php endforeach ?>
                            <?php endif ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <?php if ($this->session->userdata("level") == "guru") : ?>
                                <a class="dropdown-item" href="<?= base_url() ?>profil/detail/<?= $this->session->userdata('id_guru'); ?>"><i class="ik ik-user dropdown-icon"></i>
                                    Profil</a>
                                <a class="dropdown-item" href="<?= base_url() ?>profil/pengaturan/<?= $this->session->userdata('id_guru'); ?>"><i class="ik ik-settings dropdown-icon"></i>
                                    Pengaturan Akun</a>
                                <a class="dropdown-item" href="<?= base_url() ?>tanyajawab/tanyajawabku/<?= $this->session->userdata('id_guru'); ?>"><i class="ik ik-message-circle dropdown-icon"></i>
                                    Q & A ku</a>
                            <?php else : ?>
                                <a class="dropdown-item" href="<?= base_url() ?>profil/detail/<?= $this->session->userdata('id_siswa'); ?>"><i class="ik ik-user dropdown-icon"></i>
                                    Profil</a>
                                <a class="dropdown-item" href="<?= base_url() ?>profil/pengaturan/<?= $this->session->userdata('id_siswa'); ?>"><i class="ik ik-settings dropdown-icon"></i>
                                    Pengaturan Akun</a>
                                <a class="dropdown-item" href="<?= base_url() ?>tanyajawab/tanyajawabku/<?= $this->session->userdata('id_siswa'); ?>"><i class="ik ik-message-circle dropdown-icon"></i>
                                    Q & A ku</a>
                            <?php endif ?>
                            <a class="dropdown-item" href="<?= base_url() ?>login/logout"><i class="ik ik-power dropdown-icon"></i>
                                Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>