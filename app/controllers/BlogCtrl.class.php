<?php

namespace app\controllers;

use app\transfer\Blog;
use app\forms\BlogForm;
use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;



class BlogCtrl {
    private $records;
    
    public $wpis;

	public function __construct(){
		$this->records = new Blog();
        $this->wpis = new BlogForm();
	}

    public function getFormParams(){
        $this->wpis = ParamUtils::getFromRequest("wpis");
    }

    public function insertToDb(){
        try{
            App::getDB()->insert("blog",[
                'tekst' => $this->wpis
            ]);
        }catch(\PDOException $e){
            // Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }

    public function generateView() {
        App::getSmarty()->assign('user',unserialize($_SESSION['user']));
        $records = App::getDB()->select("blog", "*", ["LIMIT" => 10, "ORDER" => ["idBlog"=>"DESC"]]);
        $this->insertToDb();
        App::getSmarty()->assign("lista",$records);
        App::getSmarty()->display("blog.html");
    }




    public function action_blog() {
        $this->getFormParams();
        $this->generateView();
    }
    
}
