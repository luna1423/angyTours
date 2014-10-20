<?php

	session_start(); //antes de matar una session hay que rescatarla
	session_destroy();//matamos la session
	
	echo '<script>window.location="../index.html"</script>';
?>