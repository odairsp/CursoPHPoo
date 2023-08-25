<?php

class Head
{
    public function create()
    {
        return 'Cabeça';
    }
}

class Pessoa
{
    private $head;

    public function __construct()
    {
        $this->head = new Head;
    }

    function create(){
        $this->head->create();
    }

}


