//index page ===================
// ads

var divs = $("div.ad").get().sort(function(){ 
  return Math.round(Math.random())-0.5; //random so we get the right +/- combo
}).slice(0,1)
$(divs).show();



// Print Page =================

	//fades
 	$(function(){  // $(document).ready shorthand
	  $('.pt').hide().delay(1000).fadeIn(2000).delay(100).fadeOut(9000);// fade in periodic table
	  $('.meth').hide().fadeIn(2000).fadeOut(18000);// fade in periodic table
	  $('.element').hide().delay(1000).fadeIn(1000);// fade in the name
	  $('.no-element').hide().fadeIn(20000); // fade in the none elements
	}); 

	
	// zooms 
	$(function(){ // $(document).ready shorthand
	
	$('#print-box img').animate({
		width:'80px',
	    height:'auto',},
	    9000);

	$('.pt img').delay(1000).animate({
			width:'1000px',
		    height:'auto',
		},
	    9000);

	$('.meth img').animate({
		width:'900px',
	    height:'auto',},
	    9000);

	});


