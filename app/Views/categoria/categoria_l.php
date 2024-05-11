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
              <?php 
                if (hasPermissions('categoria_add'))
                  vButtonDefault("btnCategoriaNuevo", "Nuevo", "", "fa fa-plus", "btn btn-primary", "onCategoria_nuevo()","", false);
              ?>
              <!--button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button-->
            </div>
          </div>
          <div class="card-body">
            <?php      
              $Actions = array();
                if (hasPermissions('categoria_edit')) array_push($Actions, modelFieldAction::btnEdit(site_url("categoria/edit"),"id"));
                if (hasPermissions('categoria_delete')) array_push($Actions, modelFieldAction::btnDelete(site_url("categoria/deleteAction"),"id"));
              $modelField = array(
                new modelFieldItem(array("nombre"=>"ID", "nombreData"=>"id","hAlign"=>"center","ancho"=>"60px")),
                new modelFieldItem(array("nombre"=>"Nombre de la categoria", "nombreData"=>"description")),
                new modelFieldItem(array("nombre"=>"Acciones", "arrayAcciones"=>$Actions,"hAlign"=>"center","ancho"=>"150px"))
              );
              vTable($modelField, stdToArray($categorias), 0, 'tlbListado');
            ?>
          </div>
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
<!-- /.content -->
<!-- Categoria: Modal -->
<script type="text/javascript">
  function onCategoria_nuevo() {
    $url = '<?php echo site_url('categoria/nuevoModal') ?>';
    $titulo = "Agregar Categoria";
    $("#pageSpin").show();
    $.ajax({
      type: 'GET',
      url: $url,
      data: { "idCategoria": 0 },
      dataType: 'html',
      success: function (html) {
        $("#pageSpin").hide();
        $('#divCategoria').html(html);
        $('#modal_categoria').modal('show');
        $('#modal_categoria .modal-title').text($titulo);
      }
    });
  }

  function onCategoria_close() {
    $('#modal_categoria').modal('hide');
  }
</script>
<div id="divCategoria"></div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  $('table').DataTable({"autoWidth": false});
</script>
<?= $this->endSection() ?>

