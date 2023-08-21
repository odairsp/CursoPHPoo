<?php

namespace app\classes;

class Pessoa
{
    public $name;
    public $age;
    public $email;

    public function dados()
    {
        return "Nome: {$this->name}\nIdade: {$this->age}\nEmail: {$this->email}\n";
    }
}
