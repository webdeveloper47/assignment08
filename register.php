<?php

if(isset($_POST['register'])){

    try{
        $conn= new PDO("mysql:host=localhost;dbname=assignment08","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "connected succesfully";
    }catch(PDOException $e){
        echo "connection failed".$e->getMessage();
    }


    $firstName = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
    $confirmPassword = filter_input(INPUT_POST,'confirm_password',FILTER_SANITIZE_STRING);



    if($password == $confirmPassword){
       
        $pdo_query= "INSERT INTO register_form(firstname,lastname,email, password) VALUES(:firstName ,:lastName,:email,:password)";
        $pdo_result = $conn->prepare($pdo_query);
        $pdo_result->execute([':firstName'=> $firstName, ':lastName'=> $lastName, ':email'=> $email, ':password'=> $password]);
       
        if($pdo_result){
            echo "Register succesfully";
        }else{
            echo "Register Failed";
        }
    


}

        

else{
        echo "Wrong Password";
    }

}




