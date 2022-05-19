<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(220, 60, 60);
        margin: auto;
    }
</style>
<body>
    <div class="contanier">
        <h1> This is modren world </h1>
     This is PHP program!
    <?php
    echo "<br>";
    $age = 75;
    if($age >14){
        echo "You can go to party";
    }
    else if($age==5){
        echo "Your are 7 year old";
    }
    else{
        echo "You can not go to party";
    }
    echo "<br>";
       // Arry  in PHP
    $languages = array("Python","C++","PHP","NodJs");
    echo $languages[0];
    echo "<br>";
    echo $languages[1];
    echo "<br>";
    echo $languages[2];
    echo "<br>";
    echo $languages[3];
    echo "<br>";
    echo count($languages);

     // Loop in PHP
     $a = 1;
    while ($a <= 10){
        echo "<br>The value of a is: ";
        
        echo $a;
        $a++;
    }
     
     // Iterating Array in PHP using while loop
     $a=0;
     while ($a < count($languages)) {
         echo "<br> The value of language is: ";
         echo $languages[$a];
         $a++;
     }

      // Do while loop
    $a = 10;
    do {
        echo "<br> The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

      // For loop in PHP

      for($a=1; $a <10; $a++){
          echo "<br> The value of a is: ";
          echo $a;

      }
      function print_number($number){
          echo "<br> Your number is ";
          echo $number;
      }
      print_number(45);
      print_number(78);
      print_number(7);

      function print5(){
          echo " <br> FIVE";
      }
      print5();
      print5();
      print5();
      print5();

    ?>
    </div>
</body>
</html>