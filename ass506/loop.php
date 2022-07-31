<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- While Loop   -->
<?php
$i=1;
while($i <= 5) {
    echo 'i';
    $i++;
    echo "<br>";
}

for($i=1; $i<=10; $i++){
   echo $i+1;
   $i++;
   echo "<br>";
}

$students = ["Michael", "Lorenna","Laurence","John"];

foreach($students as $value){
    echo $value;
    echo "<br>";
}

for($i=0; $i<count($students); $i++){
    echo $students[$i];
    echo "<br>";
}

$student_name = [
    "name" => "Michael",
    "address" => "Hamilton",
    "Phone" => 22334
];

foreach($student_name as $key => $value ){
    echo $key ." has ". $value . "<br>";
}




?>


</body>
</html>