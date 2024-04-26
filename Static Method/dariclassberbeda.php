<?php

	class perpustakaan{

		public static function DataBuku(){
			return $buku=['Matematika','Sejarah','Fisika','Biologi','Komik'];
		}

	}
	class buku extends perpustakaan{
		public function tampilDataBuku(){
			echo "<h1>Data Buku<h1>";
			foreach(parent::DataBuku() as $key => $data){
				$n=$key+1;
				echo "$n. $data<br/>";
			}
		}
	}

	$buku=New buku();	
	$buku->tampilDataBuku();
?>
