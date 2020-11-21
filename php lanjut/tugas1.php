<?php
	function faktorial($x){
		if($x == 0){
			return 1;
		}else{
			return $x*faktorial($x-1);
		} 
	}
?>
	<form method="POST" enctype=multipart/form-data>
    <label>Nama: </label><br>
    <input type="text" name="angka" placeholder="Masukkan Angka"><br>
    <button type="submit" name="cari">Cari</button>
    </form>
<?php
	if(isset($_POST['cari'])){
        $x = ($_POST['angka']);
        echo "Faktorialnya ".$x." adalah : " .faktorial($x);
    }
?>