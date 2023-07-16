<div class="container-fluid dashboard-content">
<!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Products
                                <span class="float-right">
                                    <?php if($this->session->userdata('logged_in')) { ?>
                                        <a href="<?php echo base_url();?>products/create" class="btn btn-primary mb-4 float-end text-light"><i class="fa-solid fa-plus"></i> Create New Product</a>
                                    <?php } ?>
                                </span>
                            </h2>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                                    
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Custodian</th>
                                                <th>New Custodian</th>
                                                <th>Product Description</th>
                                                <th>Location</th>
                                                <th>Property No.</th>
                                                <th>Serial No.</th>
                                                <th>ATN No.</th>
                                                <th>Date</th>
                                                <th>Cost</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($products as $product) : ?>
                                                <?php $prod_date = strtotime( $product['date_created']);
                                                    $prod = date( 'Y-m-d', $prod_date ); ?>
                                            <tr>
                                                <td><?= $product['custodian']; ?></td>
                                                <td><?= $product['new_custodian']; ?></td>
                                                <td><?= $product['product_desc']; ?></td>
                                                <td><?= $product['location']; ?></td>
                                                <td><?= $product['property_no']; ?></td>
                                                <td><?= $product['serial_no']; ?></td>
                                                <td><?= $product['atn_no']; ?></td>
                                                <td><?= $product['date']; ?></td>
                                                <td><?= $product['cost']; ?></td>
                                                <td><?= $product['remarks']; ?></td>
                                                <td>
                                                <?php echo form_open('/products/delete/'.$product['id']); ?>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-success"><a href="<?= base_url(); ?>products/edit/<?php echo $product['id']; ?>" class="text-light"><i class="fa-regular fa-pen-to-square"></i> Edit</a></button>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                                                      </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>