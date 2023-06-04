<!DOCTYPE html>
<html>
	<head>
		<style>
		body {
		background-image: url("pale.jpg");
		}
		a {
		color: black;
		}
		</style>
		<title>Spesifikasi efektivitas senjata dan elemen(Weapons)</title>
	</head>

	<body>
		<h2>Spesifikasi Senjata</h2>
		<form action="equipment.php" method="post">
		<label>Pilih Senjata:<label> <br>
		<input type="radio" name="equips" value="sword">Sword<br>
		<input type="radio" name="equips" value="axe">Axe<br>
		<input type="radio" name="equips" value="dagger">Dagger<br>
		<input type="radio" name="equips" value="spear">Spear<br>
		<input type="radio" name="equips" value="gun">Gun<br>
		<input type="radio" name="equips" value="melee">Melee<br>
		<input type="radio" name="equips" value="harp">Harp<br>
		<input type="radio" name="equips" value="staff">Staff<br>
		<input type="radio" name="equips" value="bow">Bow<br>
		<input type="radio" name="equips" value="katana">Katana<br>
		<input type="radio" name="equips" value="halberd">Halberd<br>
		<input type="radio" name="equips" value="stone">Stone<br>
			<input type="submit" name="submit" value="Submit">
		</form>
		<?php
		$equ=@$_POST["equips"];
		switch ($equ){
			case "sword":
				echo "<br>Sword adalah senjata berbilah. Pedang dapat memiliki dua sisi tajam atau hanya satu sisi tajam.
						<br>Senjata ini didesain khusus untuk menyayat & menusuk. Baik digunakan dalam jarak dekat - sedang. 
						<br>Biasanya memiliki prestise lebih atau paling tinggi dibanding senjata lain.";
				break;
			case "axe":
				echo "<br>Axe adalah sebuah alat yang biasanya terbuat dari logam, bermata yang diikat pada sebuah tangkai, biasanya dari kayu.
						<br>Senjata ini didesain khusus untuk memotong & menghancurkan. Baik digunakan dalam jarak dekat.";
				break;
			case "dagger":
				echo "<br>Dagger adalah  seuah pisau dengan ujung sangat tajam. Terdapat 2 atau lebih ujung tajam dibagian sisi. 
						<br>Senjata ini khusus didesain mampu untuk menusuk dan menikam. Baik digunakan dalam jarak dekat.
						<br>Dapat digunakan dalam jarak jauh. Namun memerlukan akurasi yang tinggi & amunisi yang lebih.";
				break;
			case "spear":
				echo "<br>Spear adalah senjata tunggul, tediri dari batang. Biasanya terbuat dari kayu & ujungnya runcing.
						<br>Senjata ini didesain khusus untuk menusuk. Baik digunakan dalam jarak dekat - sedang. Diperlukan kelincahan yang cukup tinggi.
						<br>Dapat digunakan dalam jarak jauh. Namun memerlukan kekuatan dan akurasi tinggi & short-battle only.";
				break;
			case "gun":
				echo "<br>Gun adalah senjata jarak jauh bertabung yang didesain khusus untuk menembakkan peluru(biasanya bebahan dasar keras).
						<br>Penembakkan dilakukan dengan penekanan tinggi gas pada dalam pistol untuk mengeluarkan peluru.
						<br>Pegguna Gun memiliki keuntungan besar dibanding senjata lain dalam jarak yang cukup jauh Namun perlu akurasi tinggi.";
				break;
			case "melee":
				echo "<br>Melee secara bahasa adalah perkelahian, namun melee yang dimaksud disini menggunakan tangan.
						<br>Bisa menggunakan tangan kosong atau sarung tangan. 
						<br>Dikhususkan untuk memukul dengan tenaga atau tekanan tinggi.
						<br>Baik digunakan dalam jarak dekat.";
				break;
			case "harp":
				echo "<br>Harp adalah  jenis alat musik petik. Seringkali alat musik ini diilustrasikan bersama dengan para malaikat. 
						<br>Umumnya berwarna emas, dan memiliki senar. Biasanya berbentuk dasar segitiga & tinggi.
						<br>Dalam medan perang, benda ini digunakan untuk pengiring sekaligus penyemangat para pasukan perang.
						<br>Jika disatukan dengan kekuatan magis, Harp selain dapat memberi energi lebih ke tim, dapat memperlemah musuh juga.";
				break;
			case "staff":
				echo "<br>Staff adalah senjata yang rata - rata terbuat dari sebuah kayu panjang.
						<br>Senjata ini dikhususkan untuk pemilik kekuatan magis sebagai mediasi penengeluaran energi.
						<br>Dapat mengendalikan pertarungan pada jarak sedang - jauh.";
				break;
			case "bow":
				echo "<br>Bow adalah senjata jarak jauh meliputi alat peluncur elastis (busur/ bow) dan batang pojektil panjang (anak panah).
						<br>Kegunaannya lebih tradisional dibanding dengan Gun yang lebih mengandalkan mesin.
						<br>Pegguna Gun memiliki keuntungan besar dibanding senjata lain dalam jarak yang cukup jauh Namun perlu akurasi tinggi.";
				break;
			case "katana":
				echo "<br>Katana, sesuai sejarah. Merupakan salah satu pedang jepang. Sering digunakan oleh Samurai pada zaman kuno dan feudal.
						<br>Terkarakterisasi sebagai senjata berpenampilan khusus. Melengkung, berujung tajam dan memiliki tempat pengangan yang panjang.
						<br>Senjata ini didesain khusus untuk menyayat & menusuk. Baik digunakan dalam jarak dekat - sedang.";
				break;
			case "halberd":
				echo "<br> Senjata ini berasal dari Jerman dan digunakan pada abad 14-15. Senjata ini merupakan gabungan antara kapak dan tombak.
							<br>Berbeda dengan pedang dan tombak yang hanya punya satu sisi tajam saja.
							<br>Lebih efektif sebab memiliki hingga 3 sisi tajam untuk mengoyak dan menusuk musuhnya. 
							<br>Namun diperlukan kelincahan & kekutan yang cukup tinggi untuk mengendalikannya.
							<br>Senjata ini didesain khusus untuk menyayat & menusuk. Baik digunakan dalam jarak dekat - sedang.";
				break;
			case "stone":
				echo "<br>Stone adalah batu. Senjata alternatif jika anda tidak menguasai senjata apapun. 
						<br>atau tidak memiliki spesifikasi dasar untuk senjata tertentu lainnya.
						<br>Baik digunakan dalam jarak apapun. Semakin tinggi status kekuatan & visibilitas pengguna, semakin jauh jarak cakupannya.";
				break;
		}
		?>
		<br>
		<br>
		<a href="status.php">Rekomendasi Senjata berdasar kemampuan diri</a>
		<br>
		<a href="tempureq.php">Rekomendasi Senjata berdasar kondisi Musuh</a>
        <br>
		<a href="index.php">Menu Utama</a>
		<br>
		<a href="element.php">Spesifikasi Elemen</a>
		<br>
		<a href="tempur.php">Rekomondasi senjata dan elemen sesuai kondisi musuh</a>
	</body>
</html>
