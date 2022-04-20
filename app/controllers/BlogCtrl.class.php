<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;



class BlogCtrl {

    public function action_blog() {
        App::getSmarty()->display("blog.html");
    }
    
}
