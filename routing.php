<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('public');
App::getRouter()->setLoginRoute('login');


Utils::addRoute('public', 'publicCtrl');//First Page loaded
Utils::addRoute('login','LoginCtrl'); 
Utils::addRoute('register','RegisterCtrl'); 
