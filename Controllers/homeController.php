<?php

class homeController extends ControllerView{

    public function index() {
       
        $dados = array(
            'quantidade' => 5,
            'nome'       => 'Antonio'
        );

        $this->loadTemplate('home', $dados);

    }

}