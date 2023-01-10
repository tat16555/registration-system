<?php 

session_start();
include_once '../config/dbConfig.php';
// File upload path
$targetDir = "../img/uploads/";

if (isset($_POST['submit'])) {
    if (!empty($_FILES["file"]["name"])) {
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
                // Retrieve the headlines and content from the form
                $headlines = $_POST['headlines'];
                $content = $_POST['content'];

                // Insert record into images table with headlines and content fields
                $insert = $db->query("INSERT INTO images(file_name,uploaded_on,headlines,content) VALUES ('".$fileName."', NOW(), '".$headlines."', '".$content."')");
                if ($insert) {
                    $_SESSION['statusMsg'] = "The file <b>" . $fileName . "</b> has been uploaded successfully.";
                    header("location: control.php");
                } else {
                    $_SESSION['statusMsg'] = "File upload failed, please try again.";
                    header("location: control.php");
                }
            } else {
                $_SESSION['statusMsg'] = "Sorry, there was an error uploading your file.";
                header("location: control.php");
            }
        } else {
            $_SESSION['statusMsg'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.";
            header("location: control.php");
        }
    } else {
        $_SESSION['statusMsg'] = "Please select a file to upload.";
        header("location: control.php");
    }
}

?>