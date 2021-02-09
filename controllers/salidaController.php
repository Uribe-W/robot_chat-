<?php

require_once 'controllers/entradaController.php';
require_once 'models/salida.php';

class salidaController{
    
    public function salidas($id_pregunta){
        if(isset($id_pregunta)){
        $busqueda = new Salida();
        $busqueda->buscar($id_pregunta);
        $result= $busqueda->getRespuesta();
        require 'views/mensaje.php';
        
        
        }
    }
    
    
    
}