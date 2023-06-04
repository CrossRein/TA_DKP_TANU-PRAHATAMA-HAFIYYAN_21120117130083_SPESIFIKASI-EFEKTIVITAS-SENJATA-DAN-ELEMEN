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
		<title>Spesifikasi efektivitas senjata dan elemen(Battle)</title>
	</head>
	
	<body>
		<h2>Rekomondasi Perlawanan</h2>

		<form action="tempurfinal.php" method="post">
		<label>Musuh<br>Senjata:<label> <br>
		<input type="radio" name="weapon" value="sword">Sword<br>
		<input type="radio" name="weapon" value="axe">Axe<br>
		<input type="radio" name="weapon" value="dagger">Dagger<br>
		<input type="radio" name="weapon" value="spear">Spear<br>
		<input type="radio" name="weapon" value="gun">Gun<br>
		<input type="radio" name="weapon" value="melee">Melee<br>
		<input type="radio" name="weapon" value="stone">Stone<br>
		<label>Element:<label> <br>
		<input type="radio" name="elemen" value="lightning">Lightning<br>
		<input type="radio" name="elemen" value="dark">Dark<br>
		<input type="radio" name="elemen" value="light">Light<br>
		<input type="radio" name="elemen" value="earth">Earth<br>
		<input type="radio" name="elemen" value="wind">Wind<br>
		<input type="radio" name="elemen" value="water">Water<br>
		<input type="radio" name="elemen" value="fire">Fire<br>
		<input type="radio" name="elemen" value="none">None<br>
		<input type="submit" name="submit" value="Submit">
		</form>
		<?php
		
		$weap=@$_POST["weapon"];
		$ele=@$_POST["elemen"];
		
		{
			if($weap == null & $ele == null)
				{
				echo("<br>Silahkan pilih senjata dan elemen musuh anda, kemudian submit<br>");
				}else
				{	
				$equip=array("Axe","Sword","Dagger","Gun,Bow","Meele","all","None,Quick Reflex");
			{
				if($weap == "sword"){
				echo "<br>Senjata yang cocok untuk digunakan melawan  <b>".$weap."</b> adalah <b>".$equip[0]."</b>";
				}
				else if ($weap == "spear"){
				echo "<br>Senjata yang cocok untuk digunakan melawan  <b>".$weap."</b> adalah <b>".$equip[1]."</b>";
				}
				else if ($weap =="axe"){
				echo "<br>Senjata yang cocok untuk digunakan melawan  <b>".$weap."</b> adalah <b>".$equip[2]."</b>";
				}
				else if ($weap == "melee"){
				echo "<br>Senjata yang cocok untuk digunakan melawan  <b>".$weap."</b> adalah <b>".$equip[3]."</b>";
				}
				else if ($weap =="dagger"){
				echo "<br>Senjata yang cocok untuk digunakan melawan  <b>".$weap."</b> adalah <b>".$equip[4]."</b>";
				}
				else if ($weap =="stone"){
				echo "<br>Senjata yang cocok untuk digunakan melawan  <b>".$weap."</b> adalah <b>".$equip[5]."</b>";
				}
				else if ($weap =="gun"){
				echo "<br>Senjata yang cocok untuk digunakan melawan  <b>".$weap."</b> adalah <b>".$equip[6]."</b>";
				}
				
				
				

	
            $adv=array("Water","Earth & Lightning","Fire","Wind","Earth","Dark","Light","Any element");
			{
				if($ele =="fire"){
				echo "<br>Elemen yang cocok untuk digunakan melawan  <b>".$ele."</b> adalah <b>".$adv[0]."</b>";
				}
				else if ($ele =="water"){
				echo "<br>Elemen yang cocok untuk digunakan melawan  <b>".$ele."</b> adalah <b>".$adv[1]."</b>";
				}
				else if ($ele =="wind"){
				echo "<br>Elemen yang cocok untuk digunakan melawan  <b>".$ele."</b> adalah <b>".$adv[2]."</b>";
				}
				else if ($ele =="earth"){
				echo "<br>Elemen yang cocok untuk digunakan melawan  <b>".$ele."</b> adalah <b>".$adv[3]."</b>";
				}
				else if ($ele =="lightning"){
				echo "<br>Elemen yang cocok untuk digunakan melawan  <b>".$ele."</b> adalah <b>".$adv[4]."</b>";
				}
				else if ($ele =="light"){
				echo "<br>Elemen yang cocok untuk digunakan melawan  <b>".$ele."</b> adalah <b>".$adv[5]."</b>";
				}
				else if ($ele =="dark"){
				echo "<br>Elemen yang cocok untuk digunakan melawan  <b>".$ele."</b> adalah <b>".$adv[6]."</b>";
				}
				else if ($ele =="none"){
				echo "<br>Elemen yang cocok untuk digunakan melawan  <b>".$ele."</b> adalah <b>".$adv[7]."</b>";
				}
			}
			}
			
		}
	}
		?>
		<br>
		<a href="status.php">Rekomendasi Senjata berdasar kemampuan diri</a>
		<br>
		<a href="index.php">Menu Utama</a>
		<br>
		<a href="equipment.php">Spesifikasi Senjata</a>
		<br>
		<a href="element.php">Spesifikasi Elefssmen</a>
	</body>
</html>