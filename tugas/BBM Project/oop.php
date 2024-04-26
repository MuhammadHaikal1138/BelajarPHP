<?php
if (isset($_POST['submit']) && $_POST['jenis'] && $_POST['liter'] && $_POST['uang']) {
    $jenis = $_POST['jenis'];
    $liter = $_POST['liter'];
    $uang = $_POST['uang'];

    class shell
    {
        public
            $uang,
            $jenis,
            $liter,
            $harga,
            $ppn = 0.1;
        public function __construct($liter, $jenis)
        {
            $this->jenis = $jenis;
            $this->liter = $liter;
            switch ($this->jenis) {
                case "Super":
                    $this->harga = 15420;
                    break;
                case "V-Power":
                    $this->harga = 16130;
                    break;
                case "Diesel":
                    $this->harga = 18310;
                    break;
                case "Nitro":
                    $this->harga = 16510;
                    break;
            }
        }
    }
    class beli extends shell
    {
        public $uang;
        public $total;
        public function beli()
        {
            $this->total = number_format(($this->liter * $this->harga) + $this->harga * $this->liter * $this->ppn, 2, ',', '.');
            $this->uang = number_format($_POST['uang'],2, ',' , '.');
            $all = "<div class='card text-center mt-3'>
                    <div class='card-header'>
                        Jumlah Harga Yang Harus Anda Bayar
                    </div>
                    <div class='card-body'>
                        <h6 class='card-title'>Anda Membeli Bahan Bakar Tipe $this->jenis</h6>
                        <p class='card-text'>Anda Membeli Bahan Bakar Sebanyak $this->liter liter</p>
                        <h5 class='card-text'>Total Yang Harus Anda Bayar Adalah $this->total</h5>
                        <h5 class='card-text'>Anda Membayar Uang Sebesar $this->uang</h5>
                        <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@mdo'>Lihat Struk</button>
                    </div>
                </div>";
            echo $all;
        }
    }
} //penutup if utama
