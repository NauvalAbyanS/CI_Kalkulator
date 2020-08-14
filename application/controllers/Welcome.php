<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function lihat_info(){
		echo "<head><title> Praktik CodeIgniter 2020 </title></head>";
		echo "<h1> Praktik CodeIgniter 2020 </h1>";
		echo "<h3> Presented by RPL BPI </h3>";
		echo "CodeIgniter merupakan salah satu <i> web framework </i> PHP yang sangat mudah dan menarik";
		echo "Saya mengahidiri ini untuk mulai mengenal dan mempelajari CodeIgniter";
	}
	public function jumlah_angka ($angka1,$angka2){
		if(isset($angka1)|| isset($angka2)){
			echo "angka ke - 1 :$angka1 <br />";
			echo "angka ke - 2 :$angka2 <br />";
			$hasil = $angka1 + $angka2;
			echo "hasil penjumlahan : $hasil";
		}
		else{
			echo"anda tidak memasukan argumen kedalam funcion jumlah angka";
		}
	}



}
