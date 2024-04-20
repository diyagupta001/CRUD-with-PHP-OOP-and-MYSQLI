<?php
include 'header.php'; 
$db = new database();
$id = $_GET['id'];
// echo $id;
$query = "SELECT * FROM tbl_users WHERE id = $id";
$data = $db->select($query)->fetch_assoc();

if(isset($_POST['update'])){
  $name = $_POST['name'];
  $roll_no = $_POST['roll_no'];
  $course = $_POST['course'];

  if($name == ""||$roll_no == ""||$course == ""){
    $error = "<div class='alert alert-danger'>Field must not be empty</div>"   ; 
  }
  else{
    $query = "UPDATE tbl_users
    SET
    name = '$name',
    roll_no = '$roll_no',
    course = '$course'
    WHERE id = $id";
   $update = $db->update($query);
  }
}
?>
<div class="card-body">
<form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" value="<?php echo $data['name'];?>" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Roll_no</label>
    <input type="text" class="form-control" value="<?php echo $data['roll_no'];?>" id="roll_no" placeholder="Enter Roll_no." name="roll_no">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Course</label>
    <input type="text" class="form-control" value="<?php echo $data['course'];?>" id="course" placeholder="Enter Course" name="course">
  </div>
 
 
  <button type="submit" name="update" class="btn btn-primary">Update</button>
  <button type="submit" class="btn btn-primary">Delete</button>
  <a class="btn btn-primary" href="index.php">Go-Back</a>
</form>
</div>
<?php
include 'footer.php'
?>