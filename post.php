<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POST PHP</title>
</head>
<body>
	<?php
/*

 adresini ziyaret ettiğinizde herhangi bir hata veya uyarı mesajı vermeden sizin tanımladığınız değerlerle yazı başlığı, numarası ve içeriği gelmeli.
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */


 
 require_once 'functions.php';
 /*
 	*require  fonksiyonunu iki kez çağırdığımızda iki kez aynı dosyayı getirirken 
 	*require_once fonksiyonu include_once fonksiyonundaki gibi kaç kez çağırırsak çağıralım dosyayı 1 kez getirir.
    *include ve require fonksiyonları arasındaki temel fark ise include foksiyonlarında parametre olarak verdiğimiz dosya yolu bulunamazsa warning hatası verip çalışmaya devam ederken
    *require fonksiyonlarında dosya yolu bulunamaz ise fatal error verir ve çalışma durdurulur.
    */



// $id değişkeninin içeriğine bakmaksızın varlığını kontrol eder. Eğer $id değişkeni var ise True değeri döndürür bu sayede if yapısı 1 değerini alarak koşula girer. Eğer $id değişkenini tanımlamasaydık False değerini döndürerek else kısmına girecekti.
 	if(!isset($id))  
 	{
 		$id=1;
 	}



//$title değişkeni boş gelirse ilgili değer dolgusu yapılacak
 	if(!isset($value["title"]))
 	{
 		$title="DENEME BAŞLIK";
 	}
 	else
 	{
 		$title=$value["title"];
 	}



//$type değişkenimize bir değer tanımlaması
 	if(!isset($value["type"]))
 	{
 		$type="normal";
 	}
 	else
 	{
 		$type=$value["type"];
 	}


//$type değerine göre renk kararı veren döngü
 	if($type=="warning")
 	{
 		$bgcolor="background-color:yellow;";
 	}
 	elseif($type=="urgent")
 	{
 		$bgcolor="background-color:red;";
 	}
 	elseif($type=="normal")
 	{
 		$bgcolor="background-color:default;";
 	}



// getPostDetails fonksiyonu ile içeriğin ekrana bastırılması
 	echo "<div style='".$bgcolor. "'>";
 	getPostDetails($id,$title);
 	echo "</div>";
 	?>
 </body>
 </html>