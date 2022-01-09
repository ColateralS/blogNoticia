<?php

class CategoriaController extends Controller {

    private $model;

    /*
     * Constructor de la clase que permite asociar con el Modelo
    */
    function __construct()
    {
        $this->model = $this->model("Categoria");
    }

    /*
     * Funcion para poder presentar la forma para el ingreso de los datos de un usuario que se vaya a registrar
     * en el aplicativo y pueda loguearse en otra ocasion
    */
    function display() {
         /*
         * Se activa la bandera para indicarle a la vista que debe presentar las opciones para 
         * ingresar los campos de registro de un usuario
        */
        $data['display'] = true; 
        $this->view("CategoriaView", $data); // Se invoca a la Vista
    }

    function register() {
    }
}   