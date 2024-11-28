<h1 style="text-align: center;">Welcome to <?php echo $_settings->info('name') ?></h1>
<hr>
<div class="row" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
    <div class="col-md-3" style="border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: #f9f9f9;">
        <h4 style="text-align: center;">PO Records</h4>
        <p style="font-size: 18px; text-align: center; font-weight: bold;">
            <?php echo $conn->query("SELECT * FROM `purchase_order_list`")->num_rows; ?>
        </p>
    </div>
    <div class="col-md-3" style="border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: #f9f9f9;">
        <h4 style="text-align: center;">Receiving Records</h4>
        <p style="font-size: 18px; text-align: center; font-weight: bold;">
            <?php echo $conn->query("SELECT * FROM `receiving_list`")->num_rows; ?>
        </p>
    </div>
    <div class="col-md-3" style="border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: #f9f9f9;">
        <h4 style="text-align: center;">BO Records</h4>
        <p style="font-size: 18px; text-align: center; font-weight: bold;">
            <?php echo $conn->query("SELECT * FROM `back_order_list`")->num_rows; ?>
        </p>
    </div>
    <div class="col-md-3" style="border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: #f9f9f9;">
        <h4 style="text-align: center;">Return Records</h4>
        <p style="font-size: 18px; text-align: center; font-weight: bold;">
            <?php echo $conn->query("SELECT * FROM `return_list`")->num_rows; ?>
        </p>
    </div>
    <div class="col-md-3" style="border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: #f9f9f9;">
        <h4 style="text-align: center;">Sales Records</h4>
        <p style="font-size: 18px; text-align: center; font-weight: bold;">
            <?php echo $conn->query("SELECT * FROM `sales_list`")->num_rows; ?>
        </p>
    </div>
    <div class="col-md-3" style="border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: #f9f9f9;">
        <h4 style="text-align: center;">Suppliers</h4>
        <p style="font-size: 18px; text-align: center; font-weight: bold;">
            <?php echo $conn->query("SELECT * FROM `supplier_list` where `status` = 1")->num_rows; ?>
        </p>
    </div>
    <div class="col-md-3" style="border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: #f9f9f9;">
        <h4 style="text-align: center;">Items</h4>
        <p style="font-size: 18px; text-align: center; font-weight: bold;">
            <?php echo $conn->query("SELECT * FROM `item_list` where `status` = 1")->num_rows; ?>
        </p>
    </div>
    <?php if ($_settings->userdata('type') == 1): ?>
    <div class="col-md-3" style="border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: #f9f9f9;">
        <h4 style="text-align: center;">Users</h4>
        <p style="font-size: 18px; text-align: center; font-weight: bold;">
            <?php echo $conn->query("SELECT * FROM `users` where id != 1")->num_rows; ?>
        </p>
    </div>
    <?php endif; ?>
</div>
