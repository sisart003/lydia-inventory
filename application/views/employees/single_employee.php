<section  style="background-color: #f4f5f7;">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-8 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-3 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="<?= base_url() ?>assets/images/<?= $employee['employee_picture']; ?>"
                alt="Avatar" class="img-fluid my-5" style="width: 100px;" />
              <h4><?= $employee['first_name']. ' ' .$employee['last_name'];?></h4>
              <p class="text-dark"> <?php echo ($employee['role'] == 1) ? "Administrator" : "Employee" ?></p>
              <a href="<?= base_url(); ?>employees/manage_password/<?= $employee['id']; ?>" class="btn btn-success m-3">Manage Password</a>
            </div>
            <div class="col-md-9">
              <div class="card-body p-4">
                <h3>Information</h3>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-5">
                    <h5>Email</h5>
                    <p class="text-muted"><?= $employee['email']; ?></p>
                  </div>
                  <div class="col-6 mb-5">
                    <h5>Phone</h5>
                    <p class="text-muted"><?= $employee['contact']; ?></p>
                  </div>
                  <div class="col-5 mb-3">
                    <a href="<?= base_url() ?>employees/edit_employee/<?= $employee['id']; ?>" class="btn btn-primary">Update Account</a>
                  </div>
                  <div class="col-5 mb-3">
                  <a href="<?= base_url() ?>employees/delete_confirmation/<?= $employee['id']; ?>" class="btn btn-danger">Delete Account</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>