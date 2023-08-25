<?php

namespace app\classes;

class UploadFoto extends Upload
{
    public $extensions = ['png', 'jpg'];

    public static function teste()
    {
        echo 'teste functions static';
    }
}