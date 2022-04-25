<?php

namespace app\controllers;

use app\transfer\Artykul1;
use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;
 
class Artykul1Ctrl {
	private $records; 

	public function __construct(){
		$this->records = new Artykul1();
	}


    public function action_artykul1() {
        App::getSmarty()->assign('user',unserialize($_SESSION['user']));

        $records = App::getDB()->select("wyniki", "*",["sezon"=>"2021"]);
        App::getSmarty()->assign("lista",$records);

        App::getSmarty()->display("artykul1.html");
    }
    
}
