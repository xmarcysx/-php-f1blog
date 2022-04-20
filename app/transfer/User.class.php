<?php

namespace app\transfer;

class User{
	public $username;
	public $role;
	
	public function __construct($username, $role){
		$this->username = $username;
		$this->role = $role;		
	}	
}