<?php
include('includes/connection.php');
include('includes/session.php');


//Assign data from login form to variables
$email = $_POST['email'];
$password =($_POST['password']);


    $userQuery = "SELECT * FROM user WHERE email ='$email' and password='$password'";
    $userResult= mysqli_query($connection, $userQuery);

     if (mysqli_num_rows($userResult) == 1) {
        $userRow = mysqli_fetch_array($userResult);

        //Creating Session
        checkSession();  
        $_SESSION["name"] = $userRow['name'];
        $_SESSION["email"] = $userRow['email'];
        

        header("Location:admin/admin.php");
     }
    else{
        $message = base64_encode(urlencode("Invalid ID or Password"));
        header('Location:login.php?msg=' . $message);
        exit();
    }
 
























?>