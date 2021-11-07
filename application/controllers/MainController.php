<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller
{
    
    public function indexAction(){

        $result = $this->model->getNews();
        $vars = [
            'news' => $result,
        ];

        $this->view->render('Главная страница', $vars);
    }

    public function contactAction(){
        $this->view->render('Контакты');
    }

}