<?= $this->extend('include/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo $titulo; ?>
    <small><?php echo $subTitulo; ?></small>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?php echo $accion; ?></h3>
            <div class="card-tools">
				<div class="box-tools pull-right">
					<a href="<?php echo url('/'.$return_url) ?>" class="btn btn-flat btn-default">
					<i class="fa fa-arrow-left"></i> &nbsp;&nbsp; Regresar
					</a>
					<!--button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
							title="Collapse">
					<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
					<i class="fa fa-times"></i></button-->
				</div>
	  		</div>
          </div>
          <div class="card-body">
			<?php echo form_open_multipart($postAction, [ 'id' => 'frmGasto', 'class' => 'form-validate' ]); ?>
			<div class="col-lg-12">
				<div class="box-body col-lg-6">
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
						<?php vCheckBoxSwitch('checkAhorro','SI','NO',null,null,$checkAhorro) ?>
					</div>
					<div class="box-footer">
						<button type="button" class="btn btn-flat btn-primary" onClick="onDetalleSubmit()">Guardar</button>
					</div>
				</div>
				
			</div>
			<?php echo form_close(); ?>

			
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<!-- onSubmit() -->
<script type="text/javascript">
	function onDetalleSubmit(){
		$("#pageSpin").show();
		var formData = new FormData($("#frmGasto")[0]);
		$.ajax({
			type: 'POST',
			url: $("#frmGasto").attr("action"),
			data: formData,
			cache:false,
			processData: false,
			contentType: false,
			success: function (results) {
				$("#pageSpin").hide();
				var obj = jQuery.parseJSON(results);
				console.log(obj);
				if (obj['STATUS']=='true'){
					if (obj['mensaje'] != null ){
						alerta('success',obj['mensaje'],'¡Importante!');					
						//ShowDialogInformation('Mensaje', obj['mensaje'], obj['redirect_url'])
					}
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
</script>
<?= $this->endSection() ?>

