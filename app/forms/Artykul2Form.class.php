<?php

namespace app\forms;

class Artykul2Form
{
    public $grandPrix;
    public $zwyciezca;
    public $team;

    function checkIsNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
}