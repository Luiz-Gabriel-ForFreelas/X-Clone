<?php
namespace App\Controllers;

//Recursos
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {
    public function index() {
        $this->render('index');
    }

    public function inscreverse() {
        $this->render('inscreverse');
    }

    public function registrar() {
        //receber os dados do form
        print_r($_POST);

        //sucesso


        //erro
    }
}
?>