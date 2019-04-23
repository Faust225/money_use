<?php 
$months = 12;
$our_pocket = 1000;
$salary = 700;

$all_used = '';
$diff = 0;
$be_careful = '';

for($x = 1; $x <= $months; $x++) {
    
    $money_use = rand(100, 800);
    $all_used .= $money_use . " "; 
    
    if($salary - $money_use <= 100) {
        $be_careful .= "$x month be careful ";
    }
}
?> 

<!DOCTYPE html> 

<html> 

    <head> 

        <title>Roll dice</title> 

        <meta charset="UTF-8">

    </head> 

    <body> 
        <?php print $all_used . "<br>" .
                $be_careful;?>
    </body> 

</html><!-- alt + shift + f   oskarShop.lt--> 