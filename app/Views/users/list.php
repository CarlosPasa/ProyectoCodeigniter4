<?= $this->extend('include/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Usuarios
    <small>manage users</small>
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
              <?php if (hasPermissions('users_add')): ?>
                <a href="<?php echo url('users/add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo</a>
              <?php endif ?>
            </div>
          </div>
          <div class="card-body">
            <table id="dataTable1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Last Login</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ($users as $row): ?>
                  <tr>
                    <td width="60"><?php echo $row->id ?></td>
                    <td width="50" class="text-center">
                      <img src="<?php echo userProfile(logged('id')->id) ?>" width="40" height="40" alt="" class="img-avtar">
                    </td>
                    <td>
                      <?php echo $row->name ?>
                    </td>
                    <td><?php echo $row->email ?></td>
                    <td><?php echo 'Admin' ?></td>
                    <td><?php echo ($row->last_login!='0000-00-00 00:00:00')?date('d M, Y', strtotime($row->last_login)):'No Record' ?></td>
                    <td>
                      <?php if (hasPermissions('users_edit')): ?>
                        <a href="<?php echo url('users/edit/'.$row->id) ?>" class="btn btn-sm btn-default" title="Edit User" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
                      <?php endif ?>
                      <?php if (hasPermissions('users_view')): ?>
                        <a href="<?php echo url('users/view/'.$row->id) ?>" class="btn btn-sm btn-default" title="View User" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                      <?php endif ?>
                      <?php if (hasPermissions('users_delete')): ?>
                        <?php if ($row->id!=1): ?>
                          <a href="<?php echo url('users/delete/'.$row->id) ?>" class="btn btn-sm btn-default" onclick="return confirm('Do you really want to delete this user ?')" title="Delete User" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                        <?php else: ?>
                          <a href="#" class="btn btn-sm btn-default" title="You cannot Delete this User" data-toggle="tooltip" disabled><i class="fa fa-trash"></i></a>
                        <?php endif ?>
                      <?php endif ?>
                    </td>
                  </tr>
                <?php endforeach ?>

              </tbody>
            </table>
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
