<?php
    class Paginas{

        public static function enlacesPaginasModelo($enlaces){

            if($enlaces == "index"){

                $modulo =  "vista/modulos/body.php";
            
            }
            
            return $modulo;
            
        }
    }
?>