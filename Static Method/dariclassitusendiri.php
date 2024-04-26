<?php
class perpustakaan{
    public static function DataBuku(){
        return $buku=['PIPAS' => 140,
        'Sejarah' => 200,
        'Fisika' => 160,
        'Biologi' => 180,
        ];
    }
    public function tampilDataBuku(){
        echo "<h1>Data Buku<h1>";
        foreach(self::DataBuku() as $book => $JumlahHalaman){
            echo 'Jumlah halaman pada buku '.$book. ' adalah '.$JumlahHalaman.' halaman<br>';
        }
    }
}
$buku=New perpustakaan();
$buku->tampilDataBuku();
?>
