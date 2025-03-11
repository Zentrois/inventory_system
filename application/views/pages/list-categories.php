<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">List Catrgories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


            <?php 
            if($this->session->flashdata("success")){
            ?>

            <div class="alert alert-success">
              <?php $this->session->flashdata("success") ?>
            </div>

            <?php  
            } ?>

            <?php 
            if($this->session->flashdata("error")){
            ?>

            <div class="alert alert-danger">
              <?php $this->session->flashdata("error") ?>
            </div>

            <?php  
            } ?>
           
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">List Categories</h3>
                <button type="button" class="btn text-light btn-warning ml-auto" data-toggle="modal" data-target="#modal-form-add-category">
                  Add Category
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="list-categories-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr No</th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                    </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr No</th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Add Category Form Modal -->
<div class="modal fade" id="modal-form-add-category">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="javascript:void(0)" class="validate-custom-form-error" method="POST" id="form-add-category">
            <div class="card-body">
              <div class="form-group">
                <label for="category-name">Category Name</label>
                <input type="text" class="form-control" id="category-name" placeholder="" name="category_name" required>
              </div>
              <div class="form-group">
                <label for="category-status">Status</label>
                <select class="form-control" id="category-status" name="category_status">
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>
                </select>
              </div>
            </div>
          </form>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" form="form-add-category">
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->