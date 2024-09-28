
		</div>
	</div>

	<script src="assets/vendors/core/core.js"></script>
    <script src="assets/vendors/flatpickr/flatpickr.min.js"></script>
	<script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
  	<script src="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
	<script src="assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/js/data-table.js"></script>

<script>

$(function(){

	$("#form-event").on("submit", function(e){

        e.preventDefault();

        var f = $(this);
        var formData = new FormData(document.getElementById("form-event"));
        formData.append("dato", "valor");
            
        $.ajax({
            url: "php/crear_registro.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function () {
                $("#resultado-tabla").html("Procesando, espere por favor...");
            },
            success:  function (res) {
                $("#resultado-tabla").html(res);
                $('#ModalNuevoEvento').modal('hide');
            }
        })   
    });    

});


function editar(id){

    $('#ModalEditarEvento'+id).modal('hide');
    var editar_task_name = document.getElementById("editar_task_name"+id).value;
    var editar_created_at = document.getElementById("editar_created_at"+id).value;

    var parametros = {
                "id" : id,
                "editar_task_name" : editar_task_name,
                "editar_created_at" : editar_created_at
        };
    $.ajax({
        data: parametros,
        url: "php/editar_registro.php",
        type: "POST", 
        beforeSend: function () {
           $("#resultado-tabla").html("Procesando, espere por favor...");
        },
        success:  function (res) {
            $("#resultado-tabla").html(res);
        }
    });
}

function eliminar(id){
    $('#ModalEliminarEvento'+id).modal('hide');

    var parametros = {
                "id" : id
        };
    $.ajax({
        data: parametros,
        url: "php/eliminar_registro.php",
        type: "POST",
        beforeSend: function () {
           $("#resultado-tabla").html("Procesando, espere por favor...");
        },
        success:  function (res) {
            
            $("#resultado-tabla").html(res);
            $('#ModalEliminarEvento'+id).modal('hide');
        }
    });
}

$(".flatpickrTask").flatpickr({
        enableSeconds: true,
        enableTime: true,
        dateFormat: "Y-m-d H:i:S",
        altInput: true,
        altFormat: "Y-m-d H:i:S",
    });

</script>

</body>
</html>    