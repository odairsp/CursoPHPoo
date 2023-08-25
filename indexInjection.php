<?php

interface HeadInterface
{
    public function create();
}

class Head implements HeadInterface
{
    public function create()
    {
        return 'Cabeça';
    }
}
class HeadLoiro implements HeadInterface
{
    public function create()
    {
        return 'Cabeça Loira';
    }
}

class Person
{
    private $head;
    public function __construct(HeadInterface $head)
    {
        $this->head = $head;
    }

    public function create()
    {
        return $this->head->create();
    }
}

$person = new Person(new Head);
$person->create();

$personLoiro = new Person(new HeadLoiro);
$personLoiro->create();
