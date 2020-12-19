<title><?php echo $header; ?></title>

<style type="text/css">
	.latu{
		display: flex;
		justify-content: space-between;
	}
</style>

<h1 style="text-align: center;">SIMPLE LAPOR!</h1>
<br>

<form style="text-align: center;" action="Utama.php" method="get">
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<p style="text-align: center;"><a href="Buat">Buat Laporan/Komentar &#10010;</a></p>

<p>Laporan/Komentar Terakhir</p>
<hr>

	<?php
		foreach ($utama as $u => $row) { ?>
				<div class="isi">
					<p>
						<br>
						<?php 
							$kalimat = $row->isi;
							if(strlen($kalimat) >= 700){
								$tampil_sebagian = substr($kalimat, 0, 700);
								echo $tampil_sebagian . "...";
							}else{
								echo($kalimat);
							}
							
						 ?>
					</p>
				</div>

				<div class="latu">
					<p>
						Lampiran :
						<?php echo $row->lampiran; ?>
					</p>

					<div class="latu" style="width: 280px;">
						<p>
							Waktu :
							<?php echo $row->waktu; ?>
						</p>

						<p><a href="<?= base_url("detail/index/" . $row->id_lapor) ?>">Lihat Selengkapnya</a></p>
						<p>&#10097;</p>
					</div>	

				</div>
				<hr>
		<?php
		}
	?>