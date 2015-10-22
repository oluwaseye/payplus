function preloader() {
	if (document.images) {
		var img1 = new Image();
		var img2 = new Image();
		var img3 = new Image();

		img1.src = "assets/images/verve.png";
		img2.src = "assets/images/mastercard.png";
		img3.src = "assets/images/visa.png";
		img3.src = "assets/images/logo.png";
	}
}
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);

$('#card-opt').change(function(){
var cardoption = $('#card-opt :selected').attr("id");
if(cardoption=='verve'){
$('#cardname').empty();	
$('#cardname').append('Verve Interswitch');	
$('#selected_pay').show();
$('#card-img-div').empty();	
$('#card-img-div').append('<img class="img-responsive pull-right" id="gateway-img" src="assets/images/verve.png"/>');
}else if(cardoption=='visa'){
$('#cardname').empty();	
$('#cardname').append('Visa Naira Card');	
$('#selected_pay').show();
$('#card-img-div').empty();	
$('#card-img-div').append('<img class="img-responsive pull-right" id="gateway-img" src="assets/images/visa.png"/>');
}else if (cardoption=='mastercard'){
$('#cardname').empty();	
$('#cardname').append('Naira Mastercard');	
$('#selected_pay').show();
$('#card-img-div').empty();	
$('#card-img-div').append('<img class="img-responsive pull-right" id="gateway-img" src="assets/images/mastercard.png"/>');
}else{
$('#cardname').empty();	
$('#selected_pay').hide();
$('#card-img-div').empty();	
}
 });