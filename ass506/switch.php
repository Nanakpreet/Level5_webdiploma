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
//     $var = 'sleeping';
// if($var == 'sleeping'){
//  echo 'I am enjoying my life';
// }
// else {
//     echo 'Please give me a good sleep!';
// }


$payment = 'cash';
if($payment == 'credit'){
    echo 'You have selected credit to pay for,
    please enter your credit card number';
}
elseif($payment == 'cash'){
    echo 'Please pay by cash';
}

elseif($payment == 'bank transfer'){
    echo "Please enter your bank details";
}


switch($payment){
    case 'credit':
        echo 'You have selected credit to pay for,
        please enter your credit card number';
        break;
    case 'cash':
        echo 'Please pay by cash';
        break;    
    case 'bank transfer':
        echo 'Please enter your bank details';
        break;
    default:
        echo 'Please select atleast one option';
    
        
}
echo "<br>";

// Break & Continue 
// for($i=1; $i<=15; $i++){

//     if($i == 13){
//       continue;
//     }
//     echo $i;
//     echo "<br>";
// }

$i = 1;
while($i <=15){
    $i++;
    if($i == 13){
        continue;
    }
    echo $i;
    echo "<br>";
    
   
}

//     if($i == 13){
//       continue;
//     }
//     echo $i;
//     echo "<br>";
// }
    




    ?>
</body>
</html>