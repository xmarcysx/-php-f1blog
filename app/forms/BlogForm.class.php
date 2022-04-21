<?php

namespace app\forms;

class BlogForm
{
    public $wpis;

    function checkIsNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
}