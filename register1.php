<?php


if(isset($_POST['register'])){

    try{
        $conn= new PDO("mysql:host=localhost;dbname=assignment08","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "connected succesfully";
    }catch(PDOException $e){
        echo "connection failed".$e->getMessage();
    }


    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];


    if($password == $confirmPassword){
        // echo "Password matched";
        // $query= "INSERT INTO users(firstname,lastname,email, password) VALUES('$firstName','$lastName',$email,' $password') ";
        // $query_run =mysqli_query($conn, $query);

        // if($query_run){
        //     echo "Register succesfully";
        // }else{
        //     echo "Register failed";

        //   $pdoQuery =  INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`) VALUES (:firstName,'$lastName','$email','$password');
        $pdo_query= "INSERT INTO register_form(firstname,lastname,email, password) VALUES(:firstName ,:lastName,:email,:password)";
        $pdo_result = $conn->prepare($pdo_query);
        $pdo_result->execute([':firstName'=> $firstName, ':lastName'=> $lastName, ':email'=> $email, ':password'=> $password]);
        // $pdo_exception = $pdo_result->execute(array("$firstName"=>$firstName,"$lastName"=>$lastName,"$email"=>$email,"$password"=>$password));
        
        //  $pdo_result->execute([$firstName,$lastName,$email,$password]);
        if($pdo_result){
            echo "Register succesfully";
        }else{
            echo "none";
        }
    


}

        

else{
        echo "Wrong Password";
    }

}




