<?php

if (isset($_POST['submit'])) {

    $newFileName = $_POST['filename'];
    if (empty($newFileName)) {
        $newFileName = "gallery";
    } else {
        $newFileName = strtolower(str_replace(" ", "-", $newFileName));
    }

    $imageTitle = $_POST['filetitle'];
    $imageDesc = $_POST['filedesc'];
    
    $file = $_FILES['file'];

    $fileName = $file["name"]
    $fileType = $file["type"]
    $fileTempName = $file["tmp_name"]
    $fileError = $file["error"]
    $fileSize = $file["size"]

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt);

    $allowed = array("jpg", "jpeg", "png");

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if($fileSize < 2000000) {
                $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
                $fileDestination = "../img/gallery/" . $imageFullName;

                include_once "dbname.inc.php"; 
               
            }else 
                echo "File size is too big!";
        } else {
            echo "You had an error!";
        }
    } else {
        echo "You need to upload a proper file type!";
    }
}