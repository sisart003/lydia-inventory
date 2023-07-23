<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="<?= base_url(); ?>assets/images/<?= $employee['employee_picture'] ?>"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h3 class="mb-2"><small style="color: gray">Employee ID </small><br><?= $employee['employee_id']; ?></h3>
            <h4 class="mb-2"><?= ucfirst($employee['first_name']).' '.ucfirst($employee['last_name']); ?></h4>
            <p class="text-muted mb-4"><?= ($employee['role'] == 1) ? "Administrator" : "Employee" ?></p>
            
            <a class="btn btn-primary text-light btn-rounded btn-lg" href="<?= base_url(); ?>employees/edit_employee/<?= $employee['id']; ?>">
              Update Employee
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>