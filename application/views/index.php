        
      <?php if($this->session->userdata('logged_in')) : ?>
      <a href="<?php echo base_url();?>create" class="btn btn-primary mb-4 float-end text-light"><i class="fa-solid fa-plus"></i> Create Product</a>
      <?php endif; ?>
            <table class="table table-striped table-bordered table-hover" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product</th>
                        <th scope="col">Custodian</th>
                        <th scope="col">Location</th>
                        <th scope="col">Cost</th>
                        <th scope="col">Property No.</th>
                        <th scope="col">Serial No.</th>
                        <th scope="col">New Custodian</th>
                        <th scope="col">Date</th>
                        <?php if($this->session->userdata('logged_in')) : ?>
                        <th scope="col">Action</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($products as $product) : ?>
                    <?php $prod_date = strtotime( $product['date_created']);
                        $prod = date( 'Y-m-d', $prod_date ); ?>
                    <tr>
                        <td><?= $product['id']; ?></td>
                        <td><?= $product['product']; ?></td>
                        <td><?= $product['custodian']; ?></td>
                        <td><?= $product['location']; ?></td>
                        <td><?= $product['cost']; ?></td>
                        <td><?= $product['property_no']; ?></td>
                        <td><?= $product['serial_no']; ?></td>
                        <td><?= $product['new_custodian']; ?></td>
                        
                        <td><?= $prod; ?></td>
                        <?php if($this->session->userdata('logged_in')) : ?>
                        <td>
                            <?php echo form_open('/products/delete/'.$product['id']); ?>
                                <a href="<?php echo base_url(); ?>products/edit/<?php echo $product['id']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>