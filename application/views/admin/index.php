<div class="content-w">
    <!--------------------
START - Top Bar
-------------------->
    <div class="top-bar color-scheme-transparent">
        <!--------------------
START - Top Menu Controls
-------------------->
        <div class="top-menu-controls">
            <!--------------------
START - Settings Link in secondary top menu
-------------------->
            <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left"><i class="os-icon os-icon-user-male-circle2"></i> Admin
                <div class="os-dropdown"><?= $user['fullname']; ?>
                    <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                    <ul>
                        <!-- <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a></li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a></li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My
                                                Invoices</span></a></li> -->
                        <li><a href="<?= base_url("auth/logout"); ?>"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                    </ul>
                </div>
            </div>
            <!--------------------
END - Settings Link in secondary top menu
-------------------->
        </div>
        <!--------------------
END - Top Menu Controls
-------------------->
    </div>
    <!--------------------
END - Top Bar
-------------------->
    <!--------------------
START - Breadcrumbs
-------------------->
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
        <!-- <li class="breadcrumb-item"><a href="index-2.html">Products</a></li> -->
        <li class="breadcrumb-item"><span><?= $title;  ?></span></li>
    </ul>
    <!--------------------
END - Breadcrumbs
-------------------->
    <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
    </div>
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header"><?= $title;  ?></h6>
                <!-- Isi Content -->
                <div class="element-content">
                    <div class="row">
                        <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="<?= base_url('pembayaran/belumBayar'); ?>">
                                <h5 class="text-danger">Belum Bayar</h5>
                                <div class="value"><i class="text-danger os-icon os-icon-coins-4"></i> <?= $belumBayar; ?></div>
                                <div class="trending trending-up-basic"></div>
                            </a></div>
                        <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="<?= base_url('pembayaran'); ?>">
                                <h5 class="text-dark">Menunggu</h5>
                                <div class="value"><i class="text-dark os-icon os-icon-activity"></i> <?= $menunggu; ?></div>
                                <div class="trending trending-up-basic"></div>
                            </a></div>
                        <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="<?= base_url('legalisir/proses'); ?>">
                                <h5 class="text-warning">Proses</h5>
                                <div class="value"><i class="text-info os-icon os-icon-pie-chart-2"></i> <?= $proses; ?></div>
                                <div class="trending trending-up-basic"></div>
                            </a></div>
                        <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="<?= base_url('legalisir/selesai'); ?>">
                                <h5 class="text-success">Selesai</h5>
                                <div class="value"><i class="text-success os-icon os-icon-agenda-1"></i> <?= $selesai; ?></div>
                                <div class="trending trending-up-basic"></div>
                            </a></div>
                        <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="<?= base_url('legalisir/terima'); ?>">
                                <h5 class="text-primary">Terima</h5>
                                <div class="value"><i class="text-primary os-icon os-icon-tasks-checked"></i> <?= $terima; ?></div>
                                <div class="trending trending-up-basic"></div>
                            </a></div>
                        <div class="d-none d-xxxl-block col-xxxl-3"><a class="element-box el-tablo" href="#">
                                <div class="label">Refunds Processed</div>
                                <div class="value">$294</div>
                                <div class="trending trending-up-basic"><i class="os-icon os-icon-arrow-up2"></i></div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--------------------
START - Chat Popup Box
-------------------->
</div>
</div>
</div>
</div>
<div class="display-type"></div>
</div>