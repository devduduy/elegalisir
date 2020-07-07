<div class="content-w">
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header"><?= $title; ?></h6>
                <div class="element-box">
                    <h5 class="form-header"><?= $title; ?>&nbsp;<span class='badge badge-danger'>Belum bayar</span></h5>
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
                                <?php foreach ($cetak as $p) : ?>
                                    <?php if ($p['StatusBayar'] == '0') : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $p['NIM']; ?></td>
                                        <td><?= $p['Nama']; ?></td>
                                        <td><?= $p['Jumlah_ijazah']; ?> lembar</td>
                                        <td><?= $p['Jumlah_transkip']; ?> lembar</td>
                                        <td>Rp.<?= $p['Total']; ?></td>
                                        <td><?= $p['Tgl_Transaksi']; ?></td>
                                        <td>
                                            <?= "<span class='badge badge-danger'>Belum bayar</span>"; ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    <h5 class="form-header"><?= $title; ?>&nbsp;<span class='badge badge-warning'>Sudah bayar,belum dikonfirmasi</span></h5>
                    <div class="form-desc">Datatables user berdasarkan status pembayaran <code>Sudah bayar, belum dikonfirmasi</code></div>
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
                                <?php foreach ($cetak as $p) : ?>
                                    <?php if ($p['StatusBayar'] == '1' && $p['StatusReservasi'] == '0') : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $p['NIM']; ?></td>
                                        <td><?= $p['Nama']; ?></td>
                                        <td><?= $p['Jumlah_ijazah']; ?> lembar</td>
                                        <td><?= $p['Jumlah_transkip']; ?> lembar</td>
                                        <td>Rp.<?= $p['Total']; ?></td>
                                        <td><?= $p['Tgl_Transaksi']; ?></td>
                                        <td>
                                            <?= "<span class='badge badge-warning'>Sudah bayar,belum dikonfirmasi</span>"; ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    <h5 class="form-header"><?= $title; ?>&nbsp;<span class='badge badge-warning'>Sedang diproses</span></h5>
                    <div class="form-desc">Datatables user berdasarkan status pembayaran <code>Sudah bayar, belum dikonfirmasi</code></div>
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
                                <?php foreach ($cetak as $p) : ?>
                                    <?php if ($p['StatusBayar'] == '1' && $p['StatusReservasi'] == '1') : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $p['NIM']; ?></td>
                                        <td><?= $p['Nama']; ?></td>
                                        <td><?= $p['Jumlah_ijazah']; ?> lembar</td>
                                        <td><?= $p['Jumlah_transkip']; ?> lembar</td>
                                        <td>Rp.<?= $p['Total']; ?></td>
                                        <td><?= $p['Tgl_Transaksi']; ?></td>
                                        <td>
                                            <?= "<span class='badge badge-warning'>Sedang diproses</span>"; ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <h5 class="form-header"><?= $title; ?>&nbsp;<span class='badge badge-success'>Sudah selesai</span></h5>
                    <div class="form-desc">Datatables user berdasarkan status pembayaran <code>Sudah selesai</code></div>
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
                                <?php foreach ($cetak as $p) : ?>
                                    <?php if ($p['StatusBayar'] == '1' && $p['StatusReservasi'] == '2') : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $p['NIM']; ?></td>
                                        <td><?= $p['Nama']; ?></td>
                                        <td><?= $p['Jumlah_ijazah']; ?> lembar</td>
                                        <td><?= $p['Jumlah_transkip']; ?> lembar</td>
                                        <td>Rp.<?= $p['Total']; ?></td>
                                        <td><?= $p['Tgl_Transaksi']; ?></td>
                                        <td>
                                            <?= "<span class='badge badge-success'>Sudah selesai</span>"; ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    <h5 class="form-header"><?= $title; ?>&nbsp;<span class='badge badge-primary'>Sudah diterima</span></h5>
                    <div class="form-desc">Datatables user berdasarkan status pembayaran <code>Sudah diterima</code></div>
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
                                <?php foreach ($cetak as $p) : ?>
                                    <?php if ($p['StatusBayar'] == '1' && $p['StatusReservasi'] == '3') : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $p['NIM']; ?></td>
                                        <td><?= $p['Nama']; ?></td>
                                        <td><?= $p['Jumlah_ijazah']; ?> lembar</td>
                                        <td><?= $p['Jumlah_transkip']; ?> lembar</td>
                                        <td>Rp.<?= $p['Total']; ?></td>
                                        <td><?= $p['Tgl_Transaksi']; ?></td>
                                        <td>
                                            <?= "<span class='badge badge-primary'>Sudah diterima</span>"; ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endif; ?>
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