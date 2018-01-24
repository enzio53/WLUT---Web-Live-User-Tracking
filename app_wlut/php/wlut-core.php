<?php
class wlut_core{

    public function __construct(){
        error_reporting(0);

        if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
            die('<center><b>[WLUT] I accept only ajax request sorry</b></center>');
        }
    }

    public function wlut_traitement(){
        
    }
}

$core = new wlut_core();