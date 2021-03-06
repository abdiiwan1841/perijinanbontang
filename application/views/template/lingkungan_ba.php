<html>
	<head>
		<title>Berita Acara</title>
		<style>
		#wrapper{
			width:1000px;
			margin:auto;
		}
		#header{
			width:1000px;
			float:left;
			text-align:center;
			border-bottom:4px double #000000;
		}
		#container{
			width:1000px;
			float:left;
		}
		#tb-header{
			width:100%;
		}
		#tb-header h2{
			line-height:4px;
		}
		#tb-header h4{
			line-height:4px;
		}
		#tb-head{
			margin:auto;
			margin-top:30px;
			margin-bottom:20px;
			text-align:center;
			width:80%;
			text-transform:uppercase;
			font-weight:bold;
		}
		#tb-content{
			width:95%;
			margin:auto;
		}
		#tb-content #col1{
			width:200px;
			vertical-align:top;
		}
		#tb-content #col2{
			width:10px;
			vertical-align:top;
		}
		#tb-content #col3{
			width:790px;
			text-align:justify;
		}
		#tb-stamp{
			width:100%;
			margin-top:15px;
		}
		#tb-stamp td{
			width:50%;
			text-align:center;
		}
		#tb-stamp td table td{
			text-align:left;
		}
		</style>
	</head>
	<body onload="window.print()">
		<div id="wrapper">
			<div id="header">
				<table id="tb-header">
					<tr>
						<td>
							<img src="<?php echo base_url(); ?>assets/images/logo-bontang.png" style="width:100px;height:120px;">
						</td>
						<td style="text-align:center;">							
							<h2>PEMERINTAH WALIKOTA BONTANG</h2>
							<h2>BADAN LINGKUNGAN HIDUP</h2>
							<h4>Gedung Graha Taman Praja Blok III Lt. 1</h4>
							<h4>Jl. Bessai Berinta Kawasan Pusat Pemerintahan Kelurahan Bontang Lestari Kode Pos 75326</h4>
							<h4>Telp. / Fax. (0548) 20353</h4>
						</td>
					</tr>
				</table>
			</div>
			<div id="container">
				<table id="tb-head">
					<tr>
						<td><u>BERITA ACARA PENINJAUAN LAPANGAN SPPL</u></td>
					</tr>
					<tr>
						<td>NOMOR : 660.01/050/BAP-SPPL/BLH/II/<?php echo date("Y"); ?></td>
					</tr>
				</table>
				Pada hari Senin tanggal Empat bulan Februari tahun Dua Ribu Tiga Belas telah dilakukan peninjauan lapangan pada : 
				<table id="tb-content">
					<tr>
						<td id="col1">Nama Usaha</td>
						<td id="col2">:</td>
						<td id="col3"><?php echo $ijin_lingkungan["NAMA_PERUSAHAAN"]; ?></td>
					</tr>
					<tr>
						<td id="col1">Lokasi</td>
						<td id="col2">:</td>
						<td id="col3"><?php echo $ijin_lingkungan["ALAMAT_LOKASI"]; ?></td>
					</tr>
					<tr>
						<td id="col1">Penanggung Jawab</td>
						<td id="col2">:</td>
						<td id="col3"><?php echo $ijin_lingkungan["pemohon_nama"]; ?></td>
					</tr>
					<tr>
						<td id="col1">Alamat</td>
						<td id="col2">:</td>
						<td id="col3"><?php echo $ijin_lingkungan["ALAMAT_PERUSAHAAN"]; ?></td>
					</tr>
					<tr>
						<td id="col1">Dasar</td>
						<td id="col2">:</td>
						<td id="col3">
							<ol type="1">
								<li>Undang - undang Nomor 32 Tahun 2009 tentang Perlindungan dan Pengelolaan Lingkungan Hidup;</li>
								<li>Peraturan Pemerintah Nomor 27 Tahun 2012 tentang Izin Lingkungan;</li>
								<li>Peraturan Menteri Negara Lingkungan Hidup Nomor 13 Tahun 2010 tentang Upaya Pengelolaan Lingkungan Hidup dan Upaya Pemantauan Lingkungan Hidup dan Surat Pernyataan Kesanggupan Pengelolaan dan Pemantauan Lingkungan Hidup;</li>
								<li>Peraturan Walikota Bontang Nomor 25 Tahun 2010 tentang jenis usaha dan/atau kegiatan yang wajib UKL dan UPL dan SPPL;</li>
								<li>Permohonan SPPL;</li>
							</ol>
						</td>
					</tr>
				</table>
				Hasil pemeriksaan yang telah dilakukan sebagai berikut :
				<ol type="A">
					<li>
					Keterangan kegiatan/usaha : 
						<table>
							<tr>
								<td>1</td>
								<td>Nama Kegiatan</td>
								<td> : <?php echo $ijin_lingkungan["NAMA_KEGIATAN"]; ?></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Nama Penanggung Jawab</td>
								<td> : <?php echo $ijin_lingkungan["NAMA_KEGIATAN"]; ?></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Luas Usaha</td>
								<td> : <?php echo $ijin_lingkungan["LUAS_USAHA"]; ?></td>
							</tr>
							<tr>
								<td></td>
								<td>Luas Lahan</td>
								<td> : <?php echo $ijin_lingkungan["LUAS_BAHAN"]; ?></td>
							</tr>
							<tr>
								<td></td>
								<td>Luas Bangunan</td>
								<td> : <?php echo $ijin_lingkungan["LUAS_BANGUNAN"]; ?></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Rencana Sumber Air Bersih</td>
								<td> : <?//php echo $ijin_lingkungan["NAMA_KEGIATAN"]; ?></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Sumber Energi</td>
								<td> : <?//php echo $ijin_lingkungan["NAMA_KEGIATAN"]; ?></td>
							</tr>
						</table>
					</li>
					<li>
						Kondisi di lapangan / keterangan yang ditemukan di lapangan
						<ol type="1">
							<li>Lokasi kegiatan berada di Kelurahan Tanjung Laut dalam kategori BWK 1 dengan fungsi utama sebagai pusat perdagangan dan jasa, sedangkan kegiatan pendukungnya adalah kawasan lindung, pemukiman, pariwisata, pelabuhan dan perikanan;</li>
							<li>Kondisi di lapangan, bangunan ruko sudah terbangunan 100% dan memiliki 2 (dua) lantai, lantai 1 (satu) sebagai tempat usaha dan lantai 2 sebagai tempat tinggal;</li>
							<li>
								Batas - batas kegiatan :
								<table>
									<tr>
										<td>Kanan</td>
										<td> : Gang</td>
									</tr>
									<tr>
										<td>Kiri</td>
										<td> : Hj. Herlina</td>
									</tr>
									<tr>
										<td>Depan</td>
										<td> : Jalan Achmad Yani</td>
									</tr>
									<tr>
										<td>Belakang</td>
										<td> : Hj. Herlina</td>
									</tr>
								</table>
							</li>
							<li>Perijinan yang dimiliki : 
								<ul>
									<li>Rekomendasi Nomor : 640/01/Kel. TL tanggal 15 Januari 2012 dari Kelurahan Tanjung Laut;</li>
									<li>Sertifikat Hak Milik Nomor 2005 tanggal 29 Februari 2011;</li>
								</ul>
							</li>
						</ol>
					</li>
					<li>
						Perkiraan dampak yang timbul
						<ol>
							<li>Limbah padat;</li>
							<li>Limbah domestik saat operasi;</li>
							<li>Kemacetan lalu lintas.</li>
						</ol>
					</li>
					<li>
						Saran
						<ol type="1">
							<li>Desain bangunan mengikuti ketentuan dari instansi teknis;</li>
							<li>Pembangunan mengikuti ketentuan yang tertera dalam Surat Keterangan Kesesuaian Tata Ruang;</li>
							<li>Menyediakan lahan parkir yang memadai sehingga tidak mengganggu lingkungan;</li>
							<li>Menyiapkan RTH privat minimal 10% dari luas lahan;</li>
							<li>Menanam pohon lokasi kegiatan;</li>
							<li>Melakukan pemilahan sampah di loka tesi kegiatan dengan menyediakan tempat sampah organik dan sampah anorganik yang tertutup;</li>
							<li>Menerapkan pemanfaatan sampah dengan menggunakan prinsip 3R (Reduce, Reuse, Recycle);</li>
							<li>Membuat septic tank untuk pengelolaan limbah domestik yang dihasilkan pada saat beroperasi;</li>
							<li>Membangunan selokan dan tindakan lain guna memperlambat dan mengendalikan limpahan air an melindungi saluran drainase;</li>
							<li>Membuat lubang peresapan biopori;</li>
							<li>Melakukan penghematan energi (air, listrikm dan BBM);</li>
							<li>Tidak melakukan kegiatan sebelum menyelesaikan perijinan yang terkait.</li>
						</ol>
					</li>
				</ol>
				<table id="tb-stamp">
					<tr>
						<td></td>
						<td>
							<table style="margin:auto;width:40%;">
								<tr>
									<td>Dibuat di</td>
									<td style="width:10px;"> : </td>
									<td>Bontang</td>
								</tr>
								<tr>
									<td>Pada tanggal</td>
									<td style="width:10px;"> : </td>
									<td><?php echo date("d-m-Y"); ?></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>Pihak Pemrakarsa,</td>
						<td>Peninjau Lapangan,</td>
					</tr>
					<tr>
						<td height="100"></td>
						<td height="100"></td>
					</tr>
					<tr>
						<td><u><b>Hj. Herlina</b></u></td>
						<td><u><b>Milawati, S.Si</b></u></td>
					</tr>
					<tr>
						<td>Penanggung jawab kegiatan</td>
						<td>Nip. 19850731 200903 2 005</td>
					</tr>
				</table>
				<table id="tb-stamp">
					<tr>
						<td>Mengetahui</td>
						<td>Penanggung Jawab Peninjauan Lapangan</td>
					</tr>
					<tr>
						<td>Kepala Bidang Tata Lingkungan dan AMDAL,</td>
						<td>Kasubid AMDAL,</td>
					</tr>
					<tr>
						<td height="100"></td>
						<td height="100"></td>
					</tr>
					<tr>
						<td><u><b>Srie Mariyanti, ST, MT</b></u></td>
						<td><u><b>Natalia Santi K., S.Hut, MP</b></u></td>
					</tr>
					<tr>
						<td>Nip. 19730410 199803 2 012</td>
						<td>Nip. 1978123 200112 2 003</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
