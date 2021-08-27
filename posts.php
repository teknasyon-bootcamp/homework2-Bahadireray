<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POSTS PHP</title>
</head>
<body>
	<?php 


/* localhost/posts.php adresini ziyaret ettiğinizde herhangi bir hata veya uyarı mesajı vermeden rastgele sayıda ve "random" arkaplanlarda yazı başlıkları, numaraları ve içerikleri listelenmeli.
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 */

include_once "functions.php"; // functions.php dosyasını okuması ve çalıştırması için gerekli komut.

$randomnumara = getRandomPostCount(1,150); // random değer aralığı min = 1 , max = 150 

$posts = getLatestPosts($randomnumara); // Oluşturulan Random sayıyı ilgili değere atama işlemi


foreach($posts as $id => $post){ // type türüne göre renk degisimi
    
    if($post['type'] == "urgent") {  //RED renk icin
    	
    	echo "<div style = 'background-color:red' >";
   
    }
    elseif($post['type'] == "warning"){ // YELLOW renk icin
    	
    	echo "<div style = 'background-color:yellow' >";
   
    }else{ //normal icin
    
    	echo "<div>";
    }
   
    getPostDetails($id, $post['title']); // post.php'den gelen başlık ve id değerleri
    echo "</div>";
}


?>
</body>
</html>