<?php
SESSION_start{};
//this goes in front of every session 
//the php must be the first code on the page or will not work
//the passwords.php has to be first to allow the access
//include("passwords.php");
//params: server, username, password, database - gitignore keeps it secret
//you want to keep things off your source code…so do not put them here
// create passwords.php

?>
<?php

//with key-value pairs 


//session_register("password");


//echo statements check the value of the double quoted name variable
//if you leave off the method in the form it becomes a GET
?>
<!DOCTYPE html>
<html>
<body>
        <form method="post">
        Password: <input placeholder="Password" name="password" type="text" />
        <input type="Submit" /></form>            






    </body>
</html>