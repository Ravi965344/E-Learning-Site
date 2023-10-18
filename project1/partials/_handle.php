<?php
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST['username'];
    $phone_no = $_POST['phone_no'];
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $image = $_POST['image'];


//check whether this email exists
$sql = "SELECT*FROM categories WHERE email_id = '$email_id'";
$result = mysqli_query($conn, $sql);
$numRows = mysqli_num_rows($result);
if($numRows>0){
    $showError = "Email already in use";
}
else{
    if($password == $cpassword){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO categories (username, phone_no, email_id, password, image) VALUES('$username', '$phone_no', '$email_id', '$hash', '$image')";
        $result = mysqli_query($conn, $sql);

        if($result){
            $showAlert = true;
            header("Location: /project1/index.php?signupsuccess=true");
            exit();
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
}
header("Location: /project1/index.php?signupsuccess=false&error=".urlencode($showError));
  

?>