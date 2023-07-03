<h1 class="mb-5"><?= $title; ?></h1>
<?php echo form_open('products/update'); ?>
<div class="row">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <div class="mb-3 col-md-4">
            <label for="product" class="form-label">Product</label>
            <input type="text" class="form-control" id="product" name="product" value="<?= $product['product']; ?>">
            <span class="text-danger"><?php echo form_error('product'); ?></span>
        </div>

        <div class="mb-3 col-md-4">
            <label for="custodian" class="form-label">Custodian</label>
            <input type="text" class="form-control" id="custodian" value="<?= $product['custodian']; ?>" disabled readonly>
        </div>

        <div class="mb-3 col-md-4">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="<?= $product['location']; ?>">
            <span class="text-danger"><?php echo form_error('location'); ?></span>
        </div>

        <div class="mb-3 col-md-3">
            <label for="cost" class="form-label">Cost</label>
            <input type="text" class="form-control" id="cost" name="cost" value="<?= $product['cost']; ?>">
            <span class="text-danger"><?php echo form_error('cost'); ?></span>
        </div>

        <div class="mb-3 col-md-3">
            <label for="property" class="form-label">Property No.</label>
            <input type="text" class="form-control" id="property" name="property_no" value="<?= $product['property_no']; ?>">
            <span class="text-danger"><?php echo form_error('property_no'); ?></span>
        </div>

        <div class="mb-3 col-md-3">
            <label for="serial" class="form-label">Serial No.</label>
            <input type="text" class="form-control" id="serial" name="serial_no" value="<?= $product['serial_no']; ?>">
            <span class="text-danger"><?php echo form_error('serial_no'); ?></span>
        </div>

        <div class="mb-3 col-md-3">
            <label for="new_custodian" class="form-label">New Custodian</label>
            <input type="text" id="new_custodian" class="form-control" name="new_custodian" value="<?= $product['new_custodian']; ?>">
            <span class="text-danger"><?php echo form_error('new_custodian'); ?></span>
        </div>
                    
        <div class="mb-3 col-md-3">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Update Product</button>
        </div>
                    
       
</div>
</form>