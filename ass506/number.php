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
 $num1 = 5;
 $num2 = 6;
 $num3 = $num1 + $num2;
 echo "The result is :". $num3;
 $calc = (46/50) * 100;
 echo "<br>";
 echo $calc;
 echo "<br>";
 $MichaelMarks = 0; 
 $MichaelMarks +=48;
 echo $MichaelMarks;
 echo "<br>";
 $MichaelMarks += 50;
 echo $MichaelMarks;

$MichaelMarks --;
echo $MichaelMarks;
echo "<br>";
// Random Numbers


// for($i =1; $i<5; $i++){
//     echo rand();
//     echo "<br>";
// }

// modulo
echo 14.5 / 6;
echo "<br>";
echo fmod(13.75, 0.5);
echo "<br>";
echo round(85.2765665,4);

echo "<br>";

// $var = "string1","string2";
$student = ["Michael", "mj@gmail.com", 5623230];

echo $student;

// array_push($student, 1234652);
// array_pop($student);
// echo $student[0];

// echo "<br>";

//delete every second item from the list

// print_r($student);



// $var2 = "string3";
// echo $var2;

$associative = ['name' => 'Lorenna',
                 'email' => 'lm@gmail.com'];            
                 print_r($associative);
                 $associative['phone'] = 2223333;
                 $associative['email'] = 'kl@gmail.com';
    print_r($associative);
    
    ?>
    <?php
$var = '';
echo empty($var);
?>
</body>
</html>