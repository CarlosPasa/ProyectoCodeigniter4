<?= $this->extend('include/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Roles
    <small>Manage roles</small>
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
            <?php echo form_open_multipart('roles/save', ['class' => 'form-validate']); ?>
            <div class="box-body">

              <div class="form-group">
                <label for="formClient-Name">Name</label>
                <input type="text" class="form-control" name="name" id="formClient-Name" required placeholder="Enter Name" autofocus />
              </div>

              <div class="form-group">
                <label for="formClient-Table">Permission</label>
                <div class="row">
                  <div class="col-sm-6">
                    <table class="table table-bordered table-striped table-DT">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th width="50" class="text-center"><input type="checkbox" class="check-select-all-p"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (!empty($permissions)) : ?>
                          <?php foreach ($permissions as $row) : ?>
                            <tr>
                              <td><?php echo ucfirst($row->title) ?></td>
                              <td width="50" class="text-center"><input type="checkbox" class="check-select-p" name="permission[]" value="<?php echo $row->code ?>"></td>
                            </tr>
                          <?php endforeach ?>
                        <?php else : ?>
                          <td colspan="2" class="text-center">No Permissions Found</td>
                          </tr>
                        <?php endif ?>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-flat btn-primary">Submit</button>
            </div>
            <!-- /.box-footer-->

            <?php echo form_close(); ?>

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
