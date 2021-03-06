<?php

namespace Controller;
session_start();
use Model\LogInManager;

class LogIn extends AbstractController
{
    protected $_user;
    protected $_password;

    public function getUser(){
        $this->_user = $_POST['pseudo'];
        return $this->_user;
    }

    public function getPassword()
    {
        $this->_password = $_POST['password'];
        return $this->_password;
    }

    public function logIn() {
        require_once '../app/connect.php';
        $manager = new LogInManager($db);
        $user = $this->getUser();
        $password = $this->getPassword();
        $manager->checkUser($user, $password);

        header('Location:' . $_SERVER['HTTP_REFERER']);
    }

    public function logOut()
    {
        session_destroy();
        header('Location:/');
    }

    public function session()
    {
        return $this->_twig->render('textlogin.html.twig');
    }
}