<?php

namespace app\controllers;

use app\transfer\Artykul2;
use app\forms\Artykul2Form;
use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;
 
class Artykul2Ctrl {
    private $records; 
	public $form;
    public $accountData;

	public function __construct(){
		$this->form = new Artykul2Form();
        $this->records = new Artykul2();
	}

    public function getArtykul2Params(){
        $this->form->grandPrix = ParamUtils::getFromRequest("grandPrix");
        $this->form->zwyciezca = ParamUtils::getFromRequest("zwyciezca");
        $this->form->team = ParamUtils::getFromRequest("team");
    }

    public function insertToDb(){
        try{
            App::getDB()->insert("wyniki",[
                'grandPrix' =>  $this->form->grandPrix,
                'zwyciezca' =>  $this->form->zwyciezca,
                'team' =>  $this->form->team,
                'sezon' =>  '2022',
            ]);
        }catch(\PDOException $e){
            // Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }

    public function generateView() {
        App::getSmarty()->assign('user',unserialize($_SESSION['user']));
        $records = App::getDB()->select("wyniki", "*",["sezon"=>"2022"]);
        $this->insertToDb();
        App::getSmarty()->assign("lista",$records);
        App::getSmarty()->display("artykul2.html");
    }

    public function action_artykul2() {
        $this->getArtykul2Params();
        $this->generateView();
    }    
}
