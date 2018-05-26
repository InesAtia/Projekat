//efekti na galeriji (Ines L.)

$(document).ready(function(){
				 $(".galerija-slika").mouseenter(function(){
    			var src = $(this).attr('src');
    			$(".glavna").attr("src", src);

    		});
     			


//sakrivanje forme nakon submit-a (Jana C.)

$('#dugme').click(function(){
     $('#kontaktiranje').hide();
   });

$('#dugme2').click(function(){
     $('#kontaktiranje2').hide();
   });


});


