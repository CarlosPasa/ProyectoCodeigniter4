<?= $this->extend('include/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		User
		<small>manage user</small>
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header d-flex p-0">
						<h3 class="card-title p-3">Información	</h3>
						<ul class="nav nav-pills ml-auto p-2">
							<li class="nav-item"><a class="nav-link" href="#tab_1" data-toggle="tab">Información general</a></li>
							<li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Actividad</a></li>
							<?php if (hasPermissions('users_edit')) : ?>
								<li class="nav-item"><a  class="nav-link" href="<?php echo url('users/edit/' . $User->id) ?>">Edit Profile</a></li>
							<?php endif ?>
							<a href="<?php echo url('/'.$return_url) ?>" class="btn btn-flat btn-default">
								<i class="fa fa-arrow-left"></i> &nbsp;&nbsp; Regresar
							</a>
						</ul>
					</div>
					<!-- Custom Tabs -->
					<div class="card-body">
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<div class="row">
									<div class="col-sm-2" style="padding-left: 50px;">
										<br>
										<img src="<?php echo userProfile($User->id) ?>" width="150" class="img-circle" alt="">
										<br>
									</div>
									<div class="col-sm-10" style="padding-left: 50px;">
										<table class="table table-bordered table-striped">
											<tbody>
												<tr>
													<td width="160"><strong>Name</strong>:</td>
													<td><?php echo $User->name ?></td>
												</tr>
												<tr>
													<td><strong>Email</strong>:</td>
													<td><?php echo $User->email ?></td>
												</tr>
												<tr>
													<td><strong>Phone</strong>:</td>
													<td><?php echo $User->phone ?></td>
												</tr>
												<tr>
													<td><strong>Last Login</strong>:</td>
													<td><?php echo ($User->last_login != '0000-00-00 00:00:00') ? date('H:i a - d F, Y', strtotime($User->last_login)) : 'No Record' ?></td>
												</tr>
												<tr>
													<td><strong>username</strong>:</td>
													<td><?php echo $User->username ?></td>
												</tr>
												<tr>
													<td><strong>Role</strong>:</td>
													<td><?php echo $User->role->title ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_2">

								<table id="dataTable1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Id</th>
											<th>IP Address</th>
											<th>Message</th>
											<th>Date Time</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

										<?php foreach ($User->activity as $row) : ?>
											<tr>
												<td width="60"><?php echo $row->id ?></td>
												<td><?php echo !empty($row->ip_address) ? '<a href="' . url('activity_logs/index?ip=' . urlencode($row->ip_address)) . '">' . $row->ip_address . '</a>' : 'N.A' ?></td>
												<td>
													<a href="<?php echo url('activity_logs/view/' . $row->id) ?>"><?php echo $row->title ?></a>
												</td>
												<td><?php echo date('d M, Y', strtotime($row->created_at)) ?></td>
												<td>
													<a href="<?php echo url('activity_logs/view/' . $row->id) ?>" class="btn btn-sm btn-default" title="View Activity" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
										<?php endforeach ?>

									</tbody>
								</table>

							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_3">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
								when an unknown printer took a galley of type and scrambled it to make a type specimen book.
								It has survived not only five centuries, but also the leap into electronic typesetting,
								remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
								sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
								like Aldus PageMaker including versions of Lorem Ipsum.
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- nav-tabs-custom -->
				</div>
			</div>
</section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
	$('#dataTable1').DataTable({
		"order": []
	});
</script>
<?= $this->endSection() ?>
