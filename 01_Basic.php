<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php program
        
    <?php
    define('PI',3.142);
        echo "<br>";
         echo "This is modren world";
    
    ?>
    
      <?php
        echo "<br>";
         echo "Hello World this is PHP";
    ?>
    <?php
          // Arithmetic Operators

     echo "<br>";
    $variable1 = 8;
    $variable2 = 5;
    $a =4;
    echo $variable1;
    echo $variable2;
    echo $a;
    echo "<br>";
    echo $variable1 + $variable2 + $a;
    echo "<br>";
    echo "The value of variable1 + variable2 is  ";
    echo $variable1 + $variable2;

    echo "<br>";
    echo "The value of variable1 - variable2 is  ";
    echo $variable1 - $variable2;

    echo "<br>";
    echo "The value of variable1 * variable2 is  ";
    echo $variable1 * $variable2;

    echo "<br>";
    echo "The value of variable1 / variable2 is  ";
    echo $variable1 / $variable2;

    echo "<br>";
     $newvar = $variable1;
     $newvar += 2;
       // $newvar -= 2;  (Subtract)
       // $newvar *= 2;  (Multiply)
       // $newvar /= 2;  (Divide)
     echo "The value of new variable is ";
     echo $newvar;
     echo "<br>";

        //Comparision Operators
    
    echo "The value of 1==7 is ";
    echo var_dump(1==7);
    echo "<br>";

    echo "The value of 1!=7 is ";
    echo var_dump(1!=7);
    echo "<br>";

    echo "The value of 1>=7 is ";
    echo var_dump(1>=7);
    echo "<br>";

    echo "The value of 1<7 is ";
    echo var_dump(1<=7);
    echo "<br>";

    echo $variable1++;
    echo "<br>";
    echo $variable1;
    
    echo "<br>";
    
    echo $variable2--;
    echo "<br>";
    echo $variable2;

    echo "<br>";

    echo ++$variable1;
    echo "<br>";
    echo $variable1;

    echo "<br>";

    echo --$variable2;
    echo "<br>";
    echo $variable2;
    echo "<br>";
        // && Operators
    // $myvar1 = (true and true );
    // $myvar2= (false and true);
    // $myvar3 = (true and false);
    // $myvar4 = (false and false);
    // echo "<br>";
    // echo var_dump($myvar1);
    // echo "<br>";
    // echo var_dump($myvar2);
    // echo "<br>";
    // echo var_dump($myvar3);
    // echo "<br>";
    // echo var_dump($myvar4);


       // || Operators
    // $myvar1 = (true or false);
    // $myvar2 = (true or true);
    // $myvar3 = (false or false);

    // echo var_dump($myvar1);
    // echo "<br>";
    // echo var_dump($myvar2);
    // echo "<br>";
    // echo var_dump($myvar3);

          // Xor Operators
    // $myvar1 =(true xor true);
    // $myvar2 =(true xor false);
     $myvar =(false xor false);
    // echo var_dump($myvar1);
    // echo "<br>";
    // echo var_dump($myvar2);
     echo "<br>";
     echo var_dump($myvar);

    
    // echo "Data types"
    // $var = "This is string";
    // $var = 45;
    // echo var_dump($var);
    echo "<br>";
    echo PI;
    ?>
   

    </div>
  
</body>
</html>