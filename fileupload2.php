<?php 
require_once "fileupload.php";
?>

<!DOCTYPE html>
<html>
<body>

<form action="fileupload2.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    <img src="<?php echo $target_file; ?>"
</form>

</body>
</html>