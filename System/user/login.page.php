<script type="text/javascript">   
	$(document).ready(function() {
		$("#register_tap").click(function(){
			$("#register_form").show();
			$("#login_form").hide();
			$("#register_tap").addClass("active");
			$("#login_tap").removeClass("active");
		});
		$("#login_tap").click(function(){
			$("#register_form").hide();
			$("#login_form").show();
			$("#login_tap").addClass("active");
			$("#register_tap").removeClass("active");
		});

	});
</script>
<div class="ui column stackable center page grid">
	<div class="four wide column">

	</div>
	<div class="ui six wide column form segment">
		<div class="ui tabular menu">
			<a class="item active" id="login_tap">Login</a>
			<a class="item" id="register_tap">Register</a>
		</div>
		<div id="login_form">
			<div class="ui dividing header ">Login</div>
			<form  action="#" method="post" >

				<div class="field">
					<label>Username:</label>
					<input type="text" name="username" id="username"  placeholder="Username">
				</div>
				<div class="field">
					<label>Password:</label>
					<input type="password" name="password" id="password" placeholder="Password">
				</div>
				<div class="ui orange message" style="display: none" id="alert_massage_login">
					<i class="close icon" id="alert_close_login"></i>
					<div class="header" >
						Error!!!!!!!!
					</div>
					<p id="message_alert"></p>
				</div>
				<div  align="center">
					<div class="ui active dimmer" style="display: none" id="loading_submit">
						<div class="ui text loader">Please wait....</div>

					</div><hr class="ui dividing header">
					<button class="ui inverted green button" id="login_submit" type="button">Sign In</button>
					<button class="ui inverted red button" type="reset">Clear</button>

				</div>
			</form>
		</div>
		<div id="register_form" style="display: none">
			<div class="ui dividing header">Register</div>
			<form  action="#" method="post" >
				<div class="field">
					<label>Username:</label>
					<input type="text" name="username" id="username_regist"  placeholder="Username"/>
				</div>
				<div class="field">
					<label>Email:</label>
					<input id="email_regist" type="text" name="email" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,}" required placeholder="Enter you Email">

				</div>
				<div class="field">
					<label>Password:</label>
					<input type="password" name="password" id="password-regist" placeholder="Password"/>
				</div>
				<div class="field">
					<label>Re-Password:</label>
					<input type="password" name="password" id="password-re-regist" placeholder="re-Password"/>
				</div>
				<div class="ui orange message" style="display: none" id="alert_massage">
					<i class="close icon" id="alert_close"></i>
					<div class="header" >
						Error!!!!!!!!
					</div>
					<p id="message_alert"></p>
				</div>
				<div  align="center">
					<div class="g-recaptcha" data-sitekey="6LdVNSMUAAAAADkgATPbND7tBwn1c7vO5vKIW6sO"></div>
					<hr class="ui dividing header">
					<button class="ui inverted green button" id="regist_submit" type="button">Sign up</button>
					<button class="ui inverted red button" type="reset">Clear</button>
					<script type="text/javascript" src="jsController/verifyRegisterForm.js">
						
					</script>
				</div>
			</form>
		</div>
	</div>

</div>
<script type="text/javascript" src="JsController/login.js">
</script>
