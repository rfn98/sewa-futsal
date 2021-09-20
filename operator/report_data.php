<?php
	require '../koneksi.php';
	// $url = 'http://localhost/futsal-inven/operator/report_data.php?date_start=2021-09-19&&date_end=2021-09-19'
	$date_start = $_GET['date_start'];
	$date_end = $_GET['date_end'];
	$sql = "SELECT *, DATE(tgl_book) tgl_transaksi FROM transaksi WHERE status = 'Selesai' AND DATE(tgl_book) BETWEEN '$date_start' AND '$date_end'";
	$exec = mysqli_query($koneksi, $sql);
	$list = [];
	while ($data = mysqli_fetch_array($exec)) array_push($list, $data);
	echo json_encode($list);
?>