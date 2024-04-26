<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
class laptop 
{
    public $nama;
    public $brand;
    public function __construct($NamaSiswa , $NamaBrand) {
        $this->nama = $NamaSiswa;
        $this->brand = $NamaBrand;
    }
    public function print(){
        echo $this->nama . ' memiliki laptop dengan nama brand ' .$this->brand;
    }
    
}
$lap1 = new laptop('Julian' , 'hp');
echo $lap1->print();
echo '<br>';


$lap2 = new laptop('Haikal' , 'Asus ROG');
echo $lap2->print();
echo '<br>';

$lap3 = new laptop('Farhan' , 'Diamond Frost');
echo $lap3->print();
echo '<br>';

?>
    
</body>
</html>
