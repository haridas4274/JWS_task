<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Users</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">User</a>
                    </li>
                    <li class="breadcrumb-item active">User Lists</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User Lists</h4>
            </div>
            <div class="card-body">
                <?php// print_r($data);?>
				<!-- <div class="" id="#datatable-buttons"></div> -->
                <table id="userTable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User Id</th>
                            <th>User Name</th>
                           
                            <th>Email</th>
                           
                            <th >Action</th>
                            <th >Action</th>
                            <th>Status</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php 
											$i=1;
											foreach ($data as $key => $val) {
												// print_r($val);
												$user_id=$val['user_id'];
												$user_status=$val['user_status'];
												?>
                        <tr>
                            <td><?=$i++ ?></td>
                            <td><?=$user_id ?></td>
                            <td><?=$val['username'] ?></td>
                            <td><?=$val['email'] ?></td>
                          
                            <td><button class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                                    data-bs-target="#useredit">Edit</button></td>
                            <td><button class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal"
                                    data-bs-target="#userdelete">Delete</button></td>

                            <td><button onclick="userStatus(<?=$user_id ?>,'<?=$user_status?>')" class="btn btn-<?php echo $val['user_status']=="active"?"success":"danger"; ?> waves-effect waves-light" ><?=$val['user_status']?></button></td>
                        </tr>

                        <!-- /////user Edit model -->
                        <div class="modal fade" id="useredit" tabindex="-1" role="dialog" aria-hidden="true"
                            data-bs-scroll="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="<?= base_url('Admin/updateuser')?>" method="POST">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit User</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <input type="hidden" name="user_id" value="<?=$user_id?>">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input"  class="form-label">User Name:</label>
                                                    <input class="form-control" type="text" name="user_name" value="<?=$val['username'] ?>"
                                                        id="example-text-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email-input" class="form-label">Email:</label>
                                                    <input class="form-control" type="email" value="<?=$val['email'] ?>"
                                                        name="user_email" id="example-email-input">
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- /////user delete model -->
                        <div class="modal fade" id="userdelete" tabindex="-1" role="dialog" aria-hidden="true"
                            data-bs-scroll="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="<?= base_url('Admin/deleteuser')?>" method="POST">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete User</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h3>Are you Sure to delete this User?</h3>
                                            <input type="hidden" name="user_id" value="<?=$user_id?>">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php } ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


