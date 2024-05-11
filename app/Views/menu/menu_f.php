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
          <div class="card-header ">
            <h3 class="card-title"><?php echo $accion; ?></h3>
            <div class="card-tools">
              <a href="<?php echo url('/' . $return_url) ?>" class="btn btn-flat btn-default">
                <i class="fa fa-arrow-left"></i> &nbsp;&nbsp; Regresar
              </a>
            </div>
          </div>
          <div class="card-body">
            <!-- Default box -->
            <div class="box">
              <?php echo form_open_multipart($postAction, [ 'class' => 'form-validate' ]); ?>
              <div class="box-body">
                <?php vHidden('id', $id); ?>
                <div class="form-group">
                  <?php vLabel('txtName','Nombre'); ?>
                  <?php vTextBox('txtName',$txtName, 'Ingrese nombre',null,null,null,null,false,"required"); ?>
                </div>
                <div class="form-group">
                  <?php vLabel('txtTitulo','Titulo'); ?>
                  <?php vTextBox('txtTitulo',$txtTitulo, 'Ingrese titulo de menu',null,null,null,null,false,"required"); ?>
                </div>
                <div class="form-group">
                  <?php vLabel('txtIcon','Icono'); ?>
                  <?php vTextBox('txtIcon',$txtIcon, 'Ingrese icono',null,null,null,null,false,"required"); ?>
                </div>
                <div class="form-group">
                  <?php vLabel('txtTypeObject','Tipo Objeto'); ?>
                  <?php vComboBoxLiveSearch('txtTypeObject', stdToArray($data_tipo_objeto), 'id', 'tipo',NULL,$txtTypeObject); ?>
                </div>
                <div class="form-group">
                  <?php vLabel('txtObject','Ruta'); ?>
                  <?php vTextBox('txtObject',$txtObject, 'Ingrese objeto',null,null,null,null,false,""); ?>
                </div>
                <div class="form-group">
                  <?php vLabel('txtOrder','Order'); ?>
                  <?php vTextBox('txtOrder',$txtOrder, 'Ingrese orden',null,null,null,null,false,"required"); ?>
                </div>
                <div class="form-group">
                  <?php vLabel('txtMenuPadreID','Menu Padre ID'); ?>
                  <?php vComboBoxLiveSearch('txtMenuPadreID', stdToArray($data_padres), 'id', 'title',NULL,$txtMenuPadreID,true); ?>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-flat btn-primary">Guardar</button>
              </div>
              <!-- /.box-footer-->
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script>
  $(document).ready(function() {
    // $('.form-validate').validate();
  })
</script>

<?= $this->endSection() ?>

<script>

</script>