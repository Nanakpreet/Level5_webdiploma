<?php
// 1. Create a boolean variable that stores whether a user is logged in
// 2. Create a variable to store a made up username and give it a value

$logged_in = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Essentials - 7-1. If / Else</title>
</head>

<body>
    <h1>Welcome to My Website</h1>

    <?php
    if($logged_in == true){
        echo "logged in is true";
    }
    


    /*3. Create an if/else statement that:
     - Echoes "$username is currently logged in" if the $logged_in is true
     - Echoes "Access Denied" if $logged_in is false.
    */

    ?>
</body>

</html>
<!-- 4. Change the logged in variable between true and false.
Refresh your page and observe the outcome of this change. -->
<?php
$logged_in = false;
?>