$(document).ready(function() {
	var error_ver = 0;
	$('#username_regist').keyup(function(){
		console.log($('#username_regist').val());
	});
	/*if ($('#username_regist').val()==null) {
		return false;
	}*/
	$('#email_regist').focusout(function(){
		console.log(isEmail($('#email_regist').val()));
	});
	$('#password-re-regist').focusout(function(){
		if($('#password-regist').val()!=$('#password-re-regist').val()){
			$('#alert_close').closest('.message').transition('shake');
			$("#message_alert").text("Password Not Match");
			error_ver = 1;
			console.log("error");
		}else if($("#password-regist").val()==$("#password-re-regist").val()){
			$('#alert_close').closest('.message').transition('vertical flip');
		}
	});
	$('#password-regist').focusout(function(){
		if($('#password-regist').val()!=$('#password-re-regist').val() && $('#password-re-regist').val() != ''){
			$('#alert_close').closest('.message').transition('shake');
			$('#message_alert').text("Password Not Match");
		}else if( $('#password-regist').val()==$('#password-re-regist').val() ){
			$('#alert_close').transition('vertical flip');
		}
	});
	$('#alert_close').on('click', function() {
		$(this).closest('.message').transition('fade');
	});
	////////////////////////////////submlit/////////////////////////////////
	$("#regist_submit").click(function(){ 
		var response = grecaptcha.getResponse();
		if(response.length == 0)
			console.log("not verity");
		else
			console.log("ok verity");
	});
});
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}