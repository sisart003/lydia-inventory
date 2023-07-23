<!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"><?= $title; ?></h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                <?php foreach($employees as $employee) : ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <img class="card-img-top img-fluid p-2" src="<?= base_url() ?>assets/images/<?= $employee['employee_picture']; ?>" alt="Card image cap">
                            <div class="card-body">
                            <h3 class="mb-2"><small style="color: gray; font-size: 14px;">Employee ID </small><?= $employee['employee_id']; ?></h3>
                                <h3 class="card-title"><?= ucfirst($employee['first_name']) . ' ' . ucfirst($employee['last_name']); ?></h3>
                                <p> <?php echo ($employee['role'] == 1) ? "Administrator" : "Employee" ?></p>
                                <a href="<?= base_url() ?>employees/single-employee/<?= $employee['employee_id']; ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i> Employee Information</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>