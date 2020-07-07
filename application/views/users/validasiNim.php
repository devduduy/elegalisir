<div class="content-i">
    <div class="content-box">
        <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
            <div class="logo-w"><a class="logo" href="<?= base_url('user'); ?>">
                    <div class="logo-element">
                    </div>
                    <div class="logo-label">Kembali</div>
                </a></div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-7">
                <div class="element-wrapper">
                    <?php if ($this->session->flashdata('gagal')) : ?>
                        <div class="row mt-3">
                            <div class="col md-6">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong><?php echo $this->session->flashdata('gagal'); ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($this->session->flashdata('nama')) : ?>
                        <div class="row mt-3">
                            <div class="col md-6">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong><?php echo $this->session->flashdata('nama'); ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($this->session->flashdata('both')) : ?>
                        <div class="row mt-3">
                            <div class="col md-6">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong><?php echo $this->session->flashdata('both'); ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>


                    <h3 class="element-header">Masuk Legalisir</h3><br><br><br><br>
                    <div class="element-box">
                        <form method="POST" id="signup-form" class="signup-form" action="">
                            <p class="desc">Silahkan masukkan NIM dan Nama anda kemudian Tekan Masuk !</p>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-4" for="nim">
                                    NIM<span style="color: red;">*</span></label>
                                <div class="col-sm-8"><input type="text" name="nim" id="nim" required /></div>
                            </div>
                            <div class="form-group row"><label class="col-form-label col-sm-4" for="nama">
                                    Nama<span style="color: red;">*</span></label>
                                <div class="col-sm-8"><input type="text" name="nama" id="nama" required /></div>
                            </div>
                            <div class="form-buttons-w"><button class="btn btn-primary" type="submit" name="submit" id="submit">
                                    Masuk!</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>