<?php

use app\classes\UploadFile;

interface UploadInterface
{
    public function uploadFile();
}

class Upload
{
    private $upload;
    public function __construct(UploadInterface $upload)
    {
        $this->upload = $upload;
    }
    public function doUpload()
    {
        return $this->upload->uploadFile();
    }
}

class UploadPdf implements UploadInterface
{
    public function uploadFile()
    {
        return "Upload PDF.";
    }
}
class UploadFoto implements UploadInterface
{
    public function uploadFile()
    {
        return "Upload Foto.";
    }
}


$upload = new Upload(new UploadFoto);

echo $upload->doUpload();
