<?php
	require_once "modelo/enlaces.php";
	require_once "modelo/dashboard_model.php";
    require_once "controlador/modulos_controller.php";
    require_once "controlador/dashboard_controller.php";

    $modulos = new ModulosControlador();
    $modulos->modulos();
?>