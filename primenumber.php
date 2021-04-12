<?php

function primeno($n){	
	for($i=1;$i<=$n;$i++){  
	  	$counter = 0; 
	  	for($j=1;$j<=$i;$j++){ 

	        if($i % $j==0){ 

	            $counter++;
	        }
	  	}
		if ($counter==2){
		       print $i."<br/>";
		}
    }
} 

primeno(100);

echo "<br>";
echo "----------------------Leap Year----------------------------";

$start = 2000;
$end = 3000;

for($i=$start; $i<=$end; $i++) {

	if( (0 == $i % 4) && (0 != $i % 100) || (0 == $i % 400) ){
			
		echo $i."<br>";
	}		
}

?>


