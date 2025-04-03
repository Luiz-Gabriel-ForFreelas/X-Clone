<?php
namespace App\Controllers;

//Recursos
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {
    public function index() {
        $this->view->login = isset($_GET['login']) ? $_GET['login'] : "";
        $this->render('index');
    }

    public function inscreverse() {
        $this->view->erroCadastro = false;
        $this->render('inscreverse');
    }

    public function registrar() {
        //receber os dados do form
        $usuario = Container::getModel('Usuario');
        $usuario->__set('nome', $_POST['Nome']);
        $usuario->__set('email', $_POST['E-mail']);
        $usuario->__set('senha', $_POST['Senha']);

        if($usuario->validarCadastro() && count($usuario->getUsuarioPorEmail()) == 0) {
            //sucesso
            $usuario->salvar();
            $this->render('cadastro');
        } else {
            //erro
            $this->view->usuario = array(
                'nome' => $_POST['Nome'],
                'email' => $_POST['E-mail'],
                'senha' => $_POST['Senha']
            );
            $this->view->erroCadastro = true;
            $this->render('inscreverse');
        }
    }
}
?>