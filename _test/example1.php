<?php
	
	require ('../config/config.global.php');

	#example
	/** Define ABSPATH as this file's directory */
	define( 'ABSPATH', dirname(__FILE__) . '/' );

	#now folder
 	echo "wp constant : ".ABSPATH;	
 	#base folder				
 	echo "<br>my constant : ".LOCAL_PATH_ROOT;	
