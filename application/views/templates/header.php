<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://rsso05.psa.gov.ph/sites/default/files/Philippine_Statistics_Authority.png" type="image/x-icon">
     <title>

        <?php echo ($title) ? "PMS Inventory | ".$title : "PMS Inventory" ?>
     </title>
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-light fixed-top">
                <a class="navbar-brand" href="<?= base_url(); ?>"> <img src="https://rsso05.psa.gov.ph/sites/default/files/Philippine_Statistics_Authority.png" style="height: 50px; width: 50px;"> PMS Inventory</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <?php if($this->session->userdata('logged_in')): ?>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url(); ?>assets/images/<?= $this->session->userdata('employee_picture'); ?>" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?= ucfirst($this->session->userdata('first_name')). ' ' .ucfirst($this->session->userdata('last_name')); ?> </h5>
                                    <span class="status"></span><span class="ml-2"><?php echo ($this->session->userdata('role') == 1) ? "Administrator" : "User" ?></span>
                                </div>
                                <!-- if account is equal to 1 -->
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Dashboard</a>
                                <!--  -->
                                <a class="dropdown-item" href="<?= base_url() ?>employees/logout"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                          
                        <?php endif; ?>
                    </ul>
                </div>
                
            </nav>
        </div>

        