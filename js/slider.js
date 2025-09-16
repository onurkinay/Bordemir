 $(document).ready( function() {  // Sayfam�z haz�r oldu�u zaman a�a��daki kodlar�n uygulanaca��n� s�yl�yoruz.
var i = 0;  // Hangi sayfada/slaytta [0, 1, 2, 3, 4] oldu�umuzu atayaca��m�z de�i�ken.
var sayi = $('#slider div').length - 1;
$("#sayfalama a").eq(i).addClass("tik");  
var tumgenislik = 0;  // Bu de�i�kende ka��nc� sayfada/slaytta ise o ve ondan �nceki slaytlar�n geni�liklerinin toplam� yer alacak. Ba�lang�� de�eri olarak 0 at�yoruz.
var genislik = $('#slider div').width();  // Ola ki slider '�n geni�li�ini de�i�tirmek istersek hem css hem .js dosyam�zda de�i�iklik yapmamak i�in '#slider div' etiketinin geni�li�ini bu de�i�kene at�yoruz.
function animasyon(px){  // Slider '�m�z�n ge�i� animasyonu i�in animasyon ad�nda fonksiyon olu�turuyoruz.
$('#slider').stop(false, false).animate({  // #slider 'a animasyon tan�ml�yoruz. Slider 'da g�rd���m�z sayfalar�n hepsi #slider '�n i�inde bulunmakta.
left: -px  // Fonksiyona girilen px de�i�keni kadar sola kaymas�n� sa�l�yoruz.
},300);  // Buradaki de�er animasyonun ger�ekle�ece�i milisaniyeyi belirtiyor.
}
 
 $('#sayfalama a').click(function(){ // #slider '�n sol alt k��esinde belirledi�imiz 5 adet linke t�klan�nca yap�lacak i�lem i�in fonksiyon olu�turuyoruz.
var index = $(this).index();  // Linke t�klan�nca ka��nc� link oldu�unu index() ile al�yoruz. �lk link 1 de�il 0 de�erini vermektedir.
$("#sayfalama a").removeClass("tik");
$(this).addClass("tik");

pozisyon = index * genislik;  // #slider '�m�z� ne kadar sola kayd�raca��m�z� belirten de�i�ken. �rne�in ikinci linke t�klay�nca 1*500 de�erini alacakt�r.
animasyon(pozisyon);  // Bir �nceki sat�rda belirledi�imiz pozisyon de�i�keni kadar #slider '�m�z�n sola gitmesi i�in gerekli fonksiyonu �al��t�r�yoruz.
if(index == sayi){  // #slider�m�z son sayfaya/slayta geldi�inde sayfalar�m�z bitmi� olaca�� i�in #slider '� en ba�a g�t�rmemize yar�yan �art c�mleci�i.
i = 0;  // �art c�mledi�imiz true d�nerse i de�i�kenine 0 de�erini atay�p #slider '�m�z� en ba�a g�t�r�yoruz.
}else{
i = index + 1;  // �art c�mleci�imiz false d�nerse i de�i�kenine bir sonraki sayfan�n ka��nc� sayfa oldu�unu belirtiyoruz.
}
return false;  // Fonksiyonunun daha i�lem yapmas�na gerek kalmad���n� belirtiyoruz.
 });
 
var zamanlayici = setInterval(function() {  // zamanlayici ad�nda bir zamanlay�c�/timer belirliyoruz.
tumgenislik = i * genislik;  // tumgenislik de�i�kenini 3. sat�rda a��klam��t�k. Hangi sayfada isek o ve ondan �nceki sayfalar�n/divlerin geni�liklerinin toplam�n� al�yor.
if(i==sayi){  // #slider '�m�z� son sayfaya geldi�ini kontrol eden �art c�mleci�i
i = -1;  // Normalde ilk sayfam�z i�in 0 de�eri verilmesi gerek. Fakat alt sat�rda animasyon fonksiyonu �al���p #slider sola do�ru kayaca�� i�in -1 de�erini veriyoruz.

}
$("#sayfalama a").removeClass("tik");
$("#sayfalama a").eq(i).addClass("tik");  
animasyon(tumgenislik);   // #slider '�m�z�n vakti gelince uygulayaca�� animasyon fonksiyonu. #slider '� tumgenislik de�i�keninin de�eri kadar sola kayd�r�yor.

i++;// Zamanlay�c� her �al��t���nda bir sonraki sayfaya/dive ge�mesi i�in i de�i�kenini her seferinde 1 artt�r�yoruz.

}, 8000);  // Buradaki de�er ise zamanlay�c�m�z�n ka� milisaniyede bir �al��mas� gerekti�ini belirtiyor.
});

