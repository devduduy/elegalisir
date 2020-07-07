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
<div class="container-fluid" style="padding: 20px;">
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header"><?= $title; ?></h6>
                <div class="content-i">
                    <a href="#m_kategori" onclick="return tambah_kategori('0');" class="tooltip-info btn btn-primary" style="padding:50px" data-toggle="modal" data-rel="tooltip" title="Tambah">
                    Cetak Laporan</a>
                    <div class="modal fade" id="m_kategori" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header no-padding">
                                <div class="table-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="white">&times;</span>
                                </button>
                                Cetak Laporan
                                </div>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/printReport') ?>" target="_blank" method="post">
                                <table class="table table-form">
                                    <tr><td style="width: 25%">Dari Tanggal</td>
                                    <td style="width: 50%">
                                        <input type="date" class="form-control" name="dari_tgl" id="dari_tgl" required value="">
                                    </td>
                                    </tr>
                                    <tr><td style="width: 25%">Sampai Tanggal</td>
                                    <td style="width: 50%">
                                        <input type="date" class="form-control" name="sampai_tgl" id="sampai_tgl" required value="">
                                    </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-white btn-info btn-bold" type="submit" name="simpan" id="simpan">
                                <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Cetak</button>
                                <button class="btn btn-white btn-danger btn-round" type="reset">
                                <i class="fa fa-refresh "></i> Reset</button>
                                <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                                <i class="fa fa-minus-circle"></i> Tutup</button>
                            </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div> 