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
                    <div class="form-desc">Datatables user berdasarkan status pembayaran <code>belum bayar</code></div>
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
                                    <th>Nama</th>
                                    <th>Jumlah Ijazah</th>
                                    <th>Jumlah Transkip</th>
                                    <th>Total</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pembayaran as $p) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $p['NIM']; ?></td>
                                        <td><?= $p['Nama']; ?></td>
                                        <td><?= $p['Jumlah_ijazah']; ?> lembar</td>
                                        <td><?= $p['Jumlah_transkip']; ?> lembar</td>
                                        <td>Rp.<?= $p['Total']; ?></td>
                                        <td><?= $p['Tgl_Transaksi']; ?></td>
                                        <td><?php if ($p['StatusBayar'] == '0') : ?>
                                                <?= "<span class='badge badge-danger'>Belum bayar</span>"; ?>
                                            <?php elseif ($p['StatusBayar'] == '1') : ?>
                                                <?= "<span class='badge badge-warning'>Sudah bayar,belum dikonfirmasi</span>"; ?>
                                            <?php endif; ?>
                                        </td>

                                    </tr>
                                    <?php $i++; ?>
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