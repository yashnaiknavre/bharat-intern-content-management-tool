<?php
include "sql.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $creatorname = $_POST["creatorname"];
    $timestamp = $_POST["timestamp"];

    // Step 3: Sanitize and validate the data (same as before)
    $title = mysqli_real_escape_string($conn, $title);
    $description = mysqli_real_escape_string($conn, $description);
    $creatorname = mysqli_real_escape_string($conn, $creatorname);

    // Step 4: Handle file upload
    $targetDirectory = "files/"; // Specify the target directory where you want to save the uploaded images
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the image file is a valid image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, the file already exists.";
        $uploadOk = 0;
    }

    // Check file size (you can adjust the size limit as needed)
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Sorry, the file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (you can customize this list)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Image uploaded successfully, now insert data into the database
            $sql = "INSERT INTO post (title, description, creatorname, image_path, timestamp) VALUES ('$title', '$description', '$creatorname', '$targetFile','$timestamp')";

            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("Posted Succesfully")</script>';
                $url ="../index.php";
                 header('Location: '.$url);
                }
                
             else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    }
?>