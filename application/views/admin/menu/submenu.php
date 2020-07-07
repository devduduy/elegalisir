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
                    <div class="form-desc">Kamu dapat <code>mengedit</code> atau <code>delete</code> sub menu management</div>
                    <div class="controls-above-table">
                        <div class="row">
                            <div class="col-sm-6">
                                <?php if ($this->session->flashdata('flash')) : ?>

                                    <div class="row mt-3">
                                        <div class="col md-6">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Data submenu <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (validation_errors()) : ?>

                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= form_error('menu_id'); ?>
                                        <?= form_error('title'); ?>
                                        <?= form_error('url'); ?>
                                        <?= form_error('icon'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-12">
                                <a class="btn btn-sm btn-primary" href="" data-target="#newSubMenuModal" data-toggle="modal">Tambah Sub Menu Baru</a>
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
                                    <th>Title</th>
                                    <th>Menu</th>
                                    <th>Url</th>
                                    <th>Icon</th>
                                    <th>Active</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($subMenu as $sm) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $sm['title']; ?></td>
                                        <td><?= $sm['menu']; ?></td>
                                        <td><?= $sm['url']; ?></td>
                                        <td><?= $sm['icon']; ?></td>
                                        <td><?= $sm['is_active']; ?></td>
                                        <td class="row-actions">
                                            <a href="" class="mr-2 mb-2 mt-2 btn btn-info" data-target="#editSubMenuModal{{<?= $sm['id']; ?>}}" data-toggle="modal"><i class="os-icon os-icon-ui-49"></i>Edit</a>
                                            <a class="mr-2 mt-2 ml-0 mb-2 btn btn-danger" href="<?= base_url(); ?>menu/hapusSubMenu/<?= $sm['id']; ?>"><i class="os-icon os-icon-ui-15" onclick="return confirm('yakin hapus submenu?');"></i>Delete</a>
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
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="newSubMenuModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center"><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="200px"></div>
            <div class="onboarding-content with-gradient">
                <h4 class="onboarding-title">Tambah Sub Menu Baru</h4>
                <div class="onboarding-text">Form untuk menambahkan sub menu baru.</div>
                <form action="<?= base_url('menu/submenu');  ?>" method="post">

                    <div class="form-group">
                        <label for="">Menu</label>
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="" disabled selected>Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="form-text text-danger"><?= form_error('menu_id'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Title Submenu</label>
                        <input class="form-control" placeholder="Masukkan title sub menu..." type="text" id="title" name="title">
                        <small class="form-text text-danger"><?= form_error('title'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Url Submenu</label>
                        <input class="form-control" placeholder="Masukkan url sub menu..." type="text" id="url" name="url">

                        <small class="form-text text-danger"><?= form_error('url'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Icon Submenu</label>
                        <input class="form-control" placeholder="Masukkan icon sub menu..." type="text" id="icon" name="icon">
                        <small class="form-text text-danger"><?= form_error('icon'); ?></small>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" value="1" id="is_active" name="is_active" checked>
                        <label class="form-check-label" for="is_active">Active ?</label>
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
<?php foreach ($subMenu as $sm) : ?>

    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="editSubMenuModal{{<?= $sm['id']; ?>}}" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
            <div class="modal-content text-center"><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close</span><span class="os-icon os-icon-close"></span></button>
                <div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="200px"></div>
                <div class="onboarding-content with-gradient">
                    <h4 class="onboarding-title">Edit Sub Menu</h4>
                    <div class="onboarding-text">Form untuk edit sub menu.</div>
                    <form action="<?= base_url('menu/editsubmenu');  ?>/<?= $sm['id']; ?>" method="post">

                        <div class="form-group">
                            <label for="">Menu</label>
                            <select name="menu_id" id="menu_id" class="form-control" disabled>
                                <option value="<?= $m['menu']; ?>" disabled selected>Select Menu</option>
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id']; ?>" <?= ($sm['menu_id'] == $m['id']) ? "selected" : "" ?>><?= $m['menu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('menu_id'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Title Submenu</label>
                            <input class="form-control" placeholder="Masukkan title sub menu..." type="text" id="title" name="title" value="<?= $sm['title']; ?>">
                            <small class="form-text text-danger"><?= form_error('title'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Url Submenu</label>
                            <input class="form-control" placeholder="Masukkan url sub menu..." type="text" id="url" name="url" value="<?= $sm['url']; ?>">

                            <small class="form-text text-danger"><?= form_error('url'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Icon Submenu</label>
                            <input class="form-control" placeholder="Masukkan icon sub menu..." type="text" id="icon" name="icon" value="<?= $sm['icon']; ?>">
                            <small class="form-text text-danger"><?= form_error('icon'); ?></small>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" value="1" id="is_active" name="is_active" checked>
                            <label class="form-check-label" for="is_active">Active ?</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
<?php endforeach; ?>