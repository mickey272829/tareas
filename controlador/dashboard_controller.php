<?php 

class DashboardController{

    public function vistaSideBarController(){
        echo '
		<nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                Tasks<span></span>
                </a>
                <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="index" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Lista de Tareas</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        ';
    }
    
    public function vistaNavBarController(){
        echo '
		<nav class="navbar">
            <a href="#" class="sidebar-toggler">
                <i data-feather="menu"></i>
            </a>
        </nav>
        ';
    }

    public function vistaContentController(){
        $tasks = Datos::vistaTasksModel("tasks");

        echo '
        <div class="page-content">

            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Lista de Tareas</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <button class="btn btn-primary w-100" id="btn-new-event" data-bs-toggle="modal" data-bs-target="#ModalNuevoEvento">
                    <i class="mdi mdi-plus"></i> Nueva Tarea
                </button>
            </div>
            </div>

            <div class="row">
            <div class="col-lg-12 col-xl-12 stretch-card">
                <div class="card">
                <div class="card-body">
                    <div class="table-responsive" id="resultado-tabla">

                    <table class="table table-hover mb-0" id="dataTableExample">
                        ';
                        include ('vista/tabla/thead.php');
                        echo'
                        <tbody>
                        ';
                        foreach($tasks as $row => $item){ 
                            include ('vista/tabla/tr.php');
                            include ('vista/formularios/edit.php');
                            include ('vista/formularios/delete.php');
                        }
                        echo'
                        </tbody>
                    </table>
                    
                    </div>
                </div> 
                </div>
            </div>
            </div> 
            
            <div class="modal fade" id="ModalNuevoEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nueva Tarea</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form class="needs-validation" name="event-form" id="form-event" novalidate>

                                ';
                                include ('vista/formularios/add.php');
                                echo'

                                <div class="hstack gap-2 justify-content-end">
                                    <button type="submit" class="btn btn-success" id="btn-save-event">Agregar Tarea</button>
                                </div>

                            </form>

                        </div>
                    </div>   
                </div>
            </div>

		</div>
        ';
    }

}

?>
