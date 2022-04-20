<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;



class ArtykulyCtrl {

    public function action_artykuly() {
        App::getSmarty()->display("artykuly.html");
    }
    
}
