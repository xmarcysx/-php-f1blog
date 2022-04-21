<?php

namespace app\controllers;

use app\forms\LoginForm;
use app\transfer\User;
use core\Logs;
use core\ParamUtils;
use core\App;
use core\SessionUtils;
use core\RoleUtils;
use core\Utils;
use core\Validator;


class LoginCtrl {

    public $form;
    public $accountData;

    public function __construct(){
        $this->form = new LoginForm();
    }

    public function getLoginParams(){
        $this->form->username = ParamUtils::getFromRequest("username");
        $this->form->password = ParamUtils::getFromRequest("password");
    }

    public function validateLogin(){
        if(!empty(SessionUtils::load("id", true))) return true;

        if(!$this->form->checkIsNull()) return false;

        $v = new Validator();
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
        ]);

        if($this->form->username== 'admin'){
            $user = new User($this->form->username,'admin');
            // zaipsz obiekt użytkownika w sesji
            $_SESSION['user'] = serialize($user);
            RoleUtils::addRole($user->role);
        }else{
            $user = new User($this->form->username,'user');
            // zaipsz obiekt użytkownika w sesji
            $_SESSION['user'] = serialize($user);
            RoleUtils::addRole($user->role);
        }



        if(App::getMessages()->isError()) return false;

        try{
            $this->accountData = App::getDB()->get("user", [
                "[>]role" => ["id_role" => "id_role"],
            ],[
                'user.id',
                'user.username',
                'user.password',
                'role.name',
            ],[
                'username' => $this->form->username,
                'password' => md5($this->form->password)
            ]);

            if(empty($this->accountData)){
                Utils::addErrorMessage("Nieprawidłowa nazwa użytkownika lub hasło");
            }
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }

        if(!App::getMessages()->isError()) return true;
        else return false;
    }

    public function generateView(){
        if($this->validateLogin()){
            header("Location: ".App::getConf()->app_url."/blog");
        }
        else{
            App::getSmarty()->display("login.html");
        }
    }
    
    public function action_login() {
        $this->getLoginParams();
        $this->generateView();
    }

    public function action_logout(){
        RoleUtils::removeRole("logged");
        RoleUtils::removeRole(SessionUtils::load("role"));
        SessionUtils::remove("id");
        SessionUtils::remove("username");
        SessionUtils::remove("role");
        header("Location: ".App::getConf()->app_url);
    }
    
}
