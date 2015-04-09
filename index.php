<?php
//the php must be the first code on the page or will not work
//the passwords.php has to be first to allow the access
include("passwords.php");
//params: server, username, password, database - gitignore keeps it secret
//you want to keep things off your source code…so do not put them here
// create passwords.php

?>
<?php

//with key-value pairs 

	if (isset($_SESSION["your_name"])) {
    $name = $_SESSION["your_name"];
}
        if (isset($_REQUEST["name"])) {
            setsession(
            "your_name",
            $_REQUEST["name"],
            time() + 5 * 60,
            "/",
            no-ip.org
);
    $name = $_REQUEST["name"];
}

//echo statements check the value of the double quoted name variable
//if you leave off the method in the form it becomes a GET
?>
<!DOCTYPE html>
<html>
        <form action="index.php">
        <input
            placeholder="First Name" name="name"
            value="<?= $name ?>"
        >
        <input type="Submit" /></form>            
    <pre>
<?php
        print_r($_SESSION);
        echo time();
?>
    </pre>
?>


<?php


//<form action="insert.php" method="post">
//Name: <input type="text" name="name" />
//Password: <input type="text" name="password" />
//<input type="Submit" /></form>
?>




    </body>
</html>