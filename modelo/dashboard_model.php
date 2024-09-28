<?php

    require_once "db.php";

    class Datos extends Conexion{

        public static function vistaTasksModel($tabla){

            $stmt = Conexion::conectar()->prepare(" SELECT * FROM $tabla ");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->closeCursor(); 

        }

        public static function insertTaskModel($task_name){

            $stmt = Conexion::conectar()->prepare(" INSERT INTO tasks ( task_name ) VALUES ( '$task_name' ) ");
            return $stmt->execute() ? 'success' : 'error';
            $stmt->closeCursor();   

        }

        public static function updateTaskModel($editar_id,$datos){
            $stmt = Conexion::conectar()->prepare(" UPDATE tasks SET task_name = :editar_task_name, created_at = :editar_created_at WHERE id = '$editar_id' ");
            $stmt->bindParam(":editar_task_name", $datos["editar_task_name"], PDO::PARAM_STR);
            $stmt->bindParam(":editar_created_at", $datos["editar_created_at"], PDO::PARAM_STR);
            return $stmt->execute() ? 'success' : 'error';
            $stmt->closeCursor();  
        }

        static public function deleteTaskModel($datos){
            $stmt = Conexion::conectar()->prepare(" DELETE FROM tasks WHERE id = :editar_id_cliente ");
            $stmt -> bindParam(":editar_id_cliente", $datos["editar_id_cliente"], PDO::PARAM_INT);
            return $stmt->execute() ? 'success' : 'error';
            $stmt->closeCursor();  

        }

    }

?>