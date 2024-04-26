<?php
require 'oop.php';
?>


<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Project BBM</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <style>
        body {
            background-image: url(image/bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>

    <body>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card bg-dark text-white text-center">
                        <div class="card-body">
                            <form action="" method="POST" class="align-items-center">
                                <h1>Bahan Bakar</h1>
                                <div class="col">
                                    <input placeholder="Masukan Jumlah Liter" type="number" name="liter" id="liter" class="form-control my-3 py-2">
                                </div>
                                <div class="col">
                                    <select name="jenis" id="bensin" class="form-select mb-3" aria-label="Default select example">
                                        <option value="Super">Shell Super</option>
                                        <option value="V-Power">Shell V-Power</option>
                                        <option value="Diesel">Shell V-Power Diesel</option>
                                        <option value="Nitro">Shell V-Power Nitro</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input placeholder="Masukan Jumlah Uang" type="number" name="uang" id="uang" class="form-control my-3 py-2">
                                </div>
                                <div class="d-grid">
                                    <button type="submit" name="submit" class="btn btn-info">Jumlah</button>
                                </div>
                            </form>
                            <div>
                                <?php
                                if (isset($_POST['submit']) && $jumlah = $_POST['liter'] && $jenis = $_POST['jenis'] && $uang = $_POST['uang']) {
                                    $produk = new beli($_POST['liter'], $_POST['jenis'], $_POST['uang']);
                                    echo $produk->beli();
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modals -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Struk Anda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <p>------------------------------------------------------------------------</p>
            <h6>Anda Membeli Bahan Bakar Tipe :</h6>
            <?php
                echo "Shell ". $produk->jenis;
            ?>
            <hr>
            <h6>Anda Membeli Bahan Bakar Sebanyak :</h6>
            <?php
                echo  $produk->liter. " Liter";
            ?>
            <hr>
            <h6>Total yang Harus Anda Bayar :</h6>
            <?php
                echo $produk->total;
            ?>
            <hr>
            <h6>Jumlah Uang yang Anda Bayar :</h6>
            <?php
                echo $produk->uang;
            ?>
            <hr>
            <p>------------------------------------------------------------------------</p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="window.print()">Print Struk</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    </html>