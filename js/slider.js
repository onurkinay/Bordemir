 $(document).ready( function() {  // Sayfamýz hazýr olduðu zaman aþaðýdaki kodlarýn uygulanacaðýný söylüyoruz.
var i = 0;  // Hangi sayfada/slaytta [0, 1, 2, 3, 4] olduðumuzu atayacaðýmýz deðiþken.
var sayi = $('#slider div').length - 1;
$("#sayfalama a").eq(i).addClass("tik");  
var tumgenislik = 0;  // Bu deðiþkende kaçýncý sayfada/slaytta ise o ve ondan önceki slaytlarýn geniþliklerinin toplamý yer alacak. Baþlangýç deðeri olarak 0 atýyoruz.
var genislik = $('#slider div').width();  // Ola ki slider 'ýn geniþliðini deðiþtirmek istersek hem css hem .js dosyamýzda deðiþiklik yapmamak için '#slider div' etiketinin geniþliðini bu deðiþkene atýyoruz.
function animasyon(px){  // Slider 'ýmýzýn geçiþ animasyonu için animasyon adýnda fonksiyon oluþturuyoruz.
$('#slider').stop(false, false).animate({  // #slider 'a animasyon tanýmlýyoruz. Slider 'da gördüðümüz sayfalarýn hepsi #slider 'ýn içinde bulunmakta.
left: -px  // Fonksiyona girilen px deðiþkeni kadar sola kaymasýný saðlýyoruz.
},300);  // Buradaki deðer animasyonun gerçekleþeceði milisaniyeyi belirtiyor.
}
 
 $('#sayfalama a').click(function(){ // #slider 'ýn sol alt köþesinde belirlediðimiz 5 adet linke týklanýnca yapýlacak iþlem için fonksiyon oluþturuyoruz.
var index = $(this).index();  // Linke týklanýnca kaçýncý link olduðunu index() ile alýyoruz. Ýlk link 1 deðil 0 deðerini vermektedir.
$("#sayfalama a").removeClass("tik");
$(this).addClass("tik");

pozisyon = index * genislik;  // #slider 'ýmýzý ne kadar sola kaydýracaðýmýzý belirten deðiþken. Örneðin ikinci linke týklayýnca 1*500 deðerini alacaktýr.
animasyon(pozisyon);  // Bir önceki satýrda belirlediðimiz pozisyon deðiþkeni kadar #slider 'ýmýzýn sola gitmesi için gerekli fonksiyonu çalýþtýrýyoruz.
if(index == sayi){  // #sliderýmýz son sayfaya/slayta geldiðinde sayfalarýmýz bitmiþ olacaðý için #slider 'ý en baþa götürmemize yarýyan þart cümleciði.
i = 0;  // Þart cümlediðimiz true dönerse i deðiþkenine 0 deðerini atayýp #slider 'ýmýzý en baþa götürüyoruz.
}else{
i = index + 1;  // Þart cümleciðimiz false dönerse i deðiþkenine bir sonraki sayfanýn kaçýncý sayfa olduðunu belirtiyoruz.
}
return false;  // Fonksiyonunun daha iþlem yapmasýna gerek kalmadýðýný belirtiyoruz.
 });
 
var zamanlayici = setInterval(function() {  // zamanlayici adýnda bir zamanlayýcý/timer belirliyoruz.
tumgenislik = i * genislik;  // tumgenislik deðiþkenini 3. satýrda açýklamýþtýk. Hangi sayfada isek o ve ondan önceki sayfalarýn/divlerin geniþliklerinin toplamýný alýyor.
if(i==sayi){  // #slider 'ýmýzý son sayfaya geldiðini kontrol eden þart cümleciði
i = -1;  // Normalde ilk sayfamýz için 0 deðeri verilmesi gerek. Fakat alt satýrda animasyon fonksiyonu çalýþýp #slider sola doðru kayacaðý için -1 deðerini veriyoruz.

}
$("#sayfalama a").removeClass("tik");
$("#sayfalama a").eq(i).addClass("tik");  
animasyon(tumgenislik);   // #slider 'ýmýzýn vakti gelince uygulayacaðý animasyon fonksiyonu. #slider 'ý tumgenislik deðiþkeninin deðeri kadar sola kaydýrýyor.

i++;// Zamanlayýcý her çalýþtýðýnda bir sonraki sayfaya/dive geçmesi için i deðiþkenini her seferinde 1 arttýrýyoruz.

}, 8000);  // Buradaki deðer ise zamanlayýcýmýzýn kaç milisaniyede bir çalýþmasý gerektiðini belirtiyor.
});

