<div class="auth-wrapper">
    <div class="container-fluid h-100">
        <div class="row flex-row h-100 bg-white">
            <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                <div class="lavalite-bg" style="background-image: url('<?= base_url() ?>assets/img/auth/login-bg.jpg')">
                    <div class="lavalite-overlay"></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                <div class="authentication-form mx-auto">
                    <div class="logo-centered">
                        <a href="<?= base_url() ?>login/"><img src="<?= base_url() ?>assets/src/img/brand.png" alt="" style="width: 100px;"></a>
                    </div>
                    <h3>Silahkan isi data kamu..</h3>
                    <p>Senang berjumpa dengan kamu lagi :)</p>
                    <form action="<?= base_url() ?>login" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <?php if (form_error('username')) : ?>
                                <input type="text" class="form-control form-control-warning form-txt-warning" placeholder="<?= strip_tags(form_error('username')) ?>" name="username">
                                <i class="ik ik-user"></i>
                            <?php else : ?>
                                <input type="text" class="form-control" placeholder="Masukkan username kamu" name="username" value="<?= set_value('username')?>">
                                <i class="ik ik-user"></i>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <?php if (form_error('password')) : ?>
                                <input type="password" class="form-control form-control-warning form-txt-warning" placeholder="<?= strip_tags(form_error('password')) ?>" name="password" ?>
                                <i class="ik ik-lock"></i>
                            <?php else : ?>
                                <input type="password" class="form-control" placeholder="Masukkan password kamu" name="password" value="<?= set_value('password')?>">
                                <i class="ik ik-lock"></i>
                            <?php endif ?>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                    <span class="custom-control-label">&nbsp;Ingat Saya</span>
                                </label>
                            </div>
                            <div class="col text-right">
                                <a href="<?= base_url() ?>login/lupapassword">Lupa password ?</a>
                            </div>
                        </div>
                        <div class="sign-btn text-center">
                            <button class="btn btn-theme" name="submit">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>