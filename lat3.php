<!DOCTYPE html>
<html>
<head>
	<title>Hitung rata-rata</title>
</head>
<body>
<pre>
	<h1>Hitung rata-rata nilai</h1>
		<form method="'get" name="frm" action=""><p>
			mMasukkan JUmlah Mahasiswa	: <input type="text" name="jumlah">
			<input type="submit" name="btnjumlah" value="ok"/></p>
		</form>

	<?php  
		if(isset($_GET['jumlah'])&& $_GET['jumlah']>0){
			$jumlah_form = $_GET['jumlah'];
		}else{
			$jumlah_form = 1;
		}
		for($i=1; $i<=jumlah_form; $i++){
			
		}

	?>
</body>
</html>