<div class="content-i">
    <div class="content-box">
        <div class="top-bar color-scheme-transparent">
            <!--------------------
START - Top Menu Controls
-------------------->
            <div class="top-menu-controls">
                <?php foreach ($proses as $p) : ?>
                    <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left"></i> Kembali
                        <div class="os-dropdown"><?= $p['Nama']; ?>
                            <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                            <ul>
                                <!-- <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a></li>
                                                                                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a></li>
                                                                                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My
                                                                                                    Invoices</span></a></li> -->
                                <li><a href="<?= base_url("user/cek_pengorder"); ?>"><i class="os-icon os-icon-signs-11"></i><span>Kembali</span></a></li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="element-wrapper">
            <h6 class="element-header">Cek Legalisir</h6>
            <div class="element-box">
                <h5 class="form-header">Status Berkas</h5>
                <div class="form-desc">Pengajuan legalisir berdasarkan <code>status berkas anda</code></div>
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
                    <table id="dataTable" width="100%" class="table table-striped table-lightfont">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jumlah Ijazah</th>
                                <th>Jumlah Transkip</th>
                                <th>Total</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Status Berkas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($proses as $p) : ?>
                                <tr>
                                    <td><?= $p['NIM']; ?></td>
                                    <td><?= $p['Nama']; ?></td>
                                    <td><?= $p['Jumlah_ijazah']; ?> lembar</td>
                                    <td><?= $p['Jumlah_transkip']; ?> lembar</td>
                                    <td>Rp.<?= $p['Total']; ?></td>
                                    <td><?= $p['Tgl_Transaksi']; ?></td>
                                    <td>
                                        <?php if ($p['StatusReservasi'] == '1') : ?>
                                            <?= "<span class='badge badge-warning'>Sedang diproses</span>"; ?>
                                        <?php elseif ($p['StatusReservasi'] == '2') : ?>
                                            <?= "<span class='badge badge-success'>Sudah selesai</span>"; ?>
                                            <br><span>Pada tanggal : <?= $p['Tgl_Selesai']; ?></span>
                                        <?php elseif ($p['StatusReservasi'] == '3') : ?>
                                            <br><span>Pada tanggal : <?= $p['Tgl_Diambil']; ?></span>
                                            <?= "<span class='badge badge-primary'>Sudah diambil</span>"; ?>
                                        <?php elseif ($p['StatusBayar'] == '1' && $p['StatusReservasi'] == '0') : ?>
                                            <?= "<span class='badge badge-danger'>Menunggu</span>"; ?>
                                        <?php endif; ?>

                                    </td>
                                </tr>
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