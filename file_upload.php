
<?php
if(isset($_FILES['image'])){
  echo "<pre>";
  print_r($_FILES);
  echo "</pre>";

  $file_Name=$_FILES['image']['name'];
  $file_Size=$_FILES['image']['size'];
  $file_type=$_FILES['image']['type'];
  $file_tmp=$_FILES['image']['tmp_name'];
  move_uploaded_file($file_tmp,"upload-image/".  $file_Name);
}
 ?>
<html>
<body>
  <form action=" " method="post" enctype="multipart/form-data">
    <input type="file" name="image"/><br><br>
    <input type="submit" />
  </form>
</body>
</html>
