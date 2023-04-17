<?php
if(isset($_POST['submit'])){
	$admin = 'info@bahanabumimandiri.co.id'; //ganti email dg email admin (email penerima pesan)
	
	$name	= htmlentities($_POST['name']);
	$jabatan	= htmlentities($_POST['jabatan']);
	$telepon	= htmlentities($_POST['telepon']);
	$email	= htmlentities($_POST['email']);
	$subject	= 'Hubungi Kami Website';
	$message	= "Nama: ". $name ."\nJabatan: ". $jabatan . "\nNomor Telp: ".$telepon. "\nEmail: ".$email. "\nPesan: ".htmlentities($_POST['keterangan']);" " ;


	$pengirim .= 'From: <'.$email.'>' . "\r\n";
	
	if(mail($admin, $subject, $message, $pengirim)){
		header("Location: /");
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.html">Kembali</a>';
	}
}else{
	echo "Error";
	// header("Location: index.php");
}
?>