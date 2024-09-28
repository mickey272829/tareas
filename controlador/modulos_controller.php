<?php

    class ModulosControlador{

    public function modulos(){
        include "vista/principal.php";
    }

    public function enlacesPaginasControlador(){

        if(isset($_GET['url'])){
            
            $enlace = $_GET['url'];
        }

        else{

            $enlace = "index";

        }
        
        $respuesta = Paginas::enlacesPaginasModelo($enlace);

        include $respuesta;
    }

}

?>