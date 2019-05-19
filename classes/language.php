<?php

class Language
{
    private $data;
    public  function __construct($language)
    {
        $this->data = parse_ini_file("../system/lang/$language.ini");
    }

    public function get($name) {
        return $this->data[$name];
    }
}