<!-- Add New Category Modal -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addCategoryLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="addCategoryLabel"><b>Add New Category</b></h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="category_add.php">
                    <!-- Category Name -->
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
                        </div>
                    </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">
                    <i class="fa fa-close"></i> Close
                </button>
                <button type="submit" class="btn btn-primary btn-flat" name="add">
                    <i class="fa fa-save"></i> Save
                </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Category Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editCategoryLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="editCategoryLabel"><b>Edit Category</b></h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="category_edit.php">
                    <!-- Hidden Category ID -->
                    <input type="hidden" class="catid" name="id">

                    <!-- Name Field -->
                    <div class="form-group">
                        <label for="edit_name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter category name" required>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
                    <i class="fa fa-close"></i> Close
                </button>
                <button type="submit" class="btn btn-success btn-flat" name="edit">
                    <i class="fa fa-check-square-o"></i> Update
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Delete -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="deleteModalLabel"><i class="fa fa-trash"></i> Confirm Deletion</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="category_delete.php">
        <div class="modal-body text-center">
          <input type="hidden" class="catid" name="id">
          <p>Are you sure you want to delete this category?</p>
          <h4 id="del_cat" class="text-danger font-weight-bold"></h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
          <button type="submit" class="btn btn-danger" name="delete"><i class="fa fa-trash"></i> Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>



     