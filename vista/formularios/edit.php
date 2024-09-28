<?php
echo'
<div class="modal fade" id="ModalEditarEvento'.$item['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Tarea '.$item['id'].'</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>

                    <div class="row event-form">
                        <div class="col-md-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Task Name</label>
                                <input class="form-control" value="'.utf8_encode($item['task_name']).'" type="text" id="editar_task_name'.$item['id'].'" required />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Created_at</label>
                                <div class="input-group flatpickr me-2 mb-2 mb-md-0">
                                    <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
                                    <input type="text" class="flatpickrTask form-control bg-transparent border-primary" placeholder="Seleccionar Fecha" data-input id="editar_created_at'.$item['id'].'" value="'.$item['created_at'].'" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hstack gap-2 justify-content-end">
                        <a class="btn btn-success" onclick="editar('.$item['id'].')">Editar Tarea</a>
                    </div>

                </form>
            </div>
        </div>   
    </div>
</div>
';
?>