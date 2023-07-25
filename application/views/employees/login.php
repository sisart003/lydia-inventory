<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <?php if($this->session->flashdata('employee_logout')): ?>
          <div class="alert alert-success">
            <p><?php echo $this->session->flashdata('employee_logout'); ?></p>
          </div>  
        <?php endif; ?>

        <?php if($this->session->flashdata('loggedin_failed')): ?>
          <div class="alert alert-danger">
            <p><?php echo $this->session->flashdata('loggedin_failed'); ?></p>
          </div>  
        <?php endif; ?>
        <div class="card ">
            <div class="card-header text-center"><a href="<?= base_url(); ?>"><img class="logo-img" src="<?= base_url(); ?>assets/images/psa.png" alt="logo"></a><span class="splash-description"><?= $title; ?></span></div>
            <div class="card-body">
                <?php echo validation_errors(); ?>
                    <?php echo form_open('employees/login'); ?>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="email" type="email" name="email" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
                
                </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>