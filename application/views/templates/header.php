<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inventory</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
      </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="<?= base_url(); ?>">Inventory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <?php if($this->session->userdata('logged_in')) : ?>
            <p class="nav-link text-light"><?= ucfirst($this->session->userdata('user_level')); ?></p>
            <?php endif; ?>
        </li>
        <?php if($this->session->userdata('logged_in')) : ?>
        <li class="nav-item">
          <a class="nav-link  text-light" href="<?= base_url(); ?>users/logout">Logout</a>
        </li>
        <?php endif; ?>
      </ul>
      <?php if($this->session->userdata('logged_in')) : ?>
      <a href="<?php echo base_url();?>create" class="btn btn-light me-5 text-primary"><i class="fa-solid fa-plus"></i> Create Product</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
        <div class="container-fluid mt-5">

        <?php if($this->session->flashdata('product_created')): ?>
          <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <p><?php echo $this->session->flashdata('product_created'); ?></p>
          </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('product_updated')): ?>
          <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <p><?php echo $this->session->flashdata('product_updated'); ?></p>
          </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('product_deleted')): ?>
          <div class="alert alert-dismissible alert-danger">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <p><?php echo $this->session->flashdata('product_deleted'); ?></p>
          </div>  
        <?php endif; ?>

        <?php if($this->session->flashdata('user_registered')): ?>
          <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <p><?php echo $this->session->flashdata('user_registered'); ?></p>
          </div>  
        <?php endif; ?>

        <?php if($this->session->flashdata('user_logout')): ?>
          <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <p><?php echo $this->session->flashdata('user_logout'); ?></p>
          </div>  
        <?php endif; ?>

        <?php if($this->session->flashdata('must_login')): ?>
          <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <p class="text-center"><?php echo $this->session->flashdata('must_login'); ?></p>
          </div>  
        <?php endif; ?>