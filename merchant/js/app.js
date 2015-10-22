
$('#payment-opt').change(function(){
var cardoption = $('#payment-opt :selected').attr("id");
if(cardoption=='default_button'){
$('#button_pay').show();
$('#button-img-div').empty();	
$('#button-img-div').append('<img class="img-responsive" src="images/default.png"/>');
}else if(cardoption=='orange_button'){
$('#button_pay').show();
$('#button-img-div').empty();	
$('#button-img-div').append('<img class="img-responsive" src="images/orange.png"/>');
}else if (cardoption=='white_button'){
$('#button_pay').show();
$('#button-img-div').empty();	
$('#button-img-div').append('<img class="img-responsive" src="images/white.png"/>');
}else if (cardoption=='dark_button'){
$('#button_pay').show();
$('#button-img-div').empty();	
$('#button-img-div').append('<img class="img-responsive" src="images/dark.png"/>');

}
else{
$('#button_pay').hide();
$('#button-img-div').empty();	
}
 });