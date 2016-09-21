<?php

	/**
    *@author ug-code
    *@since  2016-09-21 19:11
	**	GLOBAL FUNCTIONS
	*/

    # URL redirecting function
	function redirect_url($url, $refresh=false){
        if(!$refresh){
            header("Location: " . $url);
        }else{
            header("Refresh: " . $refresh . "; url=" . $url);
        }
	}

    # global path setter
    function set_path($host, $path){
        switch ($host) {
            case 'dir':
                $path = LOCAL_PATH_ROOT . DS . $path;
                if(US!==DS){
                    $path = str_replace(US, DS, $path);
                }
                break;
            case 'url':
                $path = str_replace(DS, US, HTTP_PATH_ROOT . US . $path);
                break;
        }
        return $path;
    }