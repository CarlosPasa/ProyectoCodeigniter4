<?= $this->extend('include/admin_template') ?>
<?= $this->section('content') ?>

<!-- Main content -->
<section class="content-header">
  <h1>
    Setings
  </h1>
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title"><?php echo $accion; ?></h3>
          </div>
          <div class="card-body">
            <?php echo form_open('settings/companyUpdate', ['class' => 'form-validate', 'autocomplete' => 'off', 'method' => 'post']); ?>
            <div class="box-body">

              <div class="form-group">
                <label for="formSetting-Company-Name">Company Name</label>
                <input type="text" class="form-control" name="company_name" id="formSetting-Company-Name" value="<?php echo setting('company_name') ?>" required placeholder="Enter Company Name" autofocus />
              </div>

              <div class="form-group">
                <label for="formSetting-Company-Name">TimeZone</label>
                <select name="timezone" id="timezone" class="form-control select2">
                  <?php $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL); ?>
                  <?php foreach ($tzlist as $key => $value) : ?>
                    <?php $sel = setting('timezone') == $value ? 'selected' : ''; ?>
                    <option value="<?php echo $value ?>" <?php echo $sel ?>><?php echo $value ?></option>
                  <?php endforeach ?>
                </select>
              </div>

              <div class="form-group">
                <label for="formSetting-Company-Email">Company Email</label>
                <input type="text" class="form-control" name="company_email" id="formSetting-Company-Email" value="<?php echo setting('company_email') ?>" required placeholder="Enter Company Email" autofocus />
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

<script>
  $(document).ready(function() {
    // $('.form-validate').validate();

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
</script>

<?= $this->endSection() ?>