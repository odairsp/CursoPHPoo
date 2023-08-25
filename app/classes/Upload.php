<?php

namespace app\classes;

use app\traits\ValidationFile;

abstract class Upload
{

    use ValidationFile;

    private $file;
    private $newName;
    protected $extensions;

    public function __construct($file)
    {
        $this->file = $file;
        $this->rename();
    }

    private function extension()
    {

        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    private function rename()
    {
        $uniqId = uniqid(true);
        return  $this->newName = $uniqId . '.' . $this->extension();
    }
    public function upload()
    {
       return $this->validation()?$this->newName:'ERRO extensão não permitida';
    }
}