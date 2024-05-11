<?= $this->extend('include/admin_template') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Permissions
    <small>manage permissions</small>
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

              <?php echo form_open_multipart('permissions/save', ['class' => 'form-validate']); ?>
              <div class="box-body">

                <div class="form-group">
                  <label for="formClient-Name">Name</label>
                  <input type="text" class="form-control" name="name" id="formClient-Name" required placeholder="Enter Name" autofocus />
                </div>

                <div class="form-group">
                  <label for="formClient-Code">Code</label>
                  <input type="text" class="form-control" data-rule-remote="<?php echo url('permissions/checkIfUnique') ?>" name="code" id="formClient-Code" required placeholder="Enter Code" autofocus />
                  <p style="color: red;">* code must be unique</p>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-flat btn-primary">Submit</button>
              </div>
              <!-- /.box-footer-->

              <?php echo form_close(); ?>

            </div>
            <!-- /.box -->
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
  $(document).ready(function() {
    // $('.form-validate').validate();

    $('.check-select-all-p').on('change', function() {

      $('.check-select-p').attr('checked', $(this).is(':checked'));

    })

    $('.table-DT').DataTable({
      "ordering": false,
    });
  })
</script>

<script>
  //Initialize Select2 Elements
  $('.select2').select2()
</script>
<?= $this->endSection() ?>