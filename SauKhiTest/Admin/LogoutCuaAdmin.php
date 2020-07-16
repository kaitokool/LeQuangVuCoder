<?php

	session_start();
	session_destroy();

	echo "<script>window.open('./LoginCuaAdmin.php', '_self')</script>";

?>