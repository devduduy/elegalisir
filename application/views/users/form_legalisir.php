<div class="main">

    <div class="container">
        <form method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data" action="<?= base_url('User/tambah/' . base64_encode($nim) . '/' . base64_encode($nama)); ?>">
            <h3>
                Data Pribadi
            </h3>
            <fieldset>
                <div class="form-row">
                    <div class="form-group">
                        <label for="email" class="form-label">Email<span style="color: red;">*</span></label>
                        <input type="email" name="email" id="email" placeholder="ex : yudhapermana166@gmail.com" required />
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">No.Telp / HP<span style="color: red;">*</span></label>
                        <input type="text" name="phone" id="phone" placeholder="Masukkan No. Telepon" required />
                    </div>
                </div>
                <label for="alamatLengkap" class="form-label">Alamat Lengkap<span style="color: red;">*</span></label>
                <input type="text" name="alamatLengkap" id="alamatLengkap" placeholder="Masukkan Alamat Lengkap" required />
                <label for="tempatBekerja" class="form-label">Perusahaan Tempat Bekerja<span style="color: red;">*</span></label>
                <input type="text" name="tempatBekerja" id="tempatBekerja" placeholder="ex : PT.Cipta Purnama Samudera" required />
                <label for="posisiBekerja" class="form-label">Posisi Pekerjaan<span style="color: red;">*</span></label>
                <input type="text" name="posisiBekerja" id="posisiBekerja" placeholder="ex : Front-end Developer" required />
                <label for="alamatPerusahaan" class="form-label">Alamat Perusahaan<span style="color: red;">*</span></label>
                <input type="text" name="alamatPerusahaan" id="alamatPerusahaan" placeholder="Masukkan alamat perusahaan saat ini" required />
            </fieldset>

            <h3>
                Koresponden
            </h3>
            <fieldset>
                <h2>Form Koresponden</h2>
                <?php $i = 1; ?>
                <?php foreach ($question as $data) : ?>
                    <div class="form-radio">
                        <label for="netral_<?= $data->name ?>" class="radio-label"><?= $i ?>. <?= $data->question ?><span style="color: red;">*</span></p></label>
                        <div class="form-radio-group">
                            <div class="form-radio-item">
                                <input type="radio" id="tdkstj_<?= $data->name ?>" name="<?= $data->name ?>" value="1" required>
                                <label for="tdkstj_<?= $data->name ?>">Tidak setuju</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" id="netral_<?= $data->name ?>" name="<?= $data->name ?>" value="2" required>
                                <label for="netral_<?= $data->name ?>">Netral</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" id="sgtstj_<?= $data->name ?>" name="<?= $data->name ?>" value="3" required>
                                <label for="sgtstj_<?= $data->name ?>">Sangat setuju</label>
                                <span class="check"></span>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
                <br><br>
                <label>14. Menurut anda, aspek apa dari perkulihan di FASILKOM yang paling bermanfaat atau penting?<span style="color: red;">*</span></label>
                <input type="text" name="menurutanda" placeholder="Masukkan Jawaban Anda" required>
                <br><br>
                <label>15. Apa saran Anda untuk menyempurnakan kualitas pembelajaran FASILKOM ?<span style="color: red;">*</span></label>
                <input type="text" name="sarananda" placeholder="Masukkan Jawaban Anda" required><br><br>
            </fieldset>

            <h3>
                Pembayaran
            </h3>
            <fieldset>
                <section class="content-section">
                    <h2 class="section-header"><u>Berkas Pengajuan</u></h2>
                    <div class="shop-items">
                        <div class="row">
                            <div class="card col-5">
                                <div class="shop-item">
                                    <center>
                                        <span class="shop-item-title">Ijazah</span><i style="color: red;"> format .pdf</i>
                                        <input type="file" name="berkas" id="berkas" class="shop-item-image" onchange="previewImage();" />
                                    </center>
                                    <div class="coba shop-item-details">
                                        Harga : Rp.<span class="shop-item-price">10.000</span><br>
                                        <button class="btn btn-primary shop-item-button" type="button">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="card col-5">
                                <div class="shop-item">
                                    <center>
                                        <span class="shop-item-title">Transkip</span><i style="color: red;"> format .pdf</i>
                                        <input type="file" name="berkas2" id="berkas2" class="shop-item-image" onchange="previewImage2();" />
                                    </center>
                                    <div class="coba shop-item-details">
                                        Harga : Rp.<span class="shop-item-price">10.000</span><br>
                                        <button class="btn btn-primary shop-item-button" type="button">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-section">
                    <h2 class="section-header"><u>Jumlah Pembayaran</u></h2>
                    <div class="cart-row">
                        <span class="cart-item cart-header cart-column">ITEM</span>
                        <span class="cart-price cart-header cart-column">PRICE</span>
                        <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                    </div>
                    <div class="cart-items">
                    </div>
                    <div class="cart-total">
                        <strong class="cart-total-title">Total sebelum administrasi</strong>
                        <span class="cart-total-price">Rp.0</span><br>
                        <strong class="cart-total-title">Administrasi</strong>
                        <span id="administrasi">Rp.0</span><br>
                        <hr align="right" style="width: 35%;">
                        <strong class="cart-total-title">Total setelah administrasi</strong>
                        <span id="totalseluruh">Rp.0</span>
                    </div>
                </section>
            </fieldset>
        </form>
    </div>

</div>