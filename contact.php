<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Contact</h2>
				<?php 

					if(@$_GET['pesan']=="inputBerhasil"){

					?>
									<div class="alert alert-success">
									Terima kasih, pesan anda sudah terkirim!
									</div>
					<?php

					}

					?>
					<form action="proses-komentar.php" method="post">
						<table class="table table-hover">
							<tr>
								<td>Nama Lengkap
								<input type="text" name="nama" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
								</td>
							</tr>
							<tr>
								<td>Alamat Email
								<input type="email" name="email" class="form-control input-md" placeholder="Isikan alamat email yang masih aktif" required>
								</td>
							</tr>
							<tr>
								<td>Pesan
								<textarea name="pesan" class="form-control input-md" required> </textarea>
								</td>
							</tr>
							<tr>
								<td>
								<input type="submit" value="Kirim" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
								</td>
							</tr>
						</table>
					</form>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
				<h4>NIAS ISLAND</h4>
				<img src="images/omohada2.jpg" class="img-thumbnail img-responsive">
				<p>Rumah Adat Tradisional Nias (Omo Hada dan Omo Sebua) merupakan simbol masyarakat Nias dari zaman dahulu, sebuah karya arsitektur yang unik dan bernilai tinggi, rumah adat tersebut  tidak menggunakan paku besi untuk menghubungkan masing-masing bagian di rumah adat tersebut, hanya menggunakan pasak kayu namun terbukti kokoh dan tahan gempa.. Rumah adat tersebut bertujuan untuk berlindungnya masyarakat Nias, karena konstruksi rumah yang unik akan menyulitkan musuh (baik binatang buas maupun musuh dari suku lain) menyerang sang pemilik rumah, biasanya pada sebuah kampung atau desa di Nias terdapat sekitar 20-30 rumah Omo Hada dan 1 rumah Omo Sebua sebagai rumah kepala suku, Omo Hada ini adalah bangunan yang memiliki nilai-nilai tradisi dan budaya yang sangat penting di dalam kehidupan masyarakat di Pulau Nias, bahkan bangunan ini termasuk bangunan yang sangat dijaga keberadaannya oleh masyarakat Nias Selatan.<br/><a class="btn btn-danger btn-xs" href="ruang_kelas.html"role="button">Info menarik lainnya</a></p>
				</div>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		
<?php include "footer.php"; ?>