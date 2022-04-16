<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class RegisterCtrl {
    
    public function action_register() {
		           
        App::getSmarty()->display("register.html");
    }
    
}
