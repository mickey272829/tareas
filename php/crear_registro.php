<link rel="stylesheet" href="assets/vendors/flatpickr/flatpickr.min.css">
<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
<link rel="stylesheet" href="assets/css/style.css">
<?php 

require_once ("../modelo/dashboard_model.php");

$task_name = utf8_decode($_POST['task_name']);

    $insert_task = Datos::insertTaskModel($task_name);

    $tasks = Datos::vistaTasksModel("tasks");
    
    echo'
    <table class="table table-hover mb-0" id="dataTableExample">
        ';
        include ('../vista/tabla/thead.php');
        echo'
        <tbody>            
    ';
    foreach($tasks as $row => $item){ 
    
        include ('../vista/tabla/tr.php');
        include ('../vista/formularios/edit.php');
        include ('../vista/formularios/delete.php');
        
    }
    echo'
        </tbody>
    </table>
    ';

?>
<script src="assets/vendors/flatpickr/flatpickr.min.js"></script>
<script src="assets/vendors/feather-icons/feather.min.js"></script>
<script src="assets/js/template.js"></script>
<script>
$(".flatpickrTask").flatpickr({
        enableSeconds: true,
        enableTime: true,
        dateFormat: "Y-m-d H:i:S",
        altInput: true,
        altFormat: "Y-m-d H:i:S",
    });
</script>
<script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
<script src="assets/js/data-table.js"></script>