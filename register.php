<?php 





if(isset($_POST['register'])){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];


    if($password == $confirmPassword){
        echo "Password matched";
    }else{
        echo "Wrong Password";
    }

}


