<?php
$cookie_name = "user";
$cookie_value = $_POST["nama"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); // 86400 = 1 day


$target_dir = "photo/";
// $target_file = $target_dir . basename($_FILES["photo"]["name"]);
$temp = explode( ".", $_FILES["photo"]["name"]);
$target_file = $_POST["nama"] . "-" . date('YmdHis') . '.' . end($temp);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check file size
if ($_FILES["photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir . $target_file)) {
        echo "The file " . basename($_FILES["photo"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
setcookie("photo", $target_file, time() + (86400 * 30));
header("Location: index.php");
exit;
?>