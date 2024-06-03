<?php 
	include ('../../config/koneksi.php');
	include ('../../assets/vendor/autoload.php');

	if(isset($_POST['upload'])) {
		$target_name = $_FILES['datapenduduk']['name'];
		$target_data = $_FILES['datapenduduk']['tmp_name'];

		$reader = PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($target_data);
		$imported_data = $reader->load($target_data);
		$data = $imported_data->getActiveSheet()->toArray();
		for($i = 1; $i < count($data); $i++) {
			$nik  = $data[$i]['0'];
			$nama  = $data[$i]['1'];
			$tempat_lahir  = $data[$i]['2'];
			$tgl_lahir  = $data[$i]['3'];
			$jenis_kelamin  = $data[$i]['4'];
			$agama  = $data[$i]['5'];
			$jalan  = addslashes($data[$i]['6']);
			$dusun  = $data[$i]['7'];
			$rt  = $data[$i]['8'];
			$rw  = $data[$i]['9'];
			$desa  = $data[$i]['10'];
			$kecamatan  = $data[$i]['11'];
			$kota  = $data[$i]['12'];
			$no_kk  = $data[$i]['13'];
			$pend_kk  = $data[$i]['14'];
			$pend_terakhir  = $data[$i]['15'];
			$pend_ditempuh  = $data[$i]['16'];
			$pekerjaan  = $data[$i]['17'];
			$status_perkawinan  = $data[$i]['18'];
			$status_dlm_keluarga  = $data[$i]['19'];
			$kewarganegaraan  = $data[$i]['20'];
			$nama_ayah  = $data[$i]['21'];
			$nama_ibu  = $data[$i]['21'];

			if($nik != "" && $nama != "" && $tempat_lahir != "" && $tgl_lahir != "" && $jenis_kelamin != "" && $agama != "" && $jalan != "" && $dusun != "" && $rt != "" && $rw != "" && $desa != "" && $kecamatan != "" && $kota != "" && $no_kk != "" && $pend_kk != "" && $pend_terakhir != "" && $pend_ditempuh != "" && $pekerjaan != "" && $status_perkawinan != "" && $status_dlm_keluarga != "" && $kewarganegaraan != "" && $nama_ayah != "" && $nama_ibu != ""){
				mysqli_query($connect,"INSERT INTO penduduk VALUES(NULL, '$nik','$nama','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$agama','$jalan','$dusun','$rt','$rw','$desa','$kecamatan','$kota','$no_kk','$pend_kk','$pend_terakhir','$pend_ditempuh','$pekerjaan','$status_perkawinan','$status_dlm_keluarga','$kewarganegaraan','$nama_ayah','$nama_ibu')");
			}
		}
	}
	header("location:index.php");
?>