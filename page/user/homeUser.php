<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/homeUser.css">
    <link rel="icon" type="image/png" href="../../images/logo.png">
    <title>Home User</title>
</head>

<body>
    <?php 
        $products = [
            [
                "id" => 1,
                "name" => 'Lotion',
                "branch" => 'Jakarta',
                "price" => '50.000',
                "sold" => 50,
                "image" => 'lotion.png',
            ],
            [
                "id" => 2,
                "name" => 'Essence Wajah',
                "branch" => 'Bandung',
                "price" => '65.000',
                "sold" => 83,
                "image" => 'essence.png',
            ],
            [
                "id" => 3,
                "name" => 'Serum Wajah',
                "price" => '70.000',
                "branch" => 'Yogyakarta',
                "sold" => 85,
                "image" => 'serum-wajah.png',
            ],
            [
                "id" => 4,
                "name" => 'Toner',
                "branch" => 'Kediri',
                "price" => '40.000',
                "sold" => 150,
                "image" => 'toner.png',
            ],
            [
                "id" => 5,
                "name" => 'Cleansing Oil',
                "branch" => 'Tangerang',
                "price" => '45.000',
                "sold" => 83,
                "image" => 'cleansing.png',
            ],
            [
                "id" => 6,
                "name" => 'Krim Wajah',
                "branch" => 'Cirebon',
                "price" => '50.000',
                "sold" => 97,
                "image" => 'krim-wajah.png',
            ],
        ]
    ?>

    <header>
        <!-- Navbar -->
        <nav class="navbar-desktop">
            <div class="logo">
                <img src="../../images/logo.png" alt="Logo">
                <h3>D'Glow Shop</h3>
            </div>
            <div class="hamburger" id="hamburger">
                <img src="../../icons/hamburger.png" alt="Hamburger">
            </div>
            <div class="nav-list" id="navList">
                <div class="close" id="close">
                    <img src="../../icons/close.png" alt="Close">
                </div>
                <ul class="">
                    <li><a href="./profile.html">Profile</a></li>
                    <li><a href="#" id="btnNotif">Notifikasi</a></li>
                    <li><a href="../../page/payment/whislist.html">Wishlist</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                    <li><a href="./bantuan.html">Bantuan</a></li>
                    <li><a href="/">Log Out</a></li>
                </ul>
            </div>
        </nav>
        <div class="notifikasi" id="notifikasi">
            <div class="list">
                <h1>Pesanan</h1>
                <div class="wrap">
                    <a href="">
                        <div class="notif">
                            <img src="../../images/Produk 3.png" alt="produk">
                            <div class="text-notif">
                                <h2>Berikan Penilaian Untuk Pesanan</h2>
                                <p>Pesanan Serum D’Glow sudah selesai. Nilai pesanan untuk membantu kami meningkatkan
                                    kualitas D’Glow. Terima Kasih</p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="notif">
                            <img src="../../images/Produk 4.png" alt="produk">
                            <div class="text-notif">
                                <h2>Pesanan Dibatalkan</h2>
                                <p>Mohon maaf atas ketidaknyamanannya. Pesanan Toner D’Glow dibatalkan karena sudah
                                    melewati
                                    batas pembayaran.</p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="notif">
                            <img src="../../images/Produk 2.png" alt="produk">
                            <div class="text-notif">
                                <h2>Jangan Lupa Membayar</h2>
                                <p>Batas pembayaran pesanan Serum D’Glow sampai dengan 1 November 2021. Jangan sampai
                                    telat
                                    membayar.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="list">
                <h1>Untuk Kamu</h1>
                <div class="wrap">
                    <a href="">
                        <div class="notif">
                            <img src="../../images/Produk 3.png" alt="produk">
                            <div class="text-notif">
                                <h2>Ada Voucher Untuk Kamu!</h2>
                                <p>Cashbak 50% pada pembelian Toner D’Glow dengan metode pembayaran via Ovo! Jangan
                                    sampai
                                    kehabisan.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="contact">
            <div class="search">
                <button><img src="../../icons/search.svg" alt="Search"></button>
                <input type="text" placeholder="Cari Produk">
            </div>
            <div class="box">
                <select>
                    <option selected disabled="Urutkan berdasarkan" value="Urutkan berdasarkan">Urutkan
                        berdasarkan
                    </option>
                    <option value="All">All</option>
                    <option value="Harga terendah">Harga terendah</option>
                    <option value="Harga tertinggi">Harga tertinggi</option>
                    <option value="Terdekat">Terdekat</option>
                </select>
            </div>
        </div>
        <div class="allbanner">
            <img src="../../images/banner1.png">
            <img src="../../images/banner2.png">
        </div>
        <div class="list-produk">
            <?php foreach($products as $product) : ?>
                <div class="product">
                    <a href="">
                        <img src="../../images/<?= $product['image'] ?>" alt="lotion" class="image">
                        <div class="text">
                            <p><?= $product['name'] ?></p>
                            <h1>Rp. <?= $product['price'] ?></h1>
                            <p>Cabang <?= $product['branch'] ?></p>
                            <span><img src="../../icons/star.png" alt="">| Terjual <?= $product['sold'] ?></span>
                        </div>
                    </a>
                </div>
            <?php endforeach?>
        </div>
        
        <!-- Information  -->
        <section class="information">
            <div class="wrapper">
                <div class="logo">
                    <img src="../../images/logo.png" alt="Logo">
                    <h3>D'Glow Shop</h3>
                </div>
                <div class="wrapper-inner">
                    <div class="pages">
                        <a href="../user/profile.html">Profile</a>
                        <a href="../payment/Whislist.html">Whislist</a>
                        <a href="../user/bantuan.html">Bantuan</a>
                    </div>
                    <div class="social-media">
                        <span>
                            <a href=""><img src="../../icons/instagram.svg" alt="instagram"> Instagram</a>
                        </span>
                        <span>
                            <a href=""><img src="../../icons/facebook.svg" alt="facebook"> Facebook</a>
                        </span>
                        <span>
                            <a href="">
                                <img src="../../icons/twitter.svg" alt="twitter"> Twitter
                            </a>
                        </span>
                    </div>
                    <div class="location">
                        <img src="../../icons/map.svg" alt="Map">
                        <p>Jl. Prof. DR. G.A. Siwabessy, Depok Campus, Kecamatan Beji, Kota Depok, Jawa Barat 16425</p>
                    </div>
                </div>
                <div class="maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1809250251677!2d106.82143961452164!3d-6.370627364090613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec1cabb59bdf%3A0x28b4f84e4677f329!2sPoliteknik%20Negeri%20Jakarta!5e0!3m2!1sid!2sid!4v1636022075910!5m2!1sid!2sid"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>Copyright © D’Glow Shop 2021 </p>
    </footer>

    <script src="../../js/app.js"></script>
</body>

</html>