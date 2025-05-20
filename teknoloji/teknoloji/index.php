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
        <h2>Hoşgeldiniz</h2>
        <p>En İyi Bilgisayar Ürünlerini Keşfedin!</p>
        <p>Bilgisayar ihtiyaçlarınızı en kaliteli ve uygun fiyatlı ürünlerle karşılamak için buradayız. Yüksek performanslı laptoplardan, modern ve ergonomik klavyelere kadar geniş bir ürün yelpazesi sunuyoruz. İster profesyonel bir oyuncu, ister evde çalışan bir profesyonel olun, her türlü ihtiyacınıza uygun çözümlerle karşınızdayız.
        </p>
        <img src="anasayfa.jpg" width="100%">

    </div>


</header>
<main>
    <div class="container">
        <h2>Neden Bizi Seçmelisiniz?</h2>
        <ul>
            <li><b>Geniş Ürün Yelpazesi:</b> Laptoplar, tabletler, telefonlar, monitörler, klavyeler, mouse'lar, yazıcılar, hoparlörler, kulaklıklar, webcamler, mikrofonlar, SSD ve HDD'ler, RAM ve grafik kartları dahil olmak üzere her türlü bilgisayar donanımını bulabilirsiniz.</li>
            <li><b>Uygun Fiyatlar:</b> Yüksek kaliteyi en uygun fiyatlarla sunuyoruz. Düzenli olarak yaptığımız kampanyalar ve indirimlerle müşterilerimize avantajlar sağlıyoruz.</li>
            <li><b>Güvenli Alışveriş:</b> Güvenli ödeme yöntemleri ve müşteri gizliliğine verdiğimiz önemle alışverişlerinizi gönül rahatlığıyla yapabilirsiniz.</li>
            <li><b>Hızlı Kargo: </b> Siparişlerinizi en kısa sürede adresinize ulaştırmak için hızlı ve güvenilir kargo hizmetleri sunuyoruz.</li>
            <li> <b>Müşteri Memnuniyeti:</b> Her zaman müşteri memnuniyetini ön planda tutarak, satış öncesi ve sonrası destek hizmetleri ile yanınızdayız.</li>
        </ul>
        <h2>Öne Çıkan Ürünlerimiz</h2>
        <?php
        $urun_kategorileri = [
            "Yüksek Performanslı Laptoplar",
            "Akıllı Telefonlar",
            "Portatif Tabletler",
            "4K Monitörler",
            "Mekanik Klavyeler",
            "Kablosuz Mouse'lar",
            "Renkli Yazıcılar",
            "Bluetooth Hoparlörler",
            "Gürültü Önleyici Kulaklıklar",
            "HD Webcamler",
            "Stüdyo Mikrofonları",
            "1TB SSD ve 2TB HDD'ler",
            "Kablosuz Routerlar",
            "16GB RAM Modülleri",
            "Oyun için Grafik Kartları"
        ];
        echo" <ul>";
        foreach ($urun_kategorileri as $deg){
            echo"<li>$deg</li>";
        }
        echo"</ul>";
        ?>
        <div>Siz de hemen alışverişe başlayın ve ihtiyaçlarınıza uygun ürünleri en avantajlı fiyatlarla satın alın!</div>



    </div>



</main>

<footer>
    <div class="container " style="background: lightgray; margin-top: 10px">
        <div style="padding: 25px"> ©2024 Her hakkı Hacı Mustafa Sanlav'a aittir.</div>
    </div>

</footer>


</body>
</html>