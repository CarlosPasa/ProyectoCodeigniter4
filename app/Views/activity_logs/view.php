<?= $this->extend('include/admin_template') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Activity Logs
		<small>manage activity logs</small>
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

						<table class="table table-bordered table-striped">
							<thead>
							</thead>
							<tbody>

								<tr>
									<td width="150">Id: </td>
									<td><strong><?php echo $activity->id ?></strong></td>
								</tr>

								<tr>
									<td>Message: </td>
									<td><strong><?php echo $activity->title ?></strong></td>
								</tr>

								<tr>
									<td>User: </td>
									<?php $User = $users_model->getById($activity->user) ?>
									<td><strong><?php echo $activity->user > 0 ? $User->name : '' ?></strong> <a href="<?php echo url('users/view/' . $User->id) ?>" target="_blank"><i class="fa fa-eye"></i></a></td>
								</tr>

								<tr>
									<td>Date Time: </td>
									<td><strong><?php echo date('h:m a - d M, Y', strtotime($activity->created_at)) ?></strong></td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>