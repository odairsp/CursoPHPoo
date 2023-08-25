<?php

require 'vendor/autoload.php';



abstract class Email
{
    public static function teste()
    {
        return "teste de parente";
    }
    public static function who()
    {
        return "odair Email\n";
    }
    public static function send()
    {
        return self::who();
    }
}

echo Email::send();

class SendEmail extends Email
{

    public static function who()
    {
        return "joao SendEmail\n";
    }

    public static function outroTeste()
    {
        return parent::teste();
    }
}

echo SendEmail::teste();
echo SendEmail::outroTeste();