<html>
    <?php 
    $x = 0; 
    while ($x <= 50) {

        echo $x."<br>"; 

        $x+=2; 
    } 

    $y = 0; 
    do { 
        echo $y."<br>"; 
        $y+=2; 
       } while ($y <= 50);



    for ($i=0; $i < 50; $i+=2) { 
        echo $i."<br>"; 
       }


    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $val) { 
        echo "$val <br>"; 
       }


       
       
       for ($x = 0; $x < 10; $x++) {

        if ($x == 4) { 

        break; 

        } 

        echo "The number is: $x <br>"; 

       } 


    for ($x = 0; $x < 10; $x++) { 
        if ($x == 4) { 
        continue; } 
        echo "The number is: $x <br>"; 
        }

        declare(strict_types=1); // strict requirement function 

        //sum(int $a, int $b)
        { 
        
        $z = $a + $b; return $z; 
           } 
           echo "5 + 10 = " . sum(5, 10) . "<br>"; 
           echo "7 + 13 = " . sum(7, 13) . "<br>"; 
           echo "2 + 4 = " . sum(2, 4);


    
    ?>


</html>