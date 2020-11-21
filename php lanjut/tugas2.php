<?php
	function bet($nama, $color){
		$panjang = strlen($nama);
		if($panjang > 20 && $color != ""){
			$harga = 700;
			$warna = $color;
		}
		elseif($panjang >= 11 && $color != ""){
			$harga = 500;
			$warna = $color;
		}
		elseif($panjang >=1 && $color != ""){
			$harga = 300;
			$warna = $color;
		}
		elseif($panjang > 20 && $color == ""){
			$harga = 700;
			$color = "red";
			$warna = $color;
		}
		elseif($panjang >= 11 && $color == ""){
			$harga = 500;
			$color = "red";
			$warna = $color;
		}
		elseif($panjang >= 1 && $color == ""){
			$harga = 300;
			$color = "red";
			$warna = $color;
		}
		elseif($panjang = 0 && $color == ""){
			$harga = 0;
			$color = "red";
			$warna = $color;
		}
		else{
			$harga = 0;
			$warna = $color;
		}
		$total = $panjang * $harga;
		echo '<font color="' .$warna.'">Nama : ' .$nama. '</font><br>';
		echo '<font color="' .$warna.'">Total harga : ' .$total.'</font><br>';
	}
?>

	<form method="POST" enctype=multipart/form-data>
    <label>Nama: </label><br>
    <input type="text" name="nama" placeholder="Masukkan Nama"><br>
    <label>Warna: </label><br>
    <input type="text" name="color" placeholder="Masukkan Warna"><br>
    <button type="submit" name="cari">Cari</button>
    </form>
<?php
	if(isset($_POST['cari'])){
       bet($_POST['nama'], $_POST['color']);
    }
?>