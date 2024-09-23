<?php

class auth{
    public function signup($conn){
        if(isset($_POST["signup"])){
            $fullname=$_POST["fullname"];
            $email_address=$_POST["email_address"];
            $username=$_POST["username"];

            //Implement input validation and error handling.
            //=============================================
            //santize all inputs.
            //Verify that the fullname has only letters, space, dash, quatations,.
            //Verify that the email has got the correct format.
            // Verify that the email domain is authorized (Eg want emails only from Strathmore.edu, gmail.com,yahoo.com,mada.co.ke) and not (yanky.net)
            //Verify if the  email already exists in the database 
            // Verify that the username exists once in the database.

            // Implement 2FA (email => php -mailer)
            //=====================================
            // Send an email for verifaction with an OTP(OTC)
            // Verify that  the password is identical to the repeat password.
            // Verify that the password legnth is between 4 and 8 characters.
            // 
            //

            $cols=['fullname','email','username'];
            $vals=[$fullname,$email_address,$username];
            $data=array_combine($cols,$vals);
            $insert=$conn->insert('users',$data);
            if($insert ===TRUE){
                header('Location:signup.php');
                exit();
            }else{
                die($insert);
            }
        }

    }
}