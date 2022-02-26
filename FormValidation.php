<?php
 class FormValidation{
    
   public function validoEmail($request){
       $email= $request['email'];
       $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    if (!preg_match ($pattern,$email) ){  
        $ErrMsg = '<script> alert("Email is not valid.");</script>';  
                echo $ErrMsg;  
    }else {  
        echo  "Your valid email address is: " .$email;  
    }  
   }

    public function validoPass($request){
        $password=$request['password'];
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        if(!empty($_POST["password"]) && $_POST["password"] != "" ){
        
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            }else{
                echo 'Strong password.';
            }

        }
    }

    }


    ?>