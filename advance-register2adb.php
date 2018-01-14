<?php
//call file connection
include_once 'conn.php';
//check for any value posted

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    //TABLE CLIENT
    $freePhoneNumber = $_POST['freePhoneNumber'];
    $freeIncome = $_POST['freeIncome'];
    $freeState = $_POST['freeState'];
    $freeExp = $_POST['freeExp'];
    $freeEdu = $_POST['freeEdu'];
    $freeAddress = $_POST['freeAddress'];
    $freePaymentType = $_POST['freePaymentType'];
        $a=implode(" , ",$freePaymentType);
    $freeInterest = $_POST['freeInterest'];
        $b=implode(" , ",$freeInterest);
    $freeSkillType = $_POST['freeSkillType'];
        $c=implode(" , ",$freeSkillType);

    //TABLE ARTWORK
    $freeArtworkDescription1 = $_POST['freeArtworkDescription1'];
    $freeArtworkDescription2 = $_POST['freeArtworkDescription2'];
    $freeArtworkDescription3 = $_POST['freeArtworkDescription3'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["freeArtwork1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["freeArtwork2"]["name"]);
    $target_file3 = $target_dir . basename($_FILES["freeArtwork3"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
    $imageFileType = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["freeArtwork1"]["tmp_name"]);
    $check2 = getimagesize($_FILES["freeArtwork2"]["tmp_name"]);
    $check3 = getimagesize($_FILES["freeArtwork3"]["tmp_name"]);
    if($check !== false&&$check2 !== false&&$check3 !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        echo "File is an image - " . $check2["mime"] . ".";
        echo "File is an image - " . $check3["mime"] . ".";
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
if (($_FILES["freeArtwork1"]["size"] && $_FILES["freeArtwork2"]["size"] && $_FILES["freeArtwork3"]["size"])> 500000) {
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
       $art1 =  basename( $_FILES["freeArtwork1"]["name"]);
     $art2 = basename( $_FILES["freeArtwork2"]["name"]);
     $art3= basename( $_FILES["freeArtwork3"]["name"])    ;
     

    if (move_uploaded_file($_FILES["freeArtwork1"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["freeArtwork1"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
     if (move_uploaded_file($_FILES["freeArtwork2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["freeArtwork2"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
     if (move_uploaded_file($_FILES["freeArtwork3"]["tmp_name"], $target_file3)) {
        echo "The file ". basename( $_FILES["freeArtwork3"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}

    //insert query1
    $query1 = "UPDATE freelancer SET freePhoneNumber='$freePhoneNumber', freeIncome='$freeIncome', freeState='$freetState', freeExp= '$freeExp', freeEdu='$freeEdu', freeAddress='$freeAddress', freePaymentType='$a',freeInterest='$b', freeSkillType='$c',freeArtwork1='uploads/$art1',freeArtwork2='uploads/$art2',freeArtwork3='uploads/$art3',freeArtworkDescription1='$freeArtworkDescription1',freeArtworkDescription2='$freeArtworkDescription2',freeArtworkDescription3='$freeArtworkDescription3' " ;

    $result1 = mysqli_query($con, $query1); //done
 
  echo $result1;

    if ($result1  ) {
        echo "<script>alert ('register success!');</script>";
        header("Location: register-payment2.php");
        exit();
    } else {
        echo "<script>alert ('failed to register. please try again!');</script>";
    }}
    ?>