<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FUNCTİONS PHP</title>
</head>
<body>

<?php 

/**
 * functions.php
 *
 * Direk olarak çalıştırılmasını istemediğimiz betik dosyasıdır.
 * Bu dosya başka bir yerde dahil edilmediyse çalıştırılmasını engellemek istiyoruz.
 * Örneğin, `http://localhost/functions.php` adresiyle ziyaret etmek istediğimizde,
 * bir hata mesajı verip betiğin sonlanmasını istiyoruz.
 *
 * > Betiği herhangi bir yerde sonlandırmak için `exit`
 * > (https://www.php.net/manual/en/function.exit.php) veya `die` kullanabilirsiniz.
 *
 * Bu dosyada tanımlanan fonksiyonları diğer iki betik dosyasında kullanmanızı
 * istiyoruz. Ek olarak, `getRandomPostCount` isminde bir fonksiyon tanımlamanızı
 * bekliyoruz. Bununla ilgili detaylı bilgi diğer betiklerde yer alıyor.
 */




 //basename() işlevi, bir yoldan dosya adını döndürür. Dosyanın uzantısını değişkene atıyoruz
$file = basename(__FILE__); 
$server = basename($_SERVER['PHP_SELF']);

if($server == $file) { // functions.php dosyasina direkt erisimi engellemek icin
   
   // die fonksiyonu, exit fonksiyonuna benzer bir biçimde bir mesaj (çıktı) verdikten sonra programı (uygulamayı) sonlandırmak amacıyla kullanılır.
    die ("Bu dosyaya direkt erişilemez");   
}else {} // Eger iki dosyanin isimleri esit degil ise asagidaki kodlari calistirir

function getLatestPosts($count = 5)
{
    $posts = [];
    $postTypes = ["urgent", "warning", "normal"];

    for($i=1; $i<=$count; $i++) {
        do {
            $id = rand(1, 1000);
        } while (array_key_exists($id, $posts));

        $type = $postTypes[rand(0, count($postTypes)-1)];

        $posts[$id] = [
            "title" => "Başlık " . $i,
            "type" => $type
        ];
    }

    return $posts;
}


/*
$degisken = <<<EOT
    bu metin içersinde tek 'tırnak' veya "çift" tırnak kullanmakta
    sakınca yoktur hatta değişkenler $isim ve nesneler $nesne->degisken
    kullanılabilir. son satır haricinde EOT kelimesi bile kullanılır.  
EOT;
*/

function getPostDetails($id, $title)
{
    echo "<h1>".$title." (#".$id.")</h1>";
    echo <<<EOT
<p>
    Merhabalar ben Bahadır Eray, İstanbul'da yaşıyorum. Düzce üniversitesi Bilgisayar mühendisliği mezunuyum. En son karantina sıkıntısında annemle birlikte sosyal medyada yemek video içerikleri üretirken kendimi buldum. Bu durum farklı alanlarda uğraşlar verirken zamanı verimli geçirmemi sağladı. Bilgisayar oyunlarına karşı çok büyük ilgim yok ama en son ne yaptım dersek bir kaç araba yarışıyla vakit geçirdim diyebilirim. Benim için yazılım dünyasında bir içerik ortaya çıkartmak çok farklı bir mutluluktur. Bu mutluluğu her zaman daim olmasını sağlayacağım. Bundan çok çok uzun yıllarda bir bilim insanı olarak kariyerime devam etmek istiyorum.
</p>
EOT;
}	


function getRandomPostCount($min,$max){  //Random değerler üreten bir fonksiyon
    return rand($min,$max);
}
 ?>
</body>
</html>