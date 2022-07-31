<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Essentials - 9. Switch Statements</title>
</head>

<body>

  <!-- 
    The Chinese Zodiac is a 12 year cycle that features one animal each year.
    It proposes the belief that the animal that represents your birth year
    has an influence on your personality and destiny.

    In this activity you are going to create a switch statement that calculates
    the Chinese Zodiac symbol of any particular year.
 -->

  <?php
  //1. Create a variable that stores the year you wish to evauluate (e.g. 2014 or 2005)

  //2. Create a switch statement that switches on the result of the following equation: "($year - 4) % 12".
  $zodiac = ($year-4)%12;
  //3. Create 12 cases, numbered 0 through 11.
  #     Each case should set a variable named $zodiac. Look at 9-switch-statements.txt
  #     for the values to use for each case. You may need to add syntax such as $zodiac = or break;.
  #     You do not need to add a default case in this scenario.

  switch () {
    
  }

  //4. Create an Echo statement to echo the $year and $zodiac variables in a sentence

  //5. Alter your $year variable to find the Zodiac for the years: 2000, 2005, 1996
  ?>

</body>

</html>