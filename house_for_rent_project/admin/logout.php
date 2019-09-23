<?php
	ob_start();
	if(!session_id())
		session_start();
	session_destroy();

	header("location: /");

?>