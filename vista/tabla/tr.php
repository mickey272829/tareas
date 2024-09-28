<?php
echo'
<tr>
    <td>'.$item['id'].'</td>
    <td>'.utf8_encode($item['task_name']).'</td>
    <td>'.utf8_encode($item['created_at']).'</td>
    <td>
        <span class="badge bg-success"><a class="text-white" href="" data-bs-toggle="modal" data-bs-target="#ModalEditarEvento'.$item['id'].'">EDITAR</a></span>
    </td>
    <td>
        <span class="badge bg-danger"><a class="text-white" href="" data-bs-toggle="modal" data-bs-target="#ModalEliminarEvento'.$item['id'].'">ELIMINAR</a></span>
    </td>
</tr>
';
?>