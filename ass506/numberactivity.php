<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $number = 25;
      echo sqrt($number);

// $i=0 //counter
// $i<=10 //condition 
// $i++ //incrementing the counter
      for($i=0; $i<10; $i++){
        echo rand();
        echo "<br>";
      }
    ?>


<?php

$number = 5;
if($number === 5){
    echo "your number has 5 stored in it, you are correct!";
}
else {
    echo "Your number data type is mismatched";
}
echo "<br>"
?>
<?php

$studentID = ["vs014","lm065","lo014","Mj027", "jd014"];

if($studentID[0] == "vj014"){
    echo "This is our Vincent";
}
else if($studentID[1] == "lp065"){
    echo "This is our larryMason";
}
else if($studentID[2] == "l65"){
    echo "This is our larryMason";
}
else if($studentID[3] == "M027"){
    echo "This is our Michael Johnson";
}

else{
    echo "You are giving us wrong IDS";
}

$numbercheck = 9999.90;
echo var_dump($numbercheck);

$student_id = "lo014";
$email = "lo014@outlook.com";

if($student_id == "lo014" || $email == "lo016@outlook.com"){
    echo "This is correct ID and email";
}
echo "<br>";

$vinny = " ";
echo isset($vinny);
echo empty($vinny);


?>


</body>
</html>