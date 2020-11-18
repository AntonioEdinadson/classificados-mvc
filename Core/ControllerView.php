<?php

class ControllerView {

    public function loadTemplate($name, $data = array()) {
        require 'Views/template.php';

    }

    public function loadViewInTemplate($name, $data = array()) {
        extract($data);
        require 'Views/' . $name . '.php';
    }

}