<?php include 'includes/header.php' ?>

<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="login-logo">
    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Admin Panel</p>
  </div>
    <p class="login-box-msg">Bienvenido a Xharles</p>

    <?php if(isset($message)): ?>
      <div class="alert alert-<?php echo $message_type ?>">
        <p><?php echo $message ?></p>
      </div>
    <?php endif; ?>

    <?php if(!empty(session()->getFlashdata('message'))): ?>
      <div class="alert alert-<?php echo session()->getFlashdata('message_type'); ?>">
        <p><?php echo session()->getFlashdata('message') ?></p>
      </div>
    <?php endif; ?>
    <?= validation_list_errors() ?>
    <?= form_open('/login/check') ?>
    <form action="<?php echo url('/login/check') ?>" method="post" autocomplete="off">
    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
        <div class="form-outline flex-fill mb-0">
          <input type="text" class="form-control" placeholder="Ingrese usuario" value="<?= set_value('username') ?>" name="username" autofocus />
          <?php echo $validation->getError('username', '<div class="error" style="color: red;">', '</div>'); ?>
        </div>
      </div>

      <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
        <div class="form-outline flex-fill mb-0">
        <input type="password" class="form-control" placeholder="Ingrese contraseña" value="<?= set_value('password') ?>" name="password">
        <?php echo $validation->getError('password', '<div class="error" style="color: red;">', '</div>'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <!--label>
              <input type="checkbox" <?php echo post('remember_me')?'checked':'' ?> name="remember_me" /> Remember Me
            </label-->
          </div>
        </div>
        <!-- /.col -->
        <?php // echo md5('admin') ?>
        <!-- Submit button -->
        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
          <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <?= form_close() ?>

    <!--a href="<?php echo url('login/forget?username='.post('username')) ?>">Forgot your password ?</a><br-->
    <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php include 'includes/footer.php' ?>
