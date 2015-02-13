$('#gonder').click(function(){//göndere tıklanma olayı
/* burdan sonrası göndere bastıktan yapılacak işlemler*/
var isim_degiskeni = $('#mesaj').val();//isim alanına yazılan veriyi bir değişkene aldık
var post_edilecek_veriler = 'mesaj='+isim_degiskeni; //post edilmeye hazır hale getirdik. yani verileri bir değişkene atadık.
$.ajax({ // ajax işlemi başlar
type:'POST', // veri gönderme tipimiz. get olabilirdi json olabilirdi. ama biz post kullanıyoruz
url:'ajaxPost.php', // post edilecek adres
data:post_edilecek_veriler, //post edilecek veriler
success:function(cevap){// işlem başarılıysa
alert("istek gönderildi"); //sonuc id'sine ajaxPost.php den dönen verileri basıyoruz.
$('#mesaj').val("");
}
});
});