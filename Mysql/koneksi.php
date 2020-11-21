<?php
	$mysqli = new mysqli('localhost', 'root', '', 'praktikum');

	class praktikum{
		public $koneksi;
		function __construct($mysqli){
			$this -> koneksi = $mysqli;
		}
		function take_mahasiswa($nama){
			$ambildata = $this -> koneksi -> query("SELECT nrp, mahasiswa.nama, alamat, jurusan.nama as jurusan FROM mahasiswa INNER JOIN jurusan ON mahasiswa.id_jur = jurusan.id_jur WHERE mahasiswa.nama like '%$nama%'");
			while ($pecah = $ambildata -> fetch_assoc()) {
				$data[] = $pecah;
			}
			return $data;
		}
		function add_mahasiswa($nrp,$nama,$alamat,$jurusan){
			$this -> koneksi -> query("INSERT INTO mahasiswa (nrp, nama, alamat, id_jur) VALUES ('$nrp', '$nama', '$alamat', '$jurusan')");
		}
		function delete_mahasiswa($nrp){
			$this -> koneksi -> query("DELETE FROM mahasiswa WHERE nrp = $nrp");
		}
	}
	$praktikum = new praktikum($mysqli);