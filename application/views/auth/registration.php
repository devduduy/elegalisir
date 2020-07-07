<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo text-center pb-3 pt-4"><img alt="" src="<?= base_url(); ?>assets/img/mercubuana.png" class="img-fluid col-lg-5"></div>
        <h4 class="auth-header">Create new account</h4>
        <form method="post" action="<?= base_url(); ?>auth/registration">
            <div class="form-group"><label for="fullname"> Fullname</label><input class="form-control" placeholder="Enter fullname" type="text" name="fullname" id="fullname" value="<?= set_value('fullname'); ?>">
                <div class="text-danger"><?= form_error('fullname'); ?></div>
                <div class="pre-icon os-icon os-icon-cv-2"></div>
            </div>
            <div class="form-group"><label for="email"> Email</label><input class="form-control" placeholder="@Enter email address" type="text" name="email" id="email" value="<?= set_value('email'); ?>">
                <div class="text-danger"><?= form_error('email'); ?></div>
                <div class="pre-icon os-icon os-icon-email-2-at2"></div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group"><label for="username"> Username</label><input class="form-control" placeholder="Username" type="text" id="username" name="username" value="<?= set_value('username'); ?>">
                        <div class="text-danger"><?= form_error('username'); ?></div>
                        <div class="pre-icon os-icon os-icon-user-male-circle2"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group"><label for=""> Password</label><input class="form-control" placeholder="Password" type="password" id="password1" name="password1">
                        <div class="text-danger"><?= form_error('password1'); ?></div>
                        <div class="pre-icon os-icon os-icon-fingerprint"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><label for="">Confirm Password</label><input class="form-control" placeholder="Repeat Password" type="password" id="password2" name="password2"> </div>
                </div>
            </div>
            <div class="buttons-w"><button class="btn btn-primary" type="submit">Register Now</button></div>
            <hr>
            <div class="text-center">
                <a href="<?= base_url(); ?>auth" class="small">Already have an account? Please Login!</a>
            </div>
        </form>
    </div>
</div>