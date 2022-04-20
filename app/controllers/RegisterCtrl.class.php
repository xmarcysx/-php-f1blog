<?php

namespace app\controllers;

use app\forms\RegisterForm;
use core\Logs;
use core\SessionUtils;
use core\ParamUtils;
use core\App;
use core\Utils;
use core\Validator;

class RegisterCtrl {

    public $form;
    public function __construct(){
        $this->form = new RegisterForm();
    }

    public function getFormParams(){
        $this->form->email = ParamUtils::getFromRequest("email");
        $this->form->username = ParamUtils::getFromRequest("username");
        $this->form->password = ParamUtils::getFromRequest("password");
        $this->form->password_repeat = ParamUtils::getFromRequest("password_repeat");
    }

    public function validateForm(){
        if(!empty(SessionUtils::load("id", true))) return true;

        if(!$this->form->checkIsNull()) return false;

        $v = new Validator();
        $v->validate($this->form->email,[
            'email' => true,
            'trim' => true,
            'required' => true,
            'min_length' => 4,
            'max_length' => 128,
            'required_message' => 'Adres email jest wymagany',
            'validator_message' => "Nieprawidłowy adres email"
        ]);

        $v->validate($this->form->username,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Nazwa użytkownika jest wymagana',
            'min_length' => 3,
            'max_length' => 32,
            'validator_message' => 'Nazwa użytkownika powinna zawierać od 3 do 32 znaków'
        ]);

        $v->validate($this->form->password,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
            'regexp' => "/(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}/",
            'validator_message' => 'Hasło powinno mieć conajmniej 5 znaków, jedną literę i jedną liczbę'
        ]);

        $v->validate($this->form->password_repeat,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane'
        ]);

        if($this->form->password_repeat != $this->form->password){
            Utils::addErrorMessage("Hasła nie są identyczne!");
        }

        $this->checkForDuplicate();

        if(!App::getMessages()->isError()) return true;
        else return false;
    }

    public function checkForDuplicate(){
        try{
            $loginCount = App::getDB()->has("user", [
                'username' => $this->form->username
            ]);

            $emailCount = App::getDB()->has("user",[
                'email' => $this->form->email
            ]);

            if($loginCount){
                Utils::addErrorMessage("Podana nazwa użytkownika jest już zajęta");
            }

            if($emailCount){
                Utils::addErrorMessage("Podany email jest już zajęty");
            }

        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }

    public function insertToDb(){
        try{
            $userRole_id = App::getDB()->get("role", "id_role",[
                'name' => 'user'
            ]);

            $userId = App::getDB()->id();

            App::getDB()->insert("user",[
                'id' => $userId,
                'username' => $this->form->username,
                'password' => md5($this->form->password),
                'email' => $this->form->email,
                'id_role' => $userRole_id
            ]);

            Utils::addInfoMessage("Konto zostało utworzone");
            Logs::addLog("Utworzenie nowego konta: ".$this->form->username);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }



    
    public function generateView() {
        if($this->validateForm()){
            $this->insertToDb();
            header("Location: ".App::getConf()->app_url."/login");
        }
        else{
            App::getSmarty()->display("register.html");
        }
    }

        /**
     * @throws \SmartyException
     */
    public function action_register(){
        $this->getFormParams();
        $this->generateView();
    }
    
}
