<?php include_once "register1.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment08</title>


    <!-- please check the internet connection for miligram link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        body{margin-top:40px;}
    </style>
</head>
<body>

        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <h2>Validation Registration Form</h2>
                    <form method="POST">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="First Name" required ><br>

                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="Last Name" required ><br>



                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="info@gmail.com" required ><br>


                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" required ><br>

                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required ><br>

                        <input type="submit" name="register" value="Register">


                    </form>
                </div>
            </div>
        </div>

    
</body>
</html>
