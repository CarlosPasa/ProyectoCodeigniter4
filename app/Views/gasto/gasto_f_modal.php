<!-- Bootstrap modal -->
<div class="modal fade" id="modal_gasto" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
			<?php
				echo form_open($postAction, vFormAtributos("frmFichaGasto"));
			?>
            <div class="modal-header">
				<h3 class="modal-title">Gasto</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                
            </div>
            <div class="modal-body form">
				<div class="form-body">
					<fieldset style="margin-right: 30px;margin-left: 30px;">
						<?php vHidden('id', $id); ?>
						<div class="form-group">
							<?php vLabel('txtDetalleGasto','Detalle del gasto'); ?>
							<?php vTextBox('txtDetalleGasto',$txtDetalleGasto, 'Ingrese detalle del Gasto',null,null,null,null,false,"required"); ?>
						</div>
						<div class="form-group">
							<?php vLabel('txtMontoGasto','Monto del gasto'); ?>
							<?php vTextBox('txtMontoGasto',$txtMontoGasto, 'Ingrese monto del Gasto',null,null,null,null,false,"required"); ?>
						</div>
						<div class="form-group">
							<?php vLabel('txtCategoriaGasto','Categoria del gasto'); ?>
							<?php vComboBoxLiveSearch('cbCategoryGasto', stdToArray($categoria_data), 'id', 'description',NULL,$cbCategoryGasto); ?>
						</div>
						<div class="form-group">
							<?php vLabel('txtFecha','Fecha del gasto'); ?>
							<?php vDateTimePicker2('txtFecha',$txtFecha,'Fecha'); ?>
						</div>
						<div class="form-group">
							<?php vLabel('txtAhorro','Ahorro'); ?>
							<?php vCheckBoxSwitch('checkAhorro','SI','NO',null,null) ?>
						</div>
					</fieldset>
				</div>
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal" onClick="onGasto_close();">Cancelar</button>
                <button type="button" class="btn btn-success" onClick="onGastoSubmit()">Guardar</button>
            </div>
			<?php echo form_close() ?>
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
    //Date picker
    $('#Fecha').datetimepicker({
        format: 'DD/MM/YYYY',
		language: 'es',
    });
	$("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
});
</script>

<script type="text/javascript">
	//Other Script
</script>

<!-- onSubmit() -->
<script type="text/javascript">
function onGastoSubmit(){
	$("#pageSpin").show();
	var formData = new FormData($("#frmFichaGasto")[0]);
	$.ajax({
		type: 'POST',
		url: $("#frmFichaGasto").attr("action"),
		data: formData,
		cache:false,
		processData: false,
		contentType: false,
		success: function (results) {
			$("#pageSpin").hide();
			var obj = jQuery.parseJSON(results);
			console.log(obj);
			if (obj['STATUS']=='true'){
				onGasto_close();
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
function onGasto_close() {
	$('#modal_detalle').modal('hide');
}
</script>