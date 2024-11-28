<div class="modal fade" id="usermodal" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adding or Updating User.</h5>
                    <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                    </button>
                </div>
                <form id="addform" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                    <!--for name-->
                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="bi bi-person-circle text-light"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter for user name" autocomplete="off" required="required" id="username" name="username">
                        </div>
                    </div>

                     <!--for email-->
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="bi bi-envelope-paper text-light"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Enter for email" autocomplete="off" required="required" id="email" name="email">
                        </div>
                    </div>

                     <!--for Mobile Number-->
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="bi bi-phone text-light"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter for mobile number" autocomplete="off" required="required" id="mobile" name="mobile" maxLength="11" minLength="11">
                        </div>
                    </div>

                    <!--for photo-->
                    <div class="form-group">
                        <label>Image</label>
                        <div class="input-group">
                            <label class="custom-file-label" for="userphoto">Choose File</label>                            
                            <input type="file" class="custom-file-input" name="photo" id="userphoto">
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>