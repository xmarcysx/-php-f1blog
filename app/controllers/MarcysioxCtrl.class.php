<?php

namespace app\controllers;

use app\transfer\Blog;
use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;



class MarcysioxCtrl {

    private $records; 

	public function __construct(){
		$this->records = new Blog();
	}

    public function action_marcysiox() {
        App::getSmarty()->assign('user',unserialize($_SESSION['user']));
        $records = App::getDB()->select("blog", "*", ["ORDER" => "idBlog", "ORDER" => ["idBlog"=>"DESC"]]);
        App::getSmarty()->assign("lista",$records);
        App::getSmarty()->display("marcysiox.html");
    }
    
}
