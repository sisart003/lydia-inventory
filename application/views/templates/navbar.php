<!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Products
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= base_url(); ?>" ><i class="fa-solid fa-list"></i>Products List</a>
                                <a class="nav-link" href="<?= base_url() ?>products/create" ><i class="fa-solid fa-plus"></i>Create New Product</a>
                            </li>
                            <?php if($this->session->userdata('role') == 1): ?>
                            <li class="nav-divider">
                                Employees
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= base_url(); ?>employees/view_all_employees" ><i class="fa-solid fa-users"></i>View All Employees</a>
                                <a class="nav-link" href="<?= base_url(); ?>employees/register" ><i class="fa-solid fa-user-plus"></i>Register New Employee</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">

            <?php if($this->session->flashdata('employee_loggedin')): ?>
                <div class="card-body border-top">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('employee_loggedin'); ?>
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($this->session->flashdata('must_login')): ?>
                <div class="card-body border-top">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('must_login'); ?>
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($this->session->flashdata('product_created')): ?>
                <div class="card-body border-top">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('product_created'); ?>
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($this->session->flashdata('product_updated')): ?>
                <div class="card-body border-top">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('product_updated'); ?>
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($this->session->flashdata('product_deleted')): ?>
                <div class="card-body border-top">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('product_deleted'); ?>
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($this->session->flashdata('employee_updated')): ?>
                <div class="card-body border-top">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('employee_updated'); ?>
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>