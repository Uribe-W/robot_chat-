<?php
 
class Salida{
    private $id;
    private $respuesta;
    private $id_pregunta;
    private $db;
    
    
    public function __construct() {
        $this->db = Database::connect();
    }
    
    
    function getId() {
        return $this->id;
    }

    function getRespuesta() {
        return $this->respuesta;
    }

    function getId_pregunta() {
        return $this->id_pregunta;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setRespuesta($respuesta) {
        $this->respuesta = $respuesta;
    }

    function setId_pregunta($id_pregunta)  {
        $this->id_pregunta = $id_pregunta;
    }
    
    public function buscar($pregunta) {
        $sql = "SELECT respuesta FROM salidas WHERE id_pregunta = $pregunta;";
         $result = $this->db->query($sql);
         
         $this->setRespuesta($result); 
         
    }
    
}