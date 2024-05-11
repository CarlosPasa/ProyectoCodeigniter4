<?= $this->extend('include/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
<div class="row mb-2">
  <div class="col-sm-3">
    <h1>
      <?php echo $titulo; ?>
      <small><?php echo $subTitulo; ?></small>
    </h1>
  </div>
  <div class="col-sm-3">
    <h3 class=""><?php echo "Gastos: S/.".round($gasto_mes,2); ?></h3>
  </div>
  <div class="col-sm-3">
    <h3 class=""><?php echo "Ahorros: S/.".round($ahorro,2); ?></h3>
  </div>
  <div class="col-sm-3">
    <h3 class=""><?php echo "Saldo : S/.".round(($saldo),2); ?></h3>
  </div>
</div>
  
  
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
              <?php vComboBoxLiveSearch('cbMonth', $month_data, 'mes', 'nombre_mes',"onchange='ChangeMonth()'",$month); ?>

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
                if (hasPermissions('gasto_edit')) array_push($Actions, modelFieldAction::btnEdit(site_url("gasto/edit"),"id"));
                if (hasPermissions('gasto_delete')) array_push($Actions, modelFieldAction::btnDelete(site_url("gasto/deleteAction"),"id"));
              $modelField = array(
                new modelFieldItem(array("nombre"=>"Nº", "nombreData"=>"id")),
                new modelFieldItem(array("nombre"=>"Detalle del gasto", "nombreData"=>"description")),
                new modelFieldItem(array("nombre"=>"Categoria", "nombreData"=>"category")),
                new modelFieldItem(array("nombre"=>"Monto", "nombreData"=>"amount","hAlign"=>"right")),
                new modelFieldItem(array("nombre"=>"Fecha", "nombreData"=>"date","hAlign"=>"right","formato"=>"dd/mm/yyyy")),
                new modelFieldItem(array("nombre"=>"Acciones", "arrayAcciones"=>$Actions,"hAlign"=>"center","ancho"=>"150px"))
              );
              vTable($modelField, stdToArray($gastos), 0, 'tlbListado');
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
<div id="divGasto"></div>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script>
  $('#cbMonth').select2();
  new DataTable('#table', {
    order: [[0, "asc"]],
    columnDefs: [
                    {
                        "targets": [ 0 ],
                        "visible": false,
                        "searchable": false
                    }
                ],
    pageLength: 25,
    lengthMenu: [
        [10, 25, 50, -1],
        [10, 25, 50, 'All']
    ],
    language: {
      "decimal": "",
      "emptyTable": "No hay información",
      // "info": "Mostrando START a END de TOTAL Productos",
      "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
      "infoFiltered": "(Filtrado de MAX total Productos)",
      "infoPostFix": "",
      "thousands": ",",
      // "lengthMenu": "Mostrar MENU Productos",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "Sin resultados encontrados",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    },
    dom: '<"row"<"col-sm-12 col-md-4"l><"col-sm-12 col-md-4"<"dt-buttons btn-group flex-wrap"B>><"col-sm-12 col-md-4"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
    // dom: 'Bfrtip',
    "autoWidth": false,
    buttons: [
            {
                extend:    'copyHtml5',
                text:      '<i class="fa fa-files"></i>',
                titleAttr: 'Copy',
                columns: [ 0, 1, 2,3,4],
                className: 'visible-lg-inline-block btn-primary'
            },
            {
                extend: 'excelHtml5',
                title: '', // no title row in excel sheet
                text: '<i class="fa fa-file-excel"></i>',
                titleAttr: 'Excel',
                className: 'btn btn-success',
                customize: function ( xlsx ) {
                  var sheet = xlsx.xl.worksheets['sheet1.xml'];
                  $( 'row c', sheet ).attr( 's', '25' );
                },
                exportOptions : {
                  modifier : {
                    // DataTables core
                    order : 'current', // 'current', 'applied',
                    //'index', 'original'
                    page : 'all', // 'all', 'current'
                    search : 'none' // 'none', 'applied', 'removed'
                  },
                  columns: [ 0, 1, 2,3,4]
                }
            },
            {
                extend:    'csvHtml5',
                text:      '<i class="fa-solid fa-table-pivot"></i>',
                titleAttr: 'CSV',
                className: 'btn btn-warning',
                exportOptions : {
                  modifier : {
                    // DataTables core
                    order : 'current', // 'current', 'applied',
                    //'index', 'original'
                    page : 'all', // 'all', 'current'
                    search : 'none' // 'none', 'applied', 'removed'
                  },
                  columns: [ 0, 1, 2,3,4]
                }
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf"></i>',
                titleAttr: 'PDF',
                className: 'btn btn-danger',
                exportOptions : {
                  modifier : {
                    // DataTables core
                    order : 'current', // 'current', 'applied',
                    //'index', 'original'
                    page : 'all', // 'all', 'current'
                    search : 'none' // 'none', 'applied', 'removed'
                  },
                  columns: [ 0, 1, 2,3,4]
                }
            },
            {
                extend:    'print',
                text:      '<i class="fa fa-print"></i>',
                titleAttr: 'Print',
                className: 'btn btn-info',
                exportOptions : {
                  modifier : {
                    // DataTables core
                    order : 'current', // 'current', 'applied',
                    //'index', 'original'
                    page : 'all', // 'all', 'current'
                    search : 'none' // 'none', 'applied', 'removed'
                  },
                  columns: [ 0, 1, 2,3,4]
                }
            }
        ]
});
</script>
<!-- Gasto: Modal -->
<script type="text/javascript">
  function onGasto_nuevo() {
    $url = '<?php echo site_url('gasto/nuevoModal') ?>';
    $titulo = "Agregar Gasto";
    $("#pageSpin").show();
    $.ajax({
      type: 'GET',
      url: $url,
      data: { "idGasto": 0 },
      dataType: 'html',
      success: function (html) {
        $("#pageSpin").hide();
        $('#divGasto').html(html);
        $('#modal_gasto').modal('show');
        $('#modal_gasto .modal-title').text($titulo);
      }
    });
  }

  function onGasto_close() {
    $('#modal_gasto').modal('hide');
  }
</script>
<script>
  function ChangeMonth()
  {
    /* Para obtener el valor */
    var mes = document.getElementById("cbMonth").value;
    window.location.href = mes;
  }
</script>
<?= $this->endSection() ?>
