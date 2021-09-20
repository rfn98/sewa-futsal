<?php 
	$jam_mulai = explode(':', $_POST['jam_mulai']);
	$minute = $jam_mulai[1];
	$jamdur = $_POST['durasi'] + $jam_mulai[0];
	$jam_berakhir = $jamdur.($minute == '00' ? ':00' : ":$minute").':00';
	var_dump($jam_berakhir);
?>