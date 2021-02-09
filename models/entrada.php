<?php
 
class Entrada{
    private $id;
    private $pregunta;
    private $db;
    
        public function __construct() {
        $this->db = Database::connect();
    }
    
    
    function getId() {
        return $this->id;
    }

    function getPregunta() {
        return $this->pregunta;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPregunta($pregunta) {
        $this->pregunta = $pregunta;
    }
    
    public function resivir() {
        $sql = "SELECT id FROM entradas WHERE '{$this->getPregunta()}' = pregunta;";
        $entrada = $this->db->query($sql);
        
        if($entrada && $entrada->num_rows ==1){
            $pregunta = $entrada->fetch_object();
            $id_pregunta = $pregunta->id;
            $this->setId($id_pregunta );
        }else{
            //poner codigo paara las preguntas no registradas
        }   
    }

}
