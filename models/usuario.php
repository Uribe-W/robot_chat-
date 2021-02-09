<?php

class Usuario {

    private $id_usuario;
    private $text_usuario;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getText_usuario() {
        return $this->text_usuario;
    }

    function setText_usuario($text_usuario) {
        $this->text_usuario = $text_usuario;
    }

    public function guardar_pregunta($pregunta) {
        $sql = "INSERT INTO `usuarios` (`id_usuario`, `text_usuario`) VALUES (NULL, '{$this->getText_usuario()}');";
        $resultado = $this->db->query($sql);
        return $resultado;
    }

    public function sacar_pregunta() {
        $sql = "SELECT * FROM usuarios  ORDER BY id_usuario";
        $ultima_pregunta = $this->db->query($sql);
        while ($pregunta = $ultima_pregunta->fetch_array()): ?>
        
            <div id="datos">
                <span style="color:blue;">usuario</span>
                <span><?=$pregunta['text_usuario']?></span>
            </div>
<?php   endwhile;

}



}

