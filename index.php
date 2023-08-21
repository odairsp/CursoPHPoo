<?php

require "./vendor/autoload.php";

use app\classes\AtividadesPessoa;
use app\classes\UploadFoto;
use app\classes\UploadFile;
use app\classes\Pessoa;


$pessoa = new Pessoa;

$pessoa->name = "odair";
$pessoa->age = 45;
$pessoa->email = "email@email.com";

echo $pessoa->dados();
$atividadePessoa = new AtividadesPessoa;
$atividadePessoa->pessoa($pessoa);
echo $atividadePessoa->falando();

$uploadFoto = new UploadFoto('foto.png');
echo $uploadFoto->upload();

