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
        <li class="breadcrumb-item"><span><?= $title; ?></span></li>
    </ul>
    <!--------------------
END - Breadcrumbs
-------------------->
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header"><?= $title; ?></h6>
                <div class="element-box">
                    <h5 class="form-header"><?= $title; ?></h5>
                    <div class="form-desc">Datatables user berdasarkan status pembayaran <code>belum bayar</code> atau <code>sudah bayar</code></div>
                    <?php if ($this->session->flashdata('flash')) : ?>

                        <div class="row mt-3">
                            <div class="col md-6">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Berkas <strong><?php echo $this->session->flashdata('flash'); ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIM</th>
                                    <th>Nama Rekening</th>
                                    <th>Rekening</th>
                                    <th>Bank</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Status Konfirmasi</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($aksi as $p) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $p['NIM']; ?></td>
                                        <td><?= $p['PaidBy']; ?></td>
                                        <td><?= $p['Rekening']; ?></td>
                                        <td><?= $p['Bank']; ?></td>
                                        <td><?= $p['Date']; ?></td>
                                        <td>
                                            <!-- <button class="mr-2 mb-2 btn btn-dark" data-target="#onboardingWideFeaturesModal" data-toggle="modal" type="button">Click</button> -->
                                            <button class="btn btn-white p-0" type="button"><img src="<?= base_url() ?>dokumen/bukti_bayar/<?= $p['Image']; ?>" alt="" width="50px" data-target="#onboardingWideFeaturesModal{{<?= $p['ID_Reservasi']; ?>}}" data-toggle="modal"></button>
                                        </td>
                                        <td><?php if ($p['StatusKonfirmasi'] == '0') {
                                                echo "<span class='badge badge-danger'>Belum disetujui</span>";
                                            } else {
                                                echo "<span class='badge badge-success'>Sudah disetujui</span>";
                                            } ?></td>
                                        <td class="row-actions">
                                            <a class="mr-2 mb-2 mt-2 btn btn-primary" href="<?= base_url("legalisir/pengesahanToProses/" . $p['ID_Payment'] . "/" . $p['ID_Reservasi']); ?>">Berkas Proses
                                            </a>
                                            <a class="mr-2 mb-2 mt-2 btn btn-danger" href="">Tolak
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php $j = 2; ?>
                                <?php foreach ($pembayaran as $p) : ?>
                                    <tr>
                                        <td><?= $j; ?></td>
                                        <td><?= $p['NIM']; ?></td>
                                        <td><?= $p['PaidBy']; ?></td>
                                        <td><?= $p['Rekening']; ?></td>
                                        <td><?= $p['Bank']; ?></td>
                                        <td><?= $p['Date']; ?></td>
                                        <td>
                                            <!-- <button class="mr-2 mb-2 btn btn-dark" data-target="#onboardingWideFeaturesModal" data-toggle="modal" type="button">Click</button> -->
                                            <button class="btn btn-white p-0" type="button"><img src="<?= base_url() ?>dokumen/bukti_bayar/<?= $p['Image']; ?>" alt="" width="50px" data-target="#onboardingWideFeaturesModal{{<?= $p['ID_Reservasi']; ?>}}" data-toggle="modal"></button>
                                        </td>
                                        <td><?php if ($p['StatusKonfirmasi'] == '0') {
                                                echo "<span class='badge badge-danger'>Belum disetujui</span>";
                                            } else {
                                                echo "<span class='badge badge-success'>Sudah disetujui</span>";
                                            } ?></td>
                                    </tr>
                                    <?php $j++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<div class="display-type"></div>

<!-- Modal Bukti Pembayaran -->
<?php foreach ($pembayaran as $p) : ?>
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingWideFeaturesModal{{<?= $p['ID_Reservasi']; ?>}}" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered" role="document">
            <div class="modal-content text-center"><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close</span><span class="os-icon os-icon-close"></span></button>
                <div class="onboarding-side-by-side">
                    <div class="onboarding-media"><img alt="" src="<?= base_url() ?>dokumen/bukti_bayar/<?= $p['Image']; ?>" width="100%" class="ml-4"></div>
                    <div class="onboarding-content with-gradient">
                        <h4 class="onboarding-title">Bukti Transfer</h4>
                        <div class="onboarding-text">ID Reservasi : <?= $p['ID_Reservasi']; ?></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="features-list">
                                    <li><span style="color: lightgray;">Nama Rekening</span><br><?= $p['PaidBy']; ?></li>
                                    <li><span style="color: lightgray;">No Rekening</span><br><?= $p['Rekening']; ?></li>
                                    <li><span style="color: lightgray;">BANK</span><br><?= $p['Bank']; ?></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="features-list">
                                    <li><span style="color: lightgray;">Tanggal Bayar</span><br><?= $p['Date']; ?></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php foreach ($aksi as $p) : ?>
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingWideFeaturesModal{{<?= $p['ID_Reservasi']; ?>}}" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered" role="document">
            <div class="modal-content text-center"><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close</span><span class="os-icon os-icon-close"></span></button>
                <div class="onboarding-side-by-side">
                    <div class="onboarding-media"><img alt="" src="<?= base_url() ?>dokumen/bukti_bayar/<?= $p['Image']; ?>" width="100%" class="ml-4"></div>
                    <div class="onboarding-content with-gradient">
                        <h4 class="onboarding-title">Bukti Transfer</h4>
                        <div class="onboarding-text">ID Reservasi : <?= $p['ID_Reservasi']; ?></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="features-list">
                                    <li><span style="color: lightgray;">Nama Rekening</span><br><?= $p['PaidBy']; ?></li>
                                    <li><span style="color: lightgray;">No Rekening</span><br><?= $p['Rekening']; ?></li>
                                    <li><span style="color: lightgray;">BANK</span><br><?= $p['Bank']; ?></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="features-list">
                                    <li><span style="color: lightgray;">Tanggal Bayar</span><br><?= $p['Date']; ?></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>