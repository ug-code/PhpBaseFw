<?php
	
	// -----------------------------------------------------------------------
	// DEFINE SEPERATOR ALIASES
	// -----------------------------------------------------------------------

	define("URL_SEPARATOR" 			, '/');
	define("DS" 					, DIRECTORY_SEPARATOR);
	define("PS" 					, PATH_SEPARATOR);
	define("US" 					, URL_SEPARATOR);
	define ("DIR" 					, "dir");
	define ("URL" 					, "url");
	define("PATH_COMMON" 			, "common");
	define("PATH_ERROR" 			, "err");	
	define("PATH_ASSETS" 			, PATH_COMMON . US . "assets" . US);  # common/assets/
	define("PATH_IMAGES" 			, PATH_ASSETS . "img" . US);          # common/assets/img/ 
	define("PATH_STYLESHEET"		, PATH_COMMON . US . "css" . US);	  # common/assets/css/ 	
	define("PATH_JAVASCRIPT"		, PATH_COMMON . US . "js" . US);	  # common/assets/js/ 	
	define("PATH_LIBRARY" 			, PATH_COMMON . US . "lib" . US);	  # common/assets/lib/ 
	define("PATH_INCLUDE" 			, PATH_COMMON . US . "inc" . US);	  # common/assets/inc/ 

	// -----------------------------------------------------------------------
	// DEFINE ROOT PATHS
	// -----------------------------------------------------------------------
	define("RELATIVE_PATH_ROOT" 	, '');
	define("LOCAL_PATH_ROOT" 		, $_SERVER["DOCUMENT_ROOT"]);         #http:/ urlname
	define("HTTP_PATH_ROOT" 		, isset($_SERVER["HTTP_HOST"]) ? "http://" . $_SERVER["HTTP_HOST"] : (isset($_SERVER["SERVER_NAME"]) ? $_SERVER["SERVER_NAME"] : '_UNKNOWN_'));                                                 #folder name
