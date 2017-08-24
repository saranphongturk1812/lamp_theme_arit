<?php
    //define('$pathfile', 'localhost/');
    if ($_SERVER["REMOTE_ADDR"] == '127.0.0.1' or $_SERVER["REMOTE_ADDR"] == '::1'):
        $GLOBALS['PATH'] = 'http://localhost/theme_arit';

    else:
        $GLOBALS['PATH'] = 'http://192.168.56.100/';
    endif;

    function base_url() {
        return $GLOBALS['PATH'];
        //return BASE_URL;
    }
?>