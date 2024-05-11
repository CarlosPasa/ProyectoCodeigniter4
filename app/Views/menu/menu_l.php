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
            <h3 class="card-title"><?php echo $tablaTitulo; ?></h3>
            <div class="card-tools">
              <?php if (hasPermissions('menu_add')): ?>
                <a href="<?php echo url('menu/add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo</a>
              <?php endif ?>
            </div>
          </div>
          <div class="card-body">
            <!-- Default box -->
            <div class="box">
              <div class="box-body">

                <?php
                  $Actions = array();
                    if (hasPermissions('menu_edit')) array_push($Actions, modelFieldAction::btnEdit(site_url("menu/edit"),"id"));
                    if (hasPermissions('menu_delete')) array_push($Actions, modelFieldAction::btnDelete(site_url("menu/deleteAction"),"id"));
                  $modelField = array(
                    new modelFieldItem(array("nombre"=>"ID", "nombreData"=>"id","hAlign"=>"center","ancho"=>"60px")),
                    new modelFieldItem(array("nombre"=>"Name", "nombreData"=>"name")),
                    new modelFieldItem(array("nombre"=>"Title", "nombreData"=>"title")),
                    new modelFieldItem(array("nombre"=>"TypeObject", "nombreData"=>"type_object")),
                    new modelFieldItem(array("nombre"=>"Object", "nombreData"=>"object")),
                    new modelFieldItem(array("nombre"=>"Order", "nombreData"=>"order")),
                    new modelFieldItem(array("nombre"=>"Acciones", "arrayAcciones"=>$Actions,"hAlign"=>"center","ancho"=>"150px"))
                  );
                  vTable($modelField, stdToArray($data_menus), 0, 'tlbListado');
                ?>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- /.content -->
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
  $('table').DataTable({"autoWidth": false});
</script>

<?= $this->endSection() ?>
