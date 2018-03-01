<?php

    namespace Src\Controller;


    /**
     * Class LogoutController
     *
     * @package Src\Controller
     */
    class LogoutController extends Controller
    {
        public function __construct()
        {
            parent::__construct();
            if(
                !isset($_SESSION['is_connected']) // !isset (vérifie s'il n'existe pas)
                || $_SESSION['is_connected'] !== true //n'est pas true
            ){
                die("Die dumb hacker");
            }
            if (isset($_GET['action']) && $_GET['action'] === 'disconnect'){
                $this->logout();
            }
        }

        public function logout()
        {
            session_destroy();
            setcookie('is_connected', true, time() -1);
            header('Location: /');
        }

    }