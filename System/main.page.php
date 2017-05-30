<?php

?>
<div class="ui blue secondary pointing menu">
	<a class="item">
		Home
	</a>
	<a class="item">
		Things
	</a>
	<a class="item">
		Firebase set
	</a>
	<div class="right menu">
		<a class="item">
			Settings
		</a>
		<a class="ui item active" href='?command=logout'>
			Logout
		</a>
	</div>
</div>
<div class="ui segment">
	<?php
	if(isset($_GET['command'])){
		if($_GET['command']=='logout')
			include_once("System/user/logout.php");
	}
	include_once("firebase.manage.page.php");
	?>
</div>