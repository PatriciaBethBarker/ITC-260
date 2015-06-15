<?php
SESSION_start{};
    $_SESSION ["password"] = "abc123";
    if isset($_POST ["password"]){
        //if what was entered has a value - is it equal to the session
       if $_POST ["password"] == $_SESSION ["password"]{
        //password is correct
        echo "Correct Password"
       } else{
        //password is incorrect
        echo "Wrong Password";
       }
    }
?>
