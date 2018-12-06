<?php
CONST LARGESTLIMIT = 1000000; //largest number upto which the sum of consecutive prime numbers that results into a prime number is required

$currentPrime = 2;
$sum = 0;
$i = 2;
$largestPrime = 0;
$lastPrime= $currentPrime;

while($i <= LARGESTLIMIT) {
	
	if(isPrime($i)) {
		$currentPrime = $i;
		$sum = $sum + $currentPrime;
		

		if(isPrime($sum)) {	
		
			if($sum >= LARGESTLIMIT){
				
				echo "<br>Last prime number below ".LARGESTLIMIT." :".$lastPrime;
				echo "<br>Sum of consecutive prime numbers below ".LARGESTLIMIT.", which is a prime number itslef: ".$largestPrime;
				break;

			}else {
				$lastPrime = $currentPrime;
				$largestPrime = $sum;
			}
		
		}
		
	}

	$i++;
}

/**
 * Determine if the number is a prime
 *
 * @param  int  $n
 * @return Boolean
 */
function isPrime($n) {

	for($i = 2; $i <= $n - 1; $i++ ){
		
		if($n%$i == 0)
			break;
	}

	if($n == $i){
		return true;
	}

	return false;

}
