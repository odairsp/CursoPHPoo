<?php

namespace app\classes;

class UploadFoto extends Upload
{

    public $extensions = ['png', 'jpg'];



    public $protect = $protected;
    public $privat = $private;
}
