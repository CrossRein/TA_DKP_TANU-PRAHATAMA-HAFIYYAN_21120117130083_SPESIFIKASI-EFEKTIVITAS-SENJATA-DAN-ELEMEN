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
		<title>Spesifikasi efektivitas senjata dan elemen(Stats)</title>
	</head>

	<body>
		<h2>Input Stats</h2>
		<form action="status.php" method="post">
		<label>Kekuatan:<label> <br>
		<input type="radio" name="kekuatan" value="3">Tinggi<br>
		<input type="radio" name="kekuatan" value="2">Normal<br>
		<input type="radio" name="kekuatan" value="1">Rendah<br>
		<label>Kecepatan:<label> <br>
		<input type="radio" name="kecepatan" value="3">Tinggi<br>
		<input type="radio" name="kecepatan" value="2">Normal<br>
		<input type="radio" name="kecepatan" value="1">Rendah<br>
		<label>Kelincahan:<label> <br>
		<input type="radio" name="kelincahan" value="3">Tinggi<br>
		<input type="radio" name="kelincahan" value="2">Normal<br>
		<input type="radio" name="kelincahan" value="1">Rendah<br>
		<label>Reflek:<label> <br>
		<input type="radio" name="reflek" value="3">Tinggi<br>
		<input type="radio" name="reflek" value="2">Normal<br>
		<input type="radio" name="reflek" value="1">Rendah<br>
		<label>Visibilitas:<label> <br>
		<input type="radio" name="visibilitas" value="3">Tinggi<br>
		<input type="radio" name="visibilitas" value="2">Normal<br>
		<input type="radio" name="visibilitas" value="1">Rendah<br>
		<input type="submit" name="submit" value="Submit">
		</form>
		<?php
		$kek=@$_POST["kekuatan"];
		$kec=@$_POST["kecepatan"];
		$kel=@$_POST["kelincahan"];
		$ref=@$_POST["reflek"];
		$vis=@$_POST["visibilitas"];
		;
		echo "<br>";
		echo "Kekuatan: ".$kek."<br>";
		echo "Kecepatan: ".$kec."<br>";
		echo "Kelincahan: ".$kel."<br>";
		echo "Reflek: ".$ref."<br>";
		echo "Visibilitas: ".$vis."<br>";

			$senjata=array
			(
				array("Axe" ,0),
				array("Sword",0),
				array("Dagger",0),
				array("Gun","Bow"),
				array("Melee",0),
				array("Stone",0),
			);


			if($kek==3 && $kel>=2 && $ref>=2 && $vis>=1 && $kec>=1 || $kec>=3 && $kel>=1 && $vis>=1 && $kek>=3 && $ref>=1){
				$senjata[0][1]=1;
			}
			if($kek>=2 && $kec>=2 && $kel>=2 && $ref>=2 && $vis>=1){
				$senjata[1][1]=1;
			}
			if($kek>=1 && $kec>=3 && $kel>=3 && $ref>=1 && $vis>=1 || $kec>=3 && $kel>=2 && $vis>=2 && $kek>=1 && $ref>=1){
				$senjata[2][1]=1;
			}
			if($kek>=2 && $kec>=2 && $kel>=1 && $ref>=1 && $vis>=3){
				$senjata[3][1]=1;
			}
			if ($kek>=2 && $kec>=2 && $kel>=1 && $ref>=3 && $vis>=1 || $kek>=3 && $ref>=3 && $kel>=1 && $kec>=1 && $vis>=1){
				$senjata[4][1]=1;
			}
			if($kek>=1 && $kec>=1 && $kel>=1 && $ref>=1 && $vis>=1){
				$senjata[5][1]=1;
			}
			echo "<br> Senjata yang cocok : ";
			for($i=0;$i<6;$i++)
			{
				if($senjata[$i][1]==1){
					echo $senjata[$i][0]." ";
				}
			}
		?>
		<br>
		<br>
		<a href="index.php">Menu Utama</a>
		<br>
		<a href="element.php">Spesifikasi Elemen</a>
		<br>
		<a href="equipment.php">Spesifikasi Senjata</a>
		<br>
		<a href="tempur.php">Rekomondasi diri sesuai kondisi musuh</a>
	</body>
</html>
