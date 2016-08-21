<!DOCTYPE html>
<html>
<head>
    <title>Upload picture</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data" ">
<input type="file" name="file_img" />
<input type="submit" name="btn_upload" value="Upload">

</form>

<?php
if (isset($_POST['btn_upload'])) 
{
    $mysqli = new mysqli('localhost', 'root', '', 'blog');
    $mysqli->set_charset("utf8");
    if ($mysqli->connect_errno)
        die('Cannot connect to MySQL');

    $filetmp  = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "photo/".$filename;

    move_uploaded_file($filetmp,$filepath);


    $statement = $mysqli->prepare(
        "INSERT INTO photos(img_name,img_path,img_type)
         VALUES (?, ?, ?)");
    $statement->bind_param("sss", $filename, $filepath,$filetype);
    $statement->execute();



    if ($statement->affected_rows == 1)
        echo "Post created.";
    else
        die("Insert post failed.");}
?>

</body>
</html>
