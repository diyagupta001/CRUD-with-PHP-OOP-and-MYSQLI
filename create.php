<?php
include 'header.php';

$db = new Database();

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $roll_no = $_POST['roll_no'];
  $course = $_POST['course'];

  if($name == ""||$roll_no == ""||$course == ""){
    $error = "<div class='alert alert-danger'>Field must not be empty</div>"   ; 
  }
  else{
    $query = "INSERT INTO tbl_users(name,roll_no,course)values('$name','$roll_no','$course')";
    $create = $db->insert( $query);
  }
}
?>
<?php
if(isset($error)){
  echo $error;
}
?>
<div class="card-body">
<form method = "post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Roll_no</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Roll_no." name="roll_no">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Course</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Course" name="course">
  </div>
 
  <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-primary" href="index.php">Go-Back</a>
</form>
</div>
<?php
include 'footer.php'
?>