<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Products</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Products List</a>
                    </li>
                    <li class="breadcrumb-item active">Products Lists</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="row">
	<div class="col-12 text-end">
		
	</div>
	<br>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">Products Lists</h4>
				<div class="btn-section text-end">
					<a href=<?=base_url('product_page')?> class="btn  btn-success">Add Products</a>
				</div>
            </div>
            <div class="card-body">
                <?php //print_r($data);?>
				<!-- <div class="" id="#datatable-buttons"></div> -->
                <table id="userTable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Product Desc</th>
                            <th>Qty</th>
                            <th>Amount</th>
                            <th>Order</th>
                        </tr>
                    </thead>


                    <tbody>
                    
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<script>

</script>
