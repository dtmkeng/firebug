$(document).ready(function() {
	$("#login_submit").click(function() { 
		//$("#loading_submit").show();
		var name = $("#username").val();
		var password = $("#password").val();
        // alert(name);
        $.post("System/user/login.check.php", {
        	name: name,
        	pass: password,function(){
                $("#loading_submit").show();
            }
        }, function(data) {
            //success
        }).done(function(data) {
        	//$("#loading_submit").hide();
        	var objData = jQuery.parseJSON(data);
        	if (objData.status == 0) {
            //    $("#alert_massage_login").show();
                $('#alert_close_login').closest('.message').transition('fade');
                console.log(objData.message);
                $("#loading_submit").hide();
            } else {
                $("#loading_submit").hide(); //console.log('login complate');
                $(location).attr('href','index.php');
                // if can login
            }
        });
    });
    $('#alert_close_login').on('click', function() {
        $(this).closest('.message').transition('fade');
    });
});