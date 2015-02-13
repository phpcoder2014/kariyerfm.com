$(function(){
	$.ajaxLoad = function(){
		var lastid = $("ul li:first").attr("id");
		$.ajax({
			type: "post",
			url: "ajax.php",
			data: {"lastid":lastid},
			dataType: "json",
			success: function(cevap){
				if (cevap.hata){
					$("#sonuc").html(cevap.hata);
				} else {
					$("ul").prepend(cevap.veriler);
				}
			}
		});
	}
	
	setInterval('$.ajaxLoad()', 5000);

});