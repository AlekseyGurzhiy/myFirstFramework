<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    
    public function before(){
        $this->view->layout = 'custom';
    }
    
    public function loginAction(){
        if(!empty($_POST)){
            $this->view->message('sucess', 'Выполнено');
        }
        $this->view->render('Вход');
    }

    public function registerAction(){
        $this->view->render('Регистрация');
    }

    public function hideAction(){
        $this->view->render('Я скрытый метод');
    }

}
