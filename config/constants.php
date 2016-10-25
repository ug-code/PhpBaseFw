<?php
	
	// -----------------------------------------------------------------------
	// DEFINE SEPERATOR ALIASES
	// -----------------------------------------------------------------------
	// -----------------------------------------------------------------------
	// DEFINE ROOT PATHS
	// -----------------------------------------------------------------------
	define("RELATIVE_PATH_ROOT" 	, '');
	define("LOCAL_PATH_ROOT" 		, $_SERVER["DOCUMENT_ROOT"]);         #http:/ urlname
	define("schema"                  , (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://");
	define("HTTP_PATH_ROOT" 		, isset($_SERVER["HTTP_HOST"]) ? schema. $_SERVER["HTTP_HOST"] : (isset($_SERVER["SERVER_NAME"]) ? $_SERVER["SERVER_NAME"] : '_UNKNOWN_'));

	define("URL_SEPARATOR" 			, '/');
	define("DS" 					, DIRECTORY_SEPARATOR);
	define("PS" 					, PATH_SEPARATOR);
	define("US" 					, URL_SEPARATOR);
	define ("DIR" 					, "dir");
	define ("URL" 					, "url");


	//Define path 
	// -----------------------------------------------------------------------
	define("REAL_PATH"               ,"");

	define("PATH_ASSETS" 			, "assets" . US);  					  # common/assets/
	define("PATH_IMAGES" 			, PATH_ASSETS . "img" . US);          # common/assets/img/ 
	define("PATH_STYLESHEET"		, PATH_ASSETS . "css" . US);	      # common/assets/css/ 	
	define("PATH_JAVASCRIPT"		, PATH_ASSETS . "js"  . US);	      # common/assets/js/
    define("PATH_CTRL"              , "controllers".US);                  # controllers/


	define("dir_ctr"                ,LOCAL_PATH_ROOT . US . PATH_CTRL);    # E:/www/abc.com/controllers/

