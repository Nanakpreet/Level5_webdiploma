<?php

//1. Give string values to the variables below.
$my_name = null;
$favourite_thing_1 = null;
$favourite_thing_2 = null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Essentials - 2. Strings</title>
</head>

<body>
    <p>
        <?php
        // 2. Use string interpolation to insert each variable in the echoed text.
        // 3. Add breaks so that the text echoes in the same format as below.

        $about_me =
            'My name is (yourname),
        my favourite things are:
        - (thing 1)
        - (thing 2)';

        echo $about_me;
        ?>



    </p>
</body>

</html>