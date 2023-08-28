<?php


abstract class Model
{
    public function all()
    {
        return "Todos os registros";
    }
    public function find($id){
        return "Encontrando o usuário id - {$id}";
    }
    
    abstract public function create();
}


class User extends Model
{
    public function create(){
        return "Criando usuário.";
    }
}

class Login
{
    private $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function logar($id)
    {
        return $this->model->find($id);
    }
}

$login = new Login(new User);

echo $login->logar(23);
