<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<style type="text/css">
	.table-data {
		width: 100%;
		border-collapse: collapse;
	}

	.table-data tr th,
	.table-data tr td {
		border: 1px solid black;
		font-size: 11pt;
		font-family: Verdana;
		padding: 10px 10px 10px 10px;
	}

	.table-data th {
		background-color: grey;
	}

	h3 {
		border: 1px;
		font-family: Verdana;
	}
</style>
<h3>
	<center>Laporan Pengiriman DELAPAN EXPRESS</center>
</h3>
<h5>
	<center>Periode <?php
					$tglcetak = date('Y-m-d');
					echo "$tglcetak";
					?></center>
</h5>
<br />
<table class="table-data">
	<thead>
		<tr>
			<th>No</th>
			<th>ID Pengiriman</th>
			<th>Tanggal</th>
			<th>Pengirim</th>
			<th>Penerima</th>
			<th>Barang</th>
			<th>Layanan</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$a = 1;
		foreach ($data_pengiriman as $p) { ?>
			<tr>
				<th scope="row"><?= $a++; ?></th>
				<td><?= $p['id_pengiriman']; ?></td>
				<td><?= $p['tanggal']; ?></td>
				<td><?= $p['nama_pelanggan']; ?></td>
				<td><?= $p['penerima']; ?></td>
				<td><?= $p['nama_barang']; ?></td>
				<td><?= $p['layanan']; ?></td>
				<td class="text-success"><b><?= $p['status']; ?></b></td>
			</tr>
		<?php } ?>
	</tbody>
	<?php
	$tglcetak = date('Y-m-d');
	echo "<br>";
	echo "<div align='right'> Tanggal Cetak : $tglcetak </div>";
	?>
</table>