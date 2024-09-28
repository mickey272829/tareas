<?php
echo'
<div class="modal fade" id="ModalEliminarEvento'.$item['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Tarea</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="row event-form">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">¿Desea eliminar la Tarea con ID '.$item['id'].'?</label>
                            </div>
                        </div>
                    </div>
                    <div class="hstack gap-2 justify-content-end">
                        <a class="btn btn-danger" onclick="eliminar('.$item['id'].')">Eliminar Tarea</a>
                    </div>
                </form>
            </div>
        </div>   
    </div>
</div>
';
?>