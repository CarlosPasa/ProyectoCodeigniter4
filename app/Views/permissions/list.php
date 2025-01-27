<?= $this->extend('include/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Permissions
    <small>Manage user permissions</small>
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
              <?php if (hasPermissions('permissions_add')) : ?>
                <a href="<?php echo url('permissions/add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo</a>
              <?php endif ?>
            </div>
          </div>
          <div class="card-body">
            <!-- Default box -->
            <div class="box">
              <div class="box-body">
                <table id="dataTable1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Code</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach ($permissions as $row) : ?>
                      <tr>
                        <td width="60"><?php echo $row->id ?></td>
                        <td>
                          <?php echo $row->title ?>
                        </td>
                        <td>
                          <?php echo $row->code ?>
                        </td>
                        <td>
                          <?php if (hasPermissions('permissions_edit')) : ?>
                            <a href="<?php echo url('permissions/edit/' . $row->id) ?>" class="btn btn-sm btn-default" title="Edit Permission" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
                          <?php endif ?>
                          <?php if (hasPermissions('permissions_delete')) : ?>
                            <a href="<?php echo url('permissions/delete/' . $row->id) ?>" class="btn btn-sm btn-default" onclick='return confirm("Do you really want to delete this permissions ? \nIt may cause errors where it is currently being used !!")' title="Delete Permission" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                          <?php endif ?>
                        </td>
                      </tr>
                    <?php endforeach ?>

                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                Footer
              </div>
              <!-- /.box-footer-->
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
  $('#dataTable1').DataTable()
</script>
<?= $this->endSection() ?>
