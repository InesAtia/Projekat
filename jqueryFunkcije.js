//efekti na galeriji 
$(document).ready(function(){
				 $(".galerija-slika").mouseenter(function(){
    			var src = $(this).attr('src');
    			$(".glavna").attr("src", src);

    		});
			});
     			


