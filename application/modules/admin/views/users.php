
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active"><?php echo $title;?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add User</button>
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <form>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username">
            </div> 
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">
            </div> 
            <div class="form-group">
                <label>password</label>
                <input type="text" class="form-control" name="password">
            </div> 
            <div class="form-group">
                <label>Username</label>
                <select class="form-control" name="user_type">
                    <option value="">Please Select One</option>
                    <option value="Admin">Admin</option>
                    <option value="Something Else">Something Else</option>
                </select>
            </div> 

            <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-success" style="float:right;">


            </div>


         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
                    <!-- end model -->
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Users Data</strong>
                        </div>
                        <div class="card-body">
                 <table id="user_table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>

              </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->