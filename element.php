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
		<title>Spesifikasi efektivitas senjata dan elemen(Elemental)</title>
	</head>
	
	<body>
		<h2>Pilih Elemen</h2>
		<form action="element.php" method="post">
		<label>Elemen:<label> <br>
		<input type="radio" name="element" value="lightning">Lightning<br>
		<input type="radio" name="element" value="dark">Dark<br>
		<input type="radio" name="element" value="light">Light<br>
		<input type="radio" name="element" value="earth">Earth<br>
		<input type="radio" name="element" value="wind">Wind<br>
		<input type="radio" name="element" value="water">Water<br>
		<input type="radio" name="element" value="fire">Fire<br>
			<input type="submit" name="submit" value="Submit">
		</form>
		<?php
		$elem=@$_POST["element"];
		echo "<br>Elemen dapat diimplementasikan pada sebuah objek.
				<br> Orang yang tidak memiliki kekuatan elemen tetap dapat menggunakan weapon terimplementasi element.<br>";
		switch ($elem){
			case "fire":
				echo "<br>Fire merupakan elemen api, bersifat membara dan destruktif.
						<br>Kemampuan mengendalikan api disebut Pyrokinesis. 
						<br>Cocok diimplementasi dalam senjata apapun, terutama Bow & Gun.
						<br>Fire efektif terhadap Wind. Namun rentan terhadap Water.";
				break;
			case "water":
				echo "<br>Water merupakan elemen air, bersifat tenang dan menyembuhkan.
						<br>Kemampuan mengendalikan air disebut Hidrokinesis. 
						<br>Cocok diimplementasi dalam senjata staff & harp. Ok dalam sword. Kurang efektif untuk senjata lain.
						<br>Water efektif terhadap Fire. Namun rentan terhadap Lightning & Earth.";
				break;
			case "wind":
				echo "<br>Wind merupakan elemen angin, bersifat bebas dan menembus.
						<br>Kemampuan mengendalikan angin disebut Hidrokinesis. 
						<br>Cocok diimplementasi dalam senjata pengeluar proyektil. Seperti Bow & Gun, untuk menambah tekanan.
						<br>Wind efektif terhadap Earth. Namun rentan terhadap Fire.";
				break;
			case "earth":
				echo "<br>Earth merupakan elemen tanah, bersifat keras dan destruktif.
						<br>Kemampuan mengendalikan objek disebut Telekinesis. Dapat dinyatakan sama sebagai pengendali tanah.
						<br>Cocok diimplementasikan dalam senjata apapun. Jika musuh memiliki element yang rentan terhadapnya.
						<br>Earth efektif terhadap Water & Lightning. Namun rentan terhadap Wind.";;
				break;
			case "light":
				echo "<br>Light merupakan elemen cahaya, bersifat menerangi.
						<br>Kemampuan cahaya bisa disebut Ilmu Putih. 
						<br>Dapat diimplementasi dalam senjata apapun. Namun tidak seberapa efektif Element lain(kecuali Dark).
						<br>Memiliki efektivitas dan kerentanan pada element yang sama yaitu Dark.";
				break;
			case "dark":
				echo "<br>Dark merupakan elemen kegelapan, bersifat menyuramkan.
						<br>Kemampuan kegelapan bisa disebut Ilmu Hitam. 
						<br>Dapat diimplementasi dalam senjata apapun. Namun tidak seberapa efektif Element lain(kecuali Light).
						<br>Memiliki efektivitas dan kerentanan pada element yang sama yaitu Light.";
				break;
			case "lightning":
				echo "<br>Lightning merupakan elemen petir, bersifat kelistrikan dan destruktif.
						<br>Kemampuan mengendalikan petir disebut Electrokinesis. 
						<br>Cocok diimplementasi dalam senjata apapun. Kecuali benda isolator.
						<br>Lightning efektif terhadap Water. Namun rentan terhadap Earth.";
				break;
		}
		?>
		<br>
		<br>
		<a href="status.php">Rekomendasi Senjata berdasar kemampuan diri</a>
		<br>
		<a href="index.php">Menu Utama</a>
		<br>
		<a href="equipment.php">Spesifikasi Senjata</a>
		<br>
		<a href="tempur.php">Rekomondasi diri sesuai kondisi musuh</a>
	</body>
</html>