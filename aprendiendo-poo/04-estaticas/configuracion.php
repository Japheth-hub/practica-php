<?php

class configuracion{
    
    public static $color;
    public static $newsletter;
    public static $entorno;
    
    public static function getColor() {
        return self::$color;
    }

    public static function getNewsletter() {
        return self::$newsletter;
    }

    public static function getEntorno() {
        return self::$entorno;
    }

    public static function setColor($color): void {
        self::$color = $color;
    }

    public static function setNewsletter($newsletter): void {
        self::$newsletter = $newsletter;
    }

    public static function setEntorno($entorno): void {
        self::$entorno = $entorno;
    }


    
}



