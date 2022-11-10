<style>
  p {
    font-size:50px;
  }
</style>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$ext = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if it spreadsheet
if(isset($_POST["submit"])) {
  if($ext == 'xlsx') {
    echo "<p>File is a spreadsheet</p>";
    $uploadOk = 1;
  } else {
    echo "<p>File is not a spreadsheet</p>";
  }
}
?>