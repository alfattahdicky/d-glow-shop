<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../style/whislist.css" />
    <link rel="icon" type="image/png" href="../../images/logo.png" />
    <title>Whislist</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">
          <img src="../../images/logo.png" alt="logo" />
          <h1>Keranjang Belanjaan</h1>
          <form>
            <input class="search" type="search" placeholder="Cari Produk" />
            <input class="button" type="submit" value="Search" />
          </form>
        </div>
      </nav>
    </header>
    <div class="wrapper-title">
      <div class="product">
        <div class="wrap">
          <input type="checkbox" id="all-product" />
          <span>Produk</span>
        </div>
        <div class="items-product">
          <span>Harga Satuan</span>
          <span>Kuantitas</span>
          <span>Total Harga</span>
          <span>Aksi</span>
        </div>
      </div>
    </div>

    <div class="wrapper-product">
      <form class="list-product">
        <div class="product">
          <div class="wrap">
            <input type="checkbox" id="product"/>
            <div class="product-name">
              <img src="../../images/facial-wash.png" alt="Facial Wash" />
              <p>Facial Wash</p>
            </div>
          </div>
          <div class="items-product">
            <span name="price" id="price">Rp. <?php
              $facial = 100.000;
              echo $facial;
            ?>.000</span>
            <div class="quantity">
              <p name="minus" id="minus">-</p>
              <span name="increment" id="increment"><?php
                $increment = 1;
                echo $increment;
              ?></span>
              <p name="plus" id="plus">+</p>
            </div>
            <span name="total-price" id="totalPrice">Rp. <?php
              $total_facial = $increment * $facial;
              echo $total_facial;
            ?>.000,-</span>
            <button>Hapus</button>
          </div>
        </div>
        <div class="product">
          <div class="wrap">
            <input type="checkbox" id="product2" />
            <div class="product-name">
              <img src="../../images/serum-wajah.png" alt="Serum" />
              <p>Serum</p>
            </div>
          </div>
          <div class="items-product">
            <span name="price" id="price"
              >Rp.
              <?php
              $serum = 200;
              echo $serum;
            ?>.000</span
            >
            <div class="quantity">
              <p name="minus" id="minus">-</p>
              <span name="increment" id="increment"
                ><?php
                $increment = 1;
                echo $increment;
              ?></span
              >
              <p name="plus" id="plus">+</p>
            </div>
            <span name="total-price" id="totalPrice"
              >Rp.
              <?php
              $total_serum = $increment * $serum;
              echo $total_serum;
            ?>.000,-</span
            >
            <button>Hapus</button>
          </div>
        </div>
      </form>
    </div>

    <footer>
      <div class="navbarbawah">
        <form class="subtotal">
          <label for="">
            <input type="checkbox" name="mybox" value="Produk" alt="" /> Pilih
            Produk
          </label>
          <div class="checkout">
            <p class="subtotalpembayaran">
              Sub Total Untuk Pembayaran:
              <?php 
              $result = $total_facial  + $total_serum;
              echo $result;
            ?>.000
            </p>
            <a href="../../page/payment/pembayaran.html">Check Out</a>
          </div>
        </form>
      </div>
    </footer>
  </body>
</html>
