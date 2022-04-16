<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class PublicCtrl {
    
    public function action_public() {
		           
        App::getSmarty()->display("public.html");
    }
    
}
