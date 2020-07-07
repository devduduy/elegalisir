<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo text-center pb-3 pt-4"><img alt="" src="<?= base_url(); ?>assets/img/mercubuana.png" class="img-fluid col-lg-5"></div>
        <h4 class="auth-header">Admin E-legalisir</h4>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" action="<?= base_url(); ?>auth">
            <div class="form-group"><label for="">Username</label><input class="form-control" placeholder="Enter your username" type="text" id="username" name="username" value="<?= set_value('username'); ?>">
                <div class="text-danger"><?= form_error('username'); ?></div>
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
            </div>
            <div class="form-group"><label for="">Password</label><input class="form-control" placeholder="Enter your password" type="password" id="password" name="password">
                <div class="text-danger"><?= form_error('password'); ?></div>
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
            </div>
            <div class="buttons-w">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
            <hr>
            <div class="text-center">
                <a href="<?= base_url(); ?>auth/registration" class="small">Don't have an account? Registration now</a>
            </div>
        </form>
    </div>
</div>