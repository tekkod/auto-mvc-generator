$(document).ready(function() {
	$('.alert').hide();
	$('#next').click(function(){
		var project = $('#project').val();
		if (project=="") {
			alert("Proje Yolu Boş Geçilemez");
		} else {
			$('#contname').slideDown("slow")
			$('#generate').click(function(){
				var generate = $('#controllername').val().trim();
				if (generate=="" || generate=="Controller" || generate=="Model" || generate=="View") {
					alert("Controller Adı Boş veya Controller, Model ve View Kelimeri İçeremez Geçilemez");
				} else {
					$.ajax({
					    url : "generate.php",
					    type: "POST",
					    data: {generate: generate},
					    success: function(donenVeri){
					    	if (donenVeri==1) {
						    	$('.alert').slideDown('slow').delay(2000).slideUp('slow')
					    	};
					    }
					});
				}
			})
		}
	})
});