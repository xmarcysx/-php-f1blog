<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;



class UstawieniaCtrl {

    public function action_ustawienia() {
        App::getSmarty()->assign('user',unserialize($_SESSION['user']));
        App::getSmarty()->display("ustawienia.html");
    }
    
}
