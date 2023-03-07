<html>
    <?php
    $t = date("H");


    echo "<P> The hour(of the srever) is " .$t;

    echo ",and will give the folowing message:</p>"; 
    
    if($t<"10"){
        echo "Have a good morning"; 

    }elseif($t < "20"){
        echo "Have a good day!";

    }else{
        echo "Have a good night!";

        }

?>
</html>