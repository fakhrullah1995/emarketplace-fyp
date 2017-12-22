
<?php
//call file connection
include_once 'conn.php';
//check for any value posted
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["contest1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["contest2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["contest3"]["name"]);
$target_file4 = $target_dir . basename($_FILES["contest4"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
$imageFileType = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
$imageFileType = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
   
    //Table contest
    $projectType= $_POST['projectType'];
    $contestDescription= $_POST['contestDescription'];
    $contestDuration= $_POST['contestDuration'];
    $contestPayment=$_POST['contestPayment'];


    $check = getimagesize($_FILES["contest1"]["tmp_name"]);
    $check2 = getimagesize($_FILES["contest2"]["tmp_name"]);
    $check3 = getimagesize($_FILES["contest3"]["tmp_name"]);
     $check4 = getimagesize($_FILES["contest4"]["tmp_name"]);
    if($check !== false&&$check2 !== false&&$check3 !== false&&$check4 !==false) {
        echo "File is an image - " . $check["mime"] . ".";
        echo "File is an image - " . $check2["mime"] . ".";
        echo "File is an image - " . $check3["mime"] . ".";
        echo "File is an image - " . $check4["mime"] . ".";
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
if (file_exists($target_file4)) {
    echo "Sorry, file 4 already exists.";
    $uploadOk = 0;
}
// Check file size
if (($_FILES["contest1"]["size"] && $_FILES["contest2"]["size"] && $_FILES["contest3"]["size"] && $_FILES["contest4"]["size"])> 500000) {
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
    
    $Art11=  basename( $_FILES["contest1"]["name"]);
    $Art22= basename( $_FILES["contest2"]["name"]);
    $Art33= basename( $_FILES["contest3"]["name"]);
    $Art44= basename( $_FILES["contest4"]["name"]);
     

    if (move_uploaded_file($_FILES["contest1"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["contest1"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
     if (move_uploaded_file($_FILES["contest2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["contest2"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
     if (move_uploaded_file($_FILES["contest3"]["tmp_name"], $target_file3)) {
        echo "The file ". basename( $_FILES["contest3"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
      if (move_uploaded_file($_FILES["contest4"]["tmp_name"], $target_file3)) {
        echo "The file ". basename( $_FILES["contest4"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

     //insert query1
    $query1 = "INSERT INTO contest (projectType, contestDescription, contestDuration, contestPayment, contest1, contest2, contest3,contest4) values ('$projectType','$contestDescription','$contestDuration','$contestPayment','uploads/$Art11','uploads/$Art22','uploads/$Art33', 'uploads/$Art44')";

    $result1 = mysqli_query($con, $query1); //done

  echo $result1;

    if ($result1) {
        echo "<script>alert ('register success!');</script>";
        header("Location: review1.php");
        exit();
    } else {
        echo "<script>alert ('failed to register. please try again!');</script>";
    }

    }
}
    ?>