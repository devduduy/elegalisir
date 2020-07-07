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
    <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
    </div>
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header"><?= $title; ?></h6>
                <!-- Isi Content -->
                <div class="element-box">
                    <h5 class="form-header"><?= $title; ?></h5>
                    <div class="form-desc">Kamu dapat <code>mengedit</code> atau <code>delete</code> menu management</div>
                    <div class="controls-above-table">
                        <div class="row">
                            <div class="col-sm-6">
                                <?php if ($this->session->flashdata('flash')) : ?>

                                    <div class="row mt-3">
                                        <div class="col md-6">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Data menu <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <small class="form-text text-danger"><?= form_error('menu'); ?></small>

                            </div>
                            <div class="col-sm-12">
                                <a class="btn btn-sm btn-primary" href="" data-target="#newMenuModal" data-toggle="modal">Tambah Menu Baru</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!--------------------
START - Basic Table
-------------------->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Menu</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($menu as $m) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $m['menu']; ?></td>
                                        <td class="row-actions">
                                            <a href="" class="mr-2 mb-2 mt-2 btn btn-info" data-target="#editMenuModal{{<?= $m['id']; ?>}}" data-toggle="modal"><i class="os-icon os-icon-ui-49"></i>Edit</a>
                                            <a class="mr-2 mt-2 ml-0 mb-2 btn btn-danger" href="<?= base_url(); ?>menu/hapus/<?= $m['id']; ?>"><i class="os-icon os-icon-ui-15" onclick="return confirm('yakin hapus menu?');"></i>Delete</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!--------------------
END - Basic Table
-------------------->
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

<!-- MODAL ADD MENU-->
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="newMenuModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center"><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="200px"></div>
            <div class="onboarding-content with-gradient">
                <h4 class="onboarding-title">Tambah Menu Baru</h4>
                <div class="onboarding-text">Form untuk menambahkan menu baru.</div>
                <form action="<?= base_url('menu/tambahmenu');  ?>" method="post">

                    <div class="form-group">
                        <label for="">Nama menu</label>
                        <input class="form-control" placeholder="Masukkan nama menu..." type="text" id="menu" name="menu">
                        <small class="form-text text-danger"><?= form_error('menu'); ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>

<!-- MODAL EDIT MENU-->
<?php foreach ($menu as $m) : ?>
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="editMenuModal{{<?= $m['id']; ?>}}" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
            <div class="modal-content text-center"><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close</span><span class="os-icon os-icon-close"></span></button>
                <div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="200px"></div>
                <div class="onboarding-content with-gradient">
                    <h4 class="onboarding-title">Edit Menu</h4>
                    <div class="onboarding-text">Form untuk mengedit menu.</div>
                    <form action="<?= base_url('menu/editmenu');  ?>/<?= $m['id']; ?>" method="post">

                        <div class="form-group">
                            <label for="">Nama menu</label>
                            <input class="form-control" placeholder="Masukkan nama menu..." type="text" id="menu" name="menu" value="<?= $m['menu']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
<?php endforeach; ?>