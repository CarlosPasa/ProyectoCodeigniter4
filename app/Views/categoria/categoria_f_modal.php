<!-- Bootstrap modal -->
<div class="modal fade" id="modal_categoria" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
			<?= form_open($postAction, vFormAtributos("frmFichaCategoria")); ?>
            <div class="modal-header">
				<h3 class="modal-title">Categoria</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                
            </div>
            <div class="modal-body form">
				<div class="form-body">
					<fieldset style="margin-right: 30px;margin-left: 30px;">
						<?php vHidden('id', $id); ?>
						<div class="form-group">
							<?php vLabel('txtCorrelativo','Nombre del categoria'); ?>						
							<?php vTextBox('txtNombreCategoria',$txtNombreCategoria, 'Ingrese nombre del categoria',null,null,null,null,false,"required"); ?>
						</div>
					</fieldset>
				</div>
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal" onClick="onCategoria_close();">Cancelar</button>
                <button type="button" class="btn btn-success" onClick="onCategoriaSubmit()">Guardar</button>
            </div>
			<?= form_close() ?>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


<!-- Validation -->
<script type="text/javascript">

</script>

<!-- Document.Ready() -->
<script type="text/javascript">
$(document).ready(function(){
});
</script>

<script type="text/javascript">
	//Other Script
</script>

<!-- onSubmit() -->
<script type="text/javascript">
function onCategoriaSubmit(){
	$("#pageSpin").show();
	var formData = new FormData($("#frmFichaCategoria")[0]);
	$.ajax({
		type: 'POST',
		url: $("#frmFichaCategoria").attr("action"),
		data: formData,
		cache:false,
		processData: false,
		contentType: false,
		success: function (results) {
			$("#pageSpin").hide();
			var obj = jQuery.parseJSON(results);
			console.log(obj);
			if (obj['STATUS']=='true'){
				onCategoria_close();
				alerta('success',obj['mensaje'],'¡Importante!');
				if (obj['redirect_url'] != null){					
					window.location.href = obj['redirect_url'];
				}
			}
			else{
				alerta('error',obj['mensaje'],'¡Importante!');
				//ShowDialogWarning('Información', obj['mensaje'],'');
			}
		},
		error: function(request, status, error){
			$("#pageSpin").hide();
			var $html = $('<div></div>');
			$html.append(request.responseText);
			ShowDialogError($html);
		}
	});
}
function onCategoria_close() {
	$('#modal_detalle').modal('hide');
}
</script>