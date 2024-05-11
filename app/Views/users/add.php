<?= $this->extend('include/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    User
    <small>manage users</small>
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
            <?php echo form_open_multipart('users/save', ['class' => 'form-validate', 'autocomplete' => 'off']); ?>
            <div class="row">
              <div class="col-sm-6">
                <!-- Default box -->
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Basic Details</h3>
                  </div>
                  <div class="box-body">

                    <div class="form-group">
                      <label for="formClient-Name">Name</label>
                      <input type="text" class="form-control" name="name" id="formClient-Name" required placeholder="Enter Name" onkeyup="$('#formClient-Username').val(createUsername(this.value))" autofocus />
                    </div>

                    <div class="form-group">
                      <label for="formClient-Username">Username</label>
                      <input type="text" class="form-control" data-rule-remote="<?php echo url('users/check') ?>" data-msg-remote="Username Already taken" name="username" id="formClient-Username" required placeholder="Enter Username" />
                    </div>

                    <div class="form-group">
                      <label for="formClient-Contact">Contact Number</label>
                      <input type="text" class="form-control" name="phone" id="formClient-Contact" placeholder="Enter Contact Number" />
                    </div>

                  </div>
                  <!-- /.box-body -->

                </div>
                <!-- /.box -->

                <!-- Default box -->
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Login Details</h3>
                  </div>
                  <div class="box-body">

                    <div class="form-group">
                      <label for="formClient-Email">Email</label>
                      <input type="email" class="form-control" name="email" data-rule-remote="<?php echo url('users/check') ?>" data-msg-remote="Email Already Exists" id="formClient-Email" required placeholder="Enter email">
                    </div>

                    <div class="form-group">
                      <label for="formClient-Password">Password</label>
                      <input type="password" class="form-control" name="password" id="formClient-Password" required placeholder="Password">
                    </div>

                  </div>
                  <!-- /.box-body -->

                </div>
                <!-- /.box -->

              </div>
              <div class="col-sm-6">
                <!-- Default box -->
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Other Details</h3>
                  </div>
                  <div class="box-body">

                    <div class="form-group">
                      <label for="formClient-Address">Address</label>
                      <textarea type="text" class="form-control" name="address" id="formClient-Address" placeholder="Enter Address" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="formClient-Role">Role</label>
                      <select name="role" id="formClient-Role" class="form-control select2" required>
                        <option value="">Select Role</option>
                        <?php foreach ($roles as $row) : ?>
                          <?php $sel = !empty(get('role')) && get('role') == $row->id ? 'selected' : '' ?>
                          <option value="<?php echo $row->id ?>" <?php echo $sel ?>><?php echo $row->title ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>

                  </div>
                  <!-- /.box-body -->

                </div>
                <!-- /.box -->

                <!-- Default box -->
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Profile Image</h3>
                  </div>
                  <div class="box-body">

                    <div class="form-group">
                      <label for="formClient-Image">Image</label>
                      <input type="file" class="form-control" name="image" id="formClient-Image" placeholder="Upload Image" accept="image/*" onchange="previewImage(this, '#imagePreview')">
                    </div>
                    <div class="form-group" id="imagePreview">
                      <img src="<?php echo userProfile('default') ?>" class="img-circle" alt="Uploaded Image Preview" width="100" height="100">
                    </div>

                  </div>
                  <!-- /.box-body -->

                </div>
                <!-- /.box -->

              </div>
            </div>

            <!-- Default box -->
            <div class="box">
              <div class="box-footer">
                <button type="submit" class="btn btn-flat btn-primary">Submit</button>
              </div>
              <!-- /.box-footer-->

            </div>
            <!-- /.box -->

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
      $('.form-validate').validate();

      //Initialize Select2 Elements
      $('.select2').select2()

    })

    function previewImage(input, previewDom) {

      if (input.files && input.files[0]) {

        $(previewDom).show();

        var reader = new FileReader();

        reader.onload = function(e) {
          $(previewDom).find('img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      } else {
        $(previewDom).hide();
      }

    }

    function createUsername(name) {
      return name.toLowerCase()
        .replace(/ /g, '_')
        .replace(/[^\w-]+/g, '');;
    }
  </script>

<?= $this->endSection() ?>