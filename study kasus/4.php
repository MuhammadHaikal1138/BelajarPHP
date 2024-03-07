<?php 
    $barang = [
        [
            'nama_barang' => 'pasta gigi',
            'harga_barang' => 18000,
            'jumlah_barang' => 1,
        ],
        [
            'nama_barang' => 'Sabun mandi',
            'harga_barang' => 5000,
            'jumlah_barang' => 3,
        ],
        [
            'nama_barang' => 'Aloe Vera Sheet Mask',
            'harga_barang' => 15000,
            'jumlah_barang' => 4,
        ],
    ];
    $total= 0;
    foreach ($barang as $item) {
       $harga = $item['harga_barang'] * $item['jumlah_barang'];
       $total += $harga;
    }
    echo "adalah ".$total;
?>