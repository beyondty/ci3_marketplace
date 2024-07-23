<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Order</a></li>
                        <li class="breadcrumb-item active"><?php echo $action;?></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
            <h4 class="text-primary mb-3">Order</h4>
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Customer Name</th>
                            <th>Total Price</th>
                            <th>Province</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Post Code</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $index => $order): ?>
                            <tr>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo $order->customer_name; ?></td>
                                <td>Rp <?php echo number_format($order->total_price, 0, ',', '.'); ?></td>
                                <td><?php echo $order->province; ?></td>
                                <td><?php echo $order->city; ?></td>
                                <td><?php echo $order->address; ?></td>
                                <td><?php echo $order->post_code; ?></td>
                                <td><?php echo $order->created_at; ?></td>
                                <td><a href="<?php echo site_url('admin/order/details/' . $order->id); ?>" class="btn btn-outline-secondary btn-sm details"><i class="mdi mdi-details"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="<?php echo base_url();?>assets/table/dataTables.bootstrap4.css">

<script src="<?php echo base_url();?>assets/table/jquery.js"></script>
<script src="<?php echo base_url();?>assets/table/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/table/dataTables.js"></script>
<script src="<?php echo base_url();?>assets/table/dataTables.bootstrap4.js"></script>

<script>
    $(document).ready(function () {
        new DataTable('#datatable');
    });
</script>