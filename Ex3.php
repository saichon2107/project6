<?php
 
  $number = 1;

  while($number1 < 11){

    echo $number1 . " " ;
          $number1++;

  }
  echo "<br>";
  $number1--;
  while($number1 > 0){

    echo $number1 . " " ;
          $number1--;
  }
  echo  "<br>" ;
 $number = 1;
 while($number1 <= 20){

    echo $number1 . " " ;
          $number1+=2;
 }


    
    echo "<br>";
    $number1 = 1;
    while($number1 <= 1000){
        if($number1%3==0){
            echo $number1 . " ";
        }
        $number1++;
    }

    echo "<br>";
    $number1 = 1;
    while($number1 <= 1000){
        if($number1%7==0){
            echo $number1 . " ";
        }
        $number1++;

        }


        echo "<br>";
        echo "แสดงสูตรคูณแม่ 2 ถึงแม่ 12";
        echo "<br>";
        
        $i = 1;
        while($i < 13){
            $j = 1;
            echo "สูตรคูณแม่ ${i}<br>";
            while($j < 13){
                echo $i . " x " . $i . " = " . ($i*$j) . "<br>";
                $j++;
            }
            $i++;
            echo "<br>";
        }
        echo "a" . '&nbsp'. "b";
    


    

  ?>


 










