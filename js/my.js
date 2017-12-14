// JavaScript Document
$(".vertical a").hide();

$(".vertical").mouseenter(function(){
	$(".vertical-bg").css({"width":"160px"});
	$(".vertical a").stop();
	$(".vertical a").fadeIn(500);
});
$(".vertical").mouseleave(function(){
	$(".vertical-bg").css({"width":"40px"});
	$(".vertical a").stop();
	$(".vertical a").fadeOut(100);
});

$(document).on('scroll', function() {
    if($(this).scrollTop() >= $('#anlass').position().top - 300 && $(this).scrollTop() <= $('#geschichte').position().top - 300){
		$(".gold").css({"margin-top":"50px"});
    }
	
	else if ($(this).scrollTop() >= $('#geschichte').position().top - 350 && $(this).scrollTop() <= $('#sponsor').position().top - 350){
		$(".gold").css({"margin-top":"95px"});
    }
	
	else if ($(this).scrollTop() >= $('#sponsor').position().top - 350){
		$(".gold").css({"margin-top":"140px"});
    }
	
	else if ($(this).scrollTop() >= $('#top').position().top - 150){
		$(".gold").css({"margin-top":"5px"});
    }
	
	else{
		
	}
});

$(document).on('scroll', function() {
	var marginnumber = $(".gold").css("margin-top").replace(/[^0-9]/g,"");
	if (marginnumber == "50" || marginnumber == "5" || marginnumber == "95"){
		$(".gold").removeClass("rain");
	}
	else {
		$(".gold").addClass("rain");
	}
});

$(document).on('scroll', function() {
    if($(this).scrollTop() >= $('#countup').position().top - 600){
		$('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },
  {
    duration: 2000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    	}
  		});  
		});
	}
	else if ($(this).scrollTop() >= 50 ) {
		$(".wrap-me").addClass("wrap-logo-small");
	}
	else if ($(this).scrollTop() <= 40 ) {
		$(".wrap-me").removeClass("wrap-logo-small");
	}
});

$("#days")
  .countdown("2018/02/24", function(event) {
    $(this).text(
      event.strftime('%D')
    );
  });
  $("#hours")
  .countdown("2018/02/24", function(event) {
    $(this).text(
      event.strftime('%H')
    );
  });
  $("#min")
  .countdown("2018/02/24", function(event) {
    $(this).text(
      event.strftime('%M')
    );
  });
  $("#sec")
  .countdown("2018/02/24", function(event) {
    $(this).text(
      event.strftime('%S')
    );
  });

// Get the modal
var modal = document.getElementById('myModal');
var modalB = document.getElementById('myModalB');


// Get the button that opens the modal
var btn = document.getElementById("modalBtn");
var btnB = document.getElementById("modalBtnB");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var spanB = document.getElementsByClassName("closeB")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
btnB.onclick = function() {
    modalB.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$("#danke").click(function(){
		alert ("Ihre Nachricht wurde erfolgreich gesendet. Danke!");
	}); 