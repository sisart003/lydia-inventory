                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header">New Product Form</h3>
                            <div class="card-body">
                            <?php echo validation_errors(); ?>
                                <form action="create" method="post" class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-4">
                                            <label for="Custodian">Custodian</label>
                                            <input type="text" class="form-control" id="Custodian" name="custodian" value="<?php echo set_value('custodian'); ?>" required>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('custodian'); ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-4">
                                            <label for="newCustodian">New Custodian</label>
                                            <input type="text" class="form-control" id="newCustodian" name="new_custodian" value="<?= set_value('new_custodian'); ?>" required>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('new_custodian'); ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-4">
                                            <label for="productsDesec">Products Description</label>
                                            <input type="text" class="form-control" id="productsDesec" name="product_desc" value="<?= set_value('product_desc'); ?>" required>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('product_desc'); ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-4">
                                            <label for="Location">Location</label>
                                            <input type="text" class="form-control" id="Location" name="location" value="<?= set_value('location'); ?>" required>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('location'); ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-4">
                                            <label for="property_no">Property No.</label>
                                            <input type="number" class="form-control" id="property_no" name="property_no" value="<?= set_value('property_no'); ?>" required>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('property_no'); ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-4">
                                            <label for="serial_no">Serial No.</label>
                                            <input type="number" class="form-control" id="serial_no" name="serial_no" value="<?= set_value('serial_no'); ?>" required>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('serial_no'); ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-4">
                                            <label for="atn_no">ATN No.</label>
                                            <input type="number" class="form-control" id="atn_no" name="atn_no" value="<?= set_value('atn_no'); ?>" required>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('atn_no'); ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-4">
                                            <label for="date">Date</label>
                                            <input type="date" class="form-control" id="date" name="prod_date" value="<?= set_value('prod_date'); ?>" required>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('prod_date'); ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-4">
                                            <label for="cost">Cost</label>
                                            <input type="number" class="form-control" id="cost" name="cost" value="<?= set_value('cost'); ?>" required>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('cost'); ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-4">
                                            <label for="remarks">Remarks</label>
                                            <input type="text" class="form-control" id="remarks" name="remarks" value="<?= set_value('remarks'); ?>" required>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('remarks'); ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <button class="btn btn-primary" type="submit">Create Product</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>