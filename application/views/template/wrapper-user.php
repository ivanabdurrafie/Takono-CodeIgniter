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
                            <img class="avatar" src="<?= base_url() ?>uploads/guest.png" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url()?>profil/"><i class="ik ik-user dropdown-icon"></i>
                                Profil</a>
                            <a class="dropdown-item" href="<?= base_url()?>profil/pengaturan"><i class="ik ik-settings dropdown-icon"></i>
                                Pengaturan Akun</a>
                            <a class="dropdown-item" href="<?= base_url()?>tanyajawab/tanyajawabku"><i class="ik ik-message-circle dropdown-icon"></i>
                                Q & A ku</a>
                            <a class="dropdown-item" href="<?= base_url() ?>login/logout"><i class="ik ik-power dropdown-icon"></i>
                                Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>