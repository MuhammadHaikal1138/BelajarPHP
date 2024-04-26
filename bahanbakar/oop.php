<?php
if (isset($_POST['submit']) && $_POST['jenis'] && $_POST['liter']) {
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
        public function __construct($liter, $jenis, $uang)
        {
            $this->uang = $uang;
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

        public function beli()
        {
            $total = number_format(($this->liter * $this->harga) + $this->harga * $this->liter * $this->ppn, 2, ',', '.');
            $all = "<div class='card text-center mt-3'>
                    <div class='card-body'>
                        <h6 class='card-title'>Anda Membeli Bahan Bakar Tipe $this->jenis</h6>
                        <p class='card-text'>Anda Membeli Bahan Bakar Sebanyak $this->liter liter</p>
                        <h5 class='card-text'>Total Yang Harus Anda Bayar Adalah $total</h5>
                    </div>
                </div>";
            $kembalian =number_format($this->uang -(($this->liter * $this->harga) + $this->harga * $this->liter * $this->ppn), 2, ',', '.');
            echo $all;
            echo "Uang yang anda gunakan: Rp.", number_format($this->uang ,2,',','.'), " | Sisa uang anda: Rp.",$kembalian;
        }
        public function kembalian(){
            // isset($_POST[''])
        }
    }
}
