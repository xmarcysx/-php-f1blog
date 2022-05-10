<?php

namespace app\controllers;

use core\App;
use core\Logs;
use core\ParamUtils;
use core\Utils;
use core\SessionUtils;


class MarcysioxCtrl {

    public $blog;
    public $offset = 1;
    public $records = 10;

    public function getBlogFromDB(){
        try{
            $this->blog = App::getDB()->select("blog", "*", [
                'LIMIT' => [(($this->offset - 1) * $this->records), $this->records],
                "ORDER" => "idBlog", 
                "ORDER" => ["idBlog"=>"DESC"]
            ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }

    public function checkIsNextPage(){
        try{
            $isNext = App::getDB()->has("blog",[
                'LIMIT' => [(($this->offset) * $this->records), $this->records]
            ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $isNext;
    }

    public function generateView(){
        App::getSmarty()->assign('user',unserialize($_SESSION['user']));

        $this->getBlogFromDB();
        App::getSmarty()->assign("lista", $this->blog);
        App::getSmarty()->assign("offset", $this->offset);
        App::getSmarty()->assign("isNextPage", $this->checkIsNextPage());
        App::getSmarty()->assign("next_page", $this->offset + 1);
        App::getSmarty()->assign("previous_page", $this->offset - 1);

        App::getSmarty()->display("marcysiox.html");
    }

    public function action_marcysiox(){
        $offset = ParamUtils::getFromCleanURL(1);
        if(isset($offset) && is_numeric($offset) && $offset > 0) $this->offset += $offset - 1;
        if(isset($offset) && $offset == 0) $this->records = App::getDB()->count("blog","*");

        $this->generateView();
    }
    
}
