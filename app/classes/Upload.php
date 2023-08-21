<?php

namespace app\classes;

class Upload
{

    private $private = 'Private';
    protected $protected = "protected";
    public $file;
    public $newName;
    public $extensions;

    public function __construct($file)
    {
        $this->file = $file;
        $this->rename();
    }

    public function extension()
    {

        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    public function rename()
    {
        $uniqId = uniqid(true);
        return  $this->newName = $uniqId . '.' . $this->extension();
    }
    public function upload()
    {
        if (in_array(pathinfo($this->file, PATHINFO_EXTENSION), $this->extensions)) {

            return $this->newName;
        }
    }
}