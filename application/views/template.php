<?php
	$path = './application/views/';
	if(is_array($pages))
	{
		for($i=0; $i<sizeof($pages) ;$i++)
			include($path . $pages[$i] . '.php');
	}
	else
		include($path . $pages . '.php'); 

?>