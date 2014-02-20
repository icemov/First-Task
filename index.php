<?php 
$x = 4;
$y = 11;
$z = false;

while ($x <= $y) {
    
	if($x % 3 == 0){ // if the remainder of $x/3 = 0
		echo "Fizz"; 
		if($x % 5 == 0){ // if the remainder of $x/5 = 0
    		echo "Buzz";
    	}

    	$z = true;
	}
	else if($x % 5 == 0){ // if the remainder of $x/5 = 0
		echo "Buzz";

		$z = true;
	}
	else{
		if($z == true){
			echo "Bazz";
		}
		else{
			echo $x;
			
		}
		$z = false;
	}
	echo "<br />";
    $x++;
};

?>