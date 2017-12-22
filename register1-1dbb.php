
<?php
//call file connection
include_once 'conn.php';
//check for any value posted

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
   
    //Table clientOffer
    $clientName = $_POST['clientName'];
  $clientEmail = $_POST['clientEmail'];
  $clientPassword= $_POST['clientPassword'];

  
  echo $clientEmail;
  echo $clientName;
  echo $clientPassword;

  $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["clientProfile"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["clientProfile"]["tmp_name"]);
  
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
  
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file 1 already exists.";
    $uploadOk = 0;
}

// Check file size
if (($_FILES["outcome1"]["size"] )> 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    
    $Art11 =  basename( $_FILES["clientProfile"]["name"]);


    if (move_uploaded_file($_FILES["clientProfile"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["clientProfile"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
     //insert query1
    $query1 = "INSERT INTO client (clientName, clientEmail, clientPassword, clientProfile) values ('$clientName','$clientEmail','$clientPassword','uploads/$Art11')";

    $result1 = mysqli_query($con, $query1); //done

  echo $result1;

    if ($result1) {
        echo "<script>alert ('register success!');</script>";
        header("Location: advance-register1a.php");
        exit();
    } else {
        echo "<script>alert ('failed to register. please try again!');</script>";
    }

    }
}
    ?>