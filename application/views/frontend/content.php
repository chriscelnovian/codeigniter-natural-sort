<!-- Content -->
<div class="container-fluid">
    <div class="row">
        <div class="content-page">

            <!-- Data Header -->
            <div class="content-header">

                <!-- Data Header Title -->
                <h4 class="card-title">Room Data</h4>

                <!-- Button Add Room -->
                <button class="btn btn-primary content-btn-add" type="submit" data-toggle="modal" data-target="#modalAddRoom">
                    Add
                </button>

                 <!-- Modal Add Room -->
                <div id="modalAddRoom" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="col-12 modal-title text-center">
                                    <span>Add Room</span>
                                    <button class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                </h4>	
                            </div>
                        
                            <!-- Modal Body -->
                            <div class="modal-body"> 
                                <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('home/add_room');?>">

                                    <!-- Room Name -->
                                    <div class="col-12">
                                        <input type="text" name="roomName" class="form-control" required>
                                    </div>

                                    <br>

                                    <!-- Button Add -->
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary content-btn-add">Add</button>
                                    </div>
                                    
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Data Content -->
            <div class="row">

                <!-- Original Sort -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <table class="table table-bordered table-striped">
                        
                        <!-- Table Head -->
                        <thead class="thead-light text-center">
                            <tr><th colspan="3">Original Sort</th></tr>
                            <tr>
                                <th class="content-table-no">#</th>
                                <th class="content-table-name">Name</th>
                                <th class="content-table-action">Action</th>
                            </tr>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                            <?php foreach($room_list as $key => $room) { ?>

                            <tr>
                                <!-- Order Number -->
                                <td class="align-middle text-center"><?php echo $key + 1; ?></td>

                                <!-- Room Name -->
                                <td class="align-middle"><?php echo $room['name'];?></td>

                                <!-- Action Menu -->
                                <td class="align-middle d-flex justify-content-center">
                                    
                                    <!-- Edit -->
                                    <button class="btn btn-sm btn-primary mr-4 px-3" data-toggle="modal" data-target="#modalEditRoom<?php echo $room['id']; ?>">
                                        Edit
                                    </button>

                                    <!-- Delete -->
                                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalDeleteRoom<?php echo $room['id'];?>">
                                        Delete
                                    </button>

                                </td>

                                <!-- Modal Edit Room -->
                                <div id="modalEditRoom<?php echo $room['id']; ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="col-12 modal-title text-center">
                                                    Edit Room
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                    <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </h4>	
                                            </div>
                                        
                                            <!-- Modal Body -->
                                            <div class="modal-body"> 
                                                <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('home/edit_room'.'/'.$room['id']);?>">

                                                    <!-- Room Name -->
                                                    <div class="col-12">
                                                        <input type="text" name="roomName" class="form-control" value="<?php echo $room['name']; ?>" required>
                                                    </div>

                                                    <br>

                                                    <!-- Button Update-->
                                                    <div class="form-group text-center">
                                                        <button class="btn btn-primary">Update</button>
                                                    </div>
                                        
                                                </form> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Delete Room -->
                                <div id="modalDeleteRoom<?php echo $room['id']; ?>" class="modal fade">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body"> 
                                                <h4 class="text-center mb-5">Are you sure want to delete?</h4>
                                                <div class="d-flex justify-content-center">
                                                    <a class="mr-5" href="<?php echo site_url('home/delete_room'.'/'.$room['id']);?>">
                                                        <button class="btn btn-danger">Delete</button>
                                                    </a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>                                     
                                        </div>
                                    </div>
                                </div>

                            </tr>

                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
                
                <!-- Natural Sort -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <table class="table table-bordered table-striped">
                        
                        <!-- Table Head -->
                        <thead class="thead-light text-center">
                            <tr><th colspan="3">Natural Sort</th></tr>
                            <tr>
                                <th class="content-table-no">#</th>
                                <th class="content-table-name">Name</th>
                                <th class="content-table-action">Action</th>
                            </tr>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                            <?php foreach($natural_room_list as $key => $natural_room) { ?>

                            <tr>
                                <!-- Order Number -->
                                <td class="align-middle text-center"><?php echo $key + 1; ?></td>

                                <!-- Room Name -->
                                <td class="align-middle"><?php echo $natural_room['name'];?></td>

                                <!-- Action Menu -->
                                <td class="align-middle d-flex justify-content-center">
                                    
                                    <!-- Edit -->
                                    <button class="btn btn-sm btn-primary mr-4 px-3" data-toggle="modal" data-target="#modalEditRoom<?php echo $natural_room['id']; ?>">
                                        Edit
                                    </button>

                                    <!-- Delete -->
                                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalDeleteRoom<?php echo $natural_room['id'];?>">
                                        Delete
                                    </button>

                                </td>
                            </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>