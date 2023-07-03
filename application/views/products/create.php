<h1 class="mb-5"><?= $title; ?></h1>
<?php echo form_open('products/create'); ?>
<div class="row">

        <div class="mb-3 col-md-4">
            <label for="product" class="form-label">Product</label>
            <input type="text" class="form-control" id="product" name="product" value="<?php echo set_value('product'); ?>">
            <span class="text-danger"><?php echo form_error('product'); ?></span>
        </div>

        <div class="mb-3 col-md-4">
            <label for="custodian" class="form-label">Custodian</label>
            <input type="text" class="form-control" id="custodian" name="custodian" value="<?php echo set_value('custodian'); ?>">
            <span class="text-danger"><?php echo form_error('custodian'); ?></span>
        </div>

        <div class="mb-3 col-md-4">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="<?php echo set_value('location'); ?>">
            <span class="text-danger"><?php echo form_error('location'); ?></span>
        </div>

        <div class="mb-3 col-md-3">
            <label for="cost" class="form-label">Cost</label>
            <input type="text" class="form-control" id="cost" name="cost" value="<?php echo set_value('cost'); ?>">
            <span class="text-danger"><?php echo form_error('cost'); ?></span>
        </div>

        <div class="mb-3 col-md-3">
            <label for="property" class="form-label">Property No.</label>
            <input type="text" class="form-control" id="property" name="property_no" value="<?php echo set_value('property_no'); ?>">
            <span class="text-danger"><?php echo form_error('property_no'); ?></span>
        </div>

        <div class="mb-3 col-md-3">
            <label for="serial" class="form-label">Serial No.</label>
            <input type="text" class="form-control" id="serial" name="serial_no" value="<?php echo set_value('serial_no'); ?>">
            <span class="text-danger"><?php echo form_error('serial_no'); ?></span>
        </div>

    <!-- <div class="mb-3 col-md-4">
            <label for="new_custodian" class="form-label">New Custodian</label>
            <input type="text" class="form-control" id="new_custodian">
        </div> -->

        <div class="mb-3 col-md-3">
            <label for="username" class="form-label">Date</label>
            <input type="date" id="date" class="form-control" name="date_product" value="<?php echo set_value('date_product'); ?>">
            <span class="text-danger"><?php echo form_error('date_product'); ?></span>
        </div>
                    
        <div class="mb-3 col-md-3">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Product</button>
        </div>
                    
       
</div>
</form>