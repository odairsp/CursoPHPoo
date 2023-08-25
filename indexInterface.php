<?php

require "vendor/autoload.php";

interface LoginInterface
{
    public function login();
}

abstract class Login
{
    abstract public function login();
}

class LoginUser extends Login
{

    public function login()
    {
    }
}
class LoginAdmin implements LoginInterface
{

    public function login()
    {
    }
}
