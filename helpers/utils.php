<?php

class Utils {

    public static function deleteSession($name) {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public static function limpiar($string) {

        $string = str_replace(
                array('á', 'à', 'ä', 'â', 'Á', 'À', 'Ä', 'Â', 'A'),
                'a',
                $string
        );
        $string = str_replace(
                array('é', 'ë', 'ê', 'è', 'É', 'Ë', 'Ê', 'È', 'E'),
                'e',
                $string
        );
        $string = str_replace(
                array('í', 'ï', 'î', 'ì', 'Í', 'Ï', 'Î', 'Ì','I'),
                'i',
                $string
        );
        $string = str_replace(
                array('ó', 'ö', 'ô', 'ò', 'Ó', 'Ö', 'Ô', 'Ò','0','O'),
                'o',
                $string
        );
        $string = str_replace(
                array('ú', 'ü', 'û', 'ù', 'Ú', 'Ü', 'Û', 'Ù','U'),
                'u',
                $string
        );
        $string = str_replace(
                array('Ñ', 'ç', 'Ç'),
                array('ñ', 'c', 'c'),
                $string
        );
        $string = str_replace(
                array('[', '|', '°', '¬', '!', '^', '`', '~', '#', '$', '%', '&', '/', '(', ')', '=', '?', '¿', '{', '}', '_', ',', '.', '´', '+', '<', '>', '¡', '¨', '*', ':', ';', ']'),
                '',
                $string
        );

        return $string;
    }

}
