<?php

class homeController extends ControllerView{

    public function index() {
       
        $anuncios = new Anuncios();
        $usuarios = new Usuarios();
        
        $dados = array(
            'quantidade' => $anuncios->getQuantidade(),
            'nome'       => $usuarios->getNome()
        );

        $this->loadTemplate('home', $dados);

    }

}