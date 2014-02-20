<?php 
$x = 12;
$y = 16;

while ($x <= $y) {
    if($x > 0){
    	if($x % 3 == 0){
    		echo "Fizz";
    		if($x % 5 == 0){
	    		echo "Buzz";
	    	}
    	}
    	else{
    		echo $x;
    	}
    	echo "<br />";
    }
    $x++;
};

?>