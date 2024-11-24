<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Student</b></h4>
            </div>
             <!-- Modal Body -->
             <div class="modal-body">
                <form class="form-horizontal" method="POST" action="student_add.php" enctype="multipart/form-data">
                    <!-- Firstname -->
                    <div class="form-group">
                        <label for="firstname" class="col-sm-3 control-label">Firstname</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" required>
                        </div>
                    </div>

                    <!-- Lastname -->
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">Lastname</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" required>
                        </div>
                    </div>

                    <!-- Course -->
                    <div class="form-group">
                        <label for="course" class="col-sm-3 control-label">Course</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="course" name="course" required>
                                <option value="" selected>- Select -</option>
                                <?php
                                    $sql = "SELECT * FROM course";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_array()){
                                        echo "
                                            <option value='".$row['id']."'>".$row['code']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Photo -->
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">Photo</label>
                        <div class="col-sm-9">
                            <input type="file" id="photo" name="photo">
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
<!-- Edit Student Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editStudentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="editStudentLabel"><b>Edit Student</b></h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="student_edit.php">
                    <!-- Hidden Student ID -->
                    <input type="hidden" class="studid" name="id">

                    <!-- Firstname Field -->
                    <div class="form-group">
                        <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_firstname" name="firstname" placeholder="Enter first name" required>
                        </div>
                    </div>

                    <!-- Lastname Field -->
                    <div class="form-group">
                        <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_lastname" name="lastname" placeholder="Enter last name" required>
                        </div>
                    </div>

                    <!-- Course Dropdown -->
                    <div class="form-group">
                        <label for="course" class="col-sm-3 control-label">Course</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="course" name="course" required>
                                <option value="" selected id="selcourse">- Select Course -</option>
                                <?php
                                    $sql = "SELECT * FROM course";
                                    $query = $conn->query($sql);
                                    while ($row = $query->fetch_array()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['code'] . "</option>";
                                    }
                                ?>
                            </select>
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
      <form method="POST" action="student_delete.php">
        <div class="modal-body text-center">
          <input type="hidden" class="studid" name="id">
          <p>Are you sure you want to delete this student?</p>
          <h4 class="del_stu text-danger font-weight-bold"></h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
          <button type="submit" class="btn btn-danger" name="delete"><i class="fa fa-trash"></i> Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_stu"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="student_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="studid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


     