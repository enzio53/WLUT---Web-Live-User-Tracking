<?php
class wlut_core{

    protected $SQLCache = [];

    public function __construct(){
        if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
            die('<center><b>[WLUT] I accept only ajax request sorry</b></center>');
        }
    }

    public function wlut_traitement(){

    }

    public function wlut_user_check(){

    }

    private function wlut_SQLCache($haystack){
        array_push($this->SQLCache, $haystack);
    }
}

$core = new wlut_core();
