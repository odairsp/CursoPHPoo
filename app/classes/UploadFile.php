<?php

namespace app\classes;


use app\classes\Upload;

class UploadFile extends Upload
{
    public $extensions = ['zip', 'rar', 'pdf'];
}
