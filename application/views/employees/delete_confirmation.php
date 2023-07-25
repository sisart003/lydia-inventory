
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mx-auto">
                        <div class="card">
                        <a href="<?= base_url() ?>employees/single-employee/<?= $employee['id'];?>" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
                            <img class="card-img-top img-fluid p-2" src="<?= base_url() ?>assets/images/<?= $employee['employee_picture']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <?php if($this->session->userdata('id') === $employee['id']): ?>
                                    <h5>You Can't Delete Your Own Account</h5>
                                <?php else: ?>
                                    <h4 class="card-title">Are you sure you want to delete?</h4>
                                    <a href="<?= base_url() ?>employees/delete_employee/<?= $employee['id'];?>" class="btn btn-danger mb-4"><i class="fa-solid fa-trash"></i> Confirm Delete</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>