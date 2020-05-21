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
                        <a href="<?= base_url() ?>login/lupaPassword"><img src="<?= base_url() ?>assets/src/img/brand.png" alt="" style="width: 100px;"></a>
                    </div>
                    <h3>Lupa password kamu?</h3>
                    <p>Kami akan mengirim password baru kamu ke emailmu.</p>
                    <form action="<?= base_url() ?>login/lupapassword" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <?php if (form_error('email')) : ?>
                                <input type="email" class="form-control form-control-danger form-txt-danger" placeholder="<?= strip_tags(form_error('email'))?>" placeholder="" name="email">
                                <i class="ik ik-mail"></i>
                            <?php else : ?>
                                <input type="email" class="form-control" placeholder="Masukkan emailmu" name="email">
                                <i class="ik ik-mail"></i>
                            <?php endif ?>
                        </div>
                        <div class="sign-btn text-center">
                            <button class="btn btn-theme" name="submit">Kirim</button>
                        </div>
                    </form>
                    <div class="register">
                        <p>Sudah ingat? <a href="<?= base_url() ?>login/" class="font-weight-bold">Yuk masuk lewat sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>