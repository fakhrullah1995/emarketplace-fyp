<?php
//call file connection
include_once 'conn.php';
//check for any value posted
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["clientArtwork1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["clientArtwork2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["clientArtwork3"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
$imageFileType = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    //TABLE CLIENT
    $ClientPhoneNumber = $_POST['ClientPhoneNumber'];
    $ClientIncome = $_POST['ClientIncome'];
    $ClientState = $_POST['ClientState'];
    $clientEx = $_POST['clientEx'];
    $clientEdu = $_POST['clientEdu'];
    $clientAddress = $_POST['clientAddress'];
    $paymentType = $_POST['clientPaymentType'];
        $a=implode(" , ",$paymentType);
    $projectType = $_POST['projectType'];
        $b=implode(" , ",$projectType);
    $clientSkillType = $_POST['clientSkillType'];
        $c=implode(" , ",$clientSkillType);

    //TABLE ARTWORK
    $clientArtworkDescription1 = $_POST['clientArtworkDescription1'];
    $clientArtworkDescription2 = $_POST['clientArtworkDescription2'];
    $clientArtworkDescription3 = $_POST['clientArtworkDescription3'];

    $check = getimagesize($_FILES["clientArtwork1"]["tmp_name"]);
    $check2 = getimagesize($_FILES["clientArtwork2"]["tmp_name"]);
    $check3 = getimagesize($_FILES["clientArtwork3"]["tmp_name"]);
    if($check !== false&&$check2 !== false&&$check3 !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        echo "File is an image - " . $check2["mime"] . ".";
        echo "File is an image - " . $check3["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file 1 already exists.";
    $uploadOk = 0;
}
// Check if file already exists
if (file_exists($target_file2)) {
    echo "Sorry, file 2 already exists.";
    $uploadOk = 0;
}
// Check if file already exists
if (file_exists($target_file3)) {
    echo "Sorry, file 3 already exists.";
    $uploadOk = 0;
}
// Check file size
if (($_FILES["clientArtwork1"]["size"] && $_FILES["clientArtwork2"]["size"] && $_FILES["clientArtwork3"]["size"])> 500000) {
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
       $art1 =  basename( $_FILES["clientArtwork1"]["name"]);
     $art2 = basename( $_FILES["clientArtwork2"]["name"]);
     $art3= basename( $_FILES["clientArtwork3"]["name"])    ;
     

    if (move_uploaded_file($_FILES["clientArtwork1"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["clientArtwork1"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
     if (move_uploaded_file($_FILES["clientArtwork2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["clientArtwork2"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
     if (move_uploaded_file($_FILES["clientArtwork3"]["tmp_name"], $target_file3)) {
        echo "The file ". basename( $_FILES["clientArtwork3"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}

    //insert query1
    $query1 = "UPDATE client SET ClientPhoneNumber='$ClientPhoneNumber', ClientIncome='$ClientIncome', ClientState='$ClientState', clientEx= '$clientEx', clientEdu='$clientEdu', clientAddress='$clientAddress', clientPaymentType='$a',projectType='$b', clientSkillType='$c' " ;

//   //insert query5
   $query5 = "INSERT INTO clientartwork (clientArtwork1, clientArtwork2,clientArtwork3,clientArtworkDescription1,clientArtworkDescription2,clientArtworkDescription3) values ('uploads/$art1','uploads/$art2','uploads/$art3','$clientArtworkDescription1','$clientArtworkDescription2','$clientArtworkDescription3')";

    $result1 = mysqli_query($con, $query1); //done
    $result5 = mysqli_query($con, $query5);

  echo $result1;

    if ($result1 && $result5 ) {
        echo "<script>alert ('register success!');</script>";
        header("Location: register-payment1.php");
        exit();
    } else {
        echo "<script>alert ('failed to register. please try again!');</script>";
    }