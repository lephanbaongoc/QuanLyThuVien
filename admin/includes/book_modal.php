<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add New Book</b></h4>
          	</div>
          	<div class="modal-body">
                <form class="form-horizontal" method="POST" action="book_add.php">
                    <!-- ISBN -->
                    <div class="form-group">
                        <label for="isbn" class="col-sm-3 control-label">ISBN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Enter ISBN" required>
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="form-group">
                        <label for="title" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="title" name="title" placeholder="Enter book title" rows="2" required></textarea>
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="form-group">
                        <label for="category" class="col-sm-3 control-label">Category</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="category" name="category" required>
                                <option value="" selected disabled>- Select -</option>
                                <?php
                                  $sql = "SELECT * FROM category";
                                  $query = $conn->query($sql);
                                  while($crow = $query->fetch_assoc()){
                                      echo "<option value='".$crow['id']."'>".$crow['name']."</option>";
                                  }
                                ?>
                            </select>
                        </div>
                    </div>

                    <!-- Author -->
                    <div class="form-group">
                        <label for="author" class="col-sm-3 control-label">Author</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="author" name="author" placeholder="Enter author name">
                        </div>
                    </div>

                    <!-- Publisher -->
                    <div class="form-group">
                        <label for="publisher" class="col-sm-3 control-label">Publisher</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Enter publisher name">
                        </div>
                    </div>

                    <!-- Publish Date -->
                    <div class="form-group">
                        <label for="datepicker_add" class="col-sm-3 control-label">Publish Date</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="datepicker_add" name="pub_date" placeholder="Select publish date">
                        </div>
                    </div>
                </form>
            </div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Edit Book</b></h4>
          	</div>
          	<!-- Modal Body -->
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="book_edit.php">
                    <!-- Hidden Book ID -->
                    <input type="hidden" class="bookid" name="id">

                    <!-- ISBN -->
                    <div class="form-group">
                        <label for="edit_isbn" class="col-sm-3 control-label">ISBN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_isbn" name="isbn" placeholder="Enter ISBN">
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="form-group">
                        <label for="edit_title" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="title" id="edit_title" placeholder="Enter title"></textarea>
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="form-group">
                        <label for="category" class="col-sm-3 control-label">Category</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category" id="category">
                                <option value="" selected id="catselect">- Select Category -</option>
                                <?php
                                    $sql = "SELECT * FROM category";
                                    $query = $conn->query($sql);
                                    while($crow = $query->fetch_assoc()){
                                        echo "
                                            <option value='".$crow['id']."'>".$crow['name']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <!-- Author -->
                    <div class="form-group">
                        <label for="edit_author" class="col-sm-3 control-label">Author</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_author" name="author" placeholder="Enter author name">
                        </div>
                    </div>

                    <!-- Publisher -->
                    <div class="form-group">
                        <label for="edit_publisher" class="col-sm-3 control-label">Publisher</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_publisher" name="publisher" placeholder="Enter publisher name">
                        </div>
                    </div>

                    <!-- Publish Date -->
                    <div class="form-group">
                        <label for="datepicker_edit" class="col-sm-3 control-label">Publish Date</label>
                        <div class="col-sm-9">
                            <div class="date">
                                <input type="text" class="form-control" id="datepicker_edit" name="pub_date" placeholder="Select publish date">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
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
      <form method="POST" action="book_delete.php">
        <div class="modal-body text-center">
          <input type="hidden" class="bookid" name="id">
          <p>Are you sure you want to delete this book?</p>
          <h4 id="del_book" class="text-danger font-weight-bold"></h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
          <button type="submit" class="btn btn-danger" name="delete"><i class="fa fa-trash"></i> Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>
