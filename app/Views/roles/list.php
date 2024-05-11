<?= $this->extend('include/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Roles
    <small>Manage user roles</small>
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
              <?php if (hasPermissions('roles_add')): ?>
                <a href="<?php echo url('roles/add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo</a>
              <?php endif ?>
            </div>
          </div>
          <div class="card-body">
  <div class="box">
    <div class="box-body">
      <table id="dataTable1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($roles as $row): ?>
            <tr>
              <td width="60"><?php echo $row->id ?></td>
              <td>
                <?php echo $row->title ?>
              </td>
              <td>
                <?php if (hasPermissions('roles_edit')): ?>
                  <a href="<?php echo url('roles/edit/'.$row->id) ?>" class="btn btn-sm btn-default" title="Edit User Role" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
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
