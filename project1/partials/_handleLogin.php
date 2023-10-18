<?php

$showError = false;
include '_dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $email_id = $_POST['loginEmail_id'];
    $password = $_POST['loginPassword'];

    $sql = "SELECT*FROM categories WHERE email_id = '$email_id'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
           session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['email_id'] = $email_id;
            echo "loggedin". $email_id; 
        }
        header("Location: /project1/index.php");
        
        }
        header("Location: /project1/index.php");
    }
    ?>
        
        
    
