<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        h1{
            color:orange;
        }
    </style>

</head>
<body>
<header>
    <div class="container">
        <h1>Teknoloji dünyası</h1>
        <nav class="navbar navbar-expand bg-dark">
            <div class="container-fluid">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="urunler.php">Ürünler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="iletisim.php">iletişim</a>
                    </li>
                </ul>
            </div>
        </nav>


    </div>



</header>
<div class="container">
    <h2 style="text-align: center">Ürünler</h2>
    <?php
    $urunler = [
        ["isim" => "Laptop", "fiyat" => 5000, "aciklama" => "Yüksek performanslı laptop", "foto" => "laptop.jpg"],
        ["isim" => "Telefon", "fiyat" => 3000, "aciklama" => "Akıllı telefon", "foto" => "telefon.jpg"],
        ["isim" => "Tablet", "fiyat" => 2000, "aciklama" => "Portatif tablet", "foto" => "tablet.jpg"],
        ["isim" => "Monitör", "fiyat" => 1500, "aciklama" => "4K monitör", "foto" => "monitor.jpg"],
        ["isim" => "Klavye", "fiyat" => 200, "aciklama" => "Mekanik klavye", "foto" => "klavye.jpg"],
        ["isim" => "Mouse", "fiyat" => 100, "aciklama" => "Kablosuz mouse", "foto" => "mouse.jpg"],
        ["isim" => "Yazıcı", "fiyat" => 700, "aciklama" => "Renkli yazıcı", "foto" => "yazici.jpg"],
        ["isim" => "Hoparlör", "fiyat" => 250, "aciklama" => "Bluetooth hoparlör", "foto" => "hoparlor.jpg"],
        ["isim" => "Kulaklık", "fiyat" => 150, "aciklama" => "Gürültü önleyici kulaklık", "foto" => "kulaklik.jpg"],
        ["isim" => "Webcam", "fiyat" => 300, "aciklama" => "HD webcam", "foto" => "webcam.jpg"],
        ["isim" => "Mikrofon", "fiyat" => 400, "aciklama" => "Stüdyo mikrofonu", "foto" => "mikrofon.jpg"],
        ["isim" => "SSD", "fiyat" => 600, "aciklama" => "1TB SSD", "foto" => "ssd.jpg"],
        ["isim" => "HDD", "fiyat" => 300, "aciklama" => "2TB HDD", "foto" => "hdd.jpg"],
        ["isim" => "Router", "fiyat" => 350, "aciklama" => "Kablosuz router", "foto" => "router.jpg"],
        ["isim" => "RAM", "fiyat" => 500, "aciklama" => "16GB RAM", "foto" => "ram.jpg"],
        ["isim" => "GPU", "fiyat" => 4000, "aciklama" => "Oyun için grafik kartı", "foto" => "gpu.jpg"]
    ];
    $kartSayisi = 0;
    foreach ($urunler as $value) {
        if ($kartSayisi % 4 == 0) {/* bı satırda 4 kart  olmasını sağladık */
            if ($kartSayisi != 0) {
                echo "</div>";/* burada 4 kart olduktan sonra onceki  kartın alt satıra geçmek içn div'i kapatıyor*/
            }
            echo "<div class='row mt-4'>";
        }
        echo "<div class='col-3 ml-2'>
                    <div class='card rounded-0 ' style='width: 16rem;'>
                        <img src='{$value['foto']}' class='card-img-top rounded-0'   alt='{$value['isim']}'>
                          <div class='card-body rounded-0 bg-body-secondary'>
                                <h5 class='card-title rounded-0 '>{$value['isim']}</h5>
                                <p class='card-text '>{$value['aciklama']}</p>
                                <p class='card-text'>Fiyat: {$value['fiyat']} TL</p>
                                
                                <div class='d-grid'>
                                    <a href='#' class='btn btn-block rounded-1' style='background: orangered'>Satın Al</a>
                                
                                </div>
                            
                          </div>
                    </div>
              </div>";
        $kartSayisi++;/*sayacı artırıyoruz */
    }
    if ($kartSayisi % 4 != 0) {
        echo "</div>";/*açık satır olursa (son satır 3 ürün olması gibi)onu kapatıyor */
    }
    ?>

</div>

<footer>


</footer>


</body>
</html>