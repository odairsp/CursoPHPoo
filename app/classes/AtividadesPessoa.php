<?php

namespace app\classes;

class AtividadesPessoa
{
    public $pessoa;

    public function pessoa($pessoa)
    {
        $this->pessoa = $pessoa;
    }
    public function andar()
    {
        return $this->pessoa->name . ' Andando...';
    }
    public function falando()
    {
        return $this->pessoa->name . ' Falando...';
    }
}
