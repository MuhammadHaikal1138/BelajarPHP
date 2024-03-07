<?php 
    $data = [
        [
            'nama' => 'Andi',
            'tahun' => 2008,
        ],
        [
            'nama' => 'Beni',
            'tahun' => 2001,
        ],
        [
            'nama' => 'Dani',
            'tahun' => 2004,
        ],
        [
            'nama' => 'Eko',
            'tahun' => 2006,
        ],
    ];
    foreach ($data as $value) {
        if ($value['tahun'] % 4 == 0) {
            echo $value['nama'] . " Lahir pada tahun " .$value['tahun']. " dan tahun tersebut adalah tahun kabisat" . "<br>";
        } else { echo $value['nama'] . " Lahir pada tahun " .$value['tahun']. " dan tahun tersebut bukan tahun kabisat" . "<br>";
        }
    }
?>