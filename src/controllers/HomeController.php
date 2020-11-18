<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class HomeController extends Controller {
    //Variável para armazenar login
    private $loggedUser;

    public function __construct() {
        $this->loggedUser = LoginHandler::checkLogin();
        if( $this->loggedUser === false) {
            $this->redirect('/login');          
        }
    }    
    public function index() {
        $this->render('home', ['loggedUser' => $this->loggedUser]);
    }


}