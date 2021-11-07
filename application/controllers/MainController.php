<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller
{
    
    public function indexAction(){
        $db = new Db;
        $form = 3;

        $params = [
            'id' => $form,
        ];

        $data = $db->row("SELECT name FROM users WHERE id= :id", $params);

        $vars = [
            'name' => 'Вася',
            'age' => 88,
        ];
        $this->view->render('Главная страница', $vars);
    }

    public function contactAction(){
        $this->view->render('Контакты');
    }

}