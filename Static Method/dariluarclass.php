<?php

	class perpustakaan{

		public $buku=['Matematika','Sejarah','Fisika','Biologi','Komik'];

		public function tampilDataBuku(){
			echo "<h1>Data Buku<h1>";
			foreach($this->buku as $key => $data){
				$n=$key+1;
				echo "$n. $data<br/>";
			}
		}

	}
	perpustakaan::tampilDataBuku();
	
?>