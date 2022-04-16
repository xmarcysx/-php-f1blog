<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class LoginCtrl {
    
    public function action_login() {
		           
        App::getSmarty()->display("login.html");
    }
    
}
