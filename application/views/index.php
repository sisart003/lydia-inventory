        <?php if($this->session->userdata('logged_in')) : ?>
            <h1>"Welcome to <?= $this->session->userdata('user_level'); ?>"</h1>
          <?php endif; ?>
            <table class="table table-striped table-bordered">
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
                        <th scope="col" colspan="2">Action</th>
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
                        <td>
                            <?php echo form_open('/products/delete/'.$product['id']); ?>
                                <a href="<?php echo base_url(); ?>products/edit/<?php echo $product['id']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>