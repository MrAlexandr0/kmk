<?php /* Function page */


	// Function for å utføre gjentagelse av kode med spesialtegn
	function speschar($table) {
		foreach ($table as $verdi){
			echo htmlspecialchars($verdi, ENT_NOQUOTES) . "<br>\n";
			//echo "<br>";
			}
	} //end of function
	
	// Function for å vise spesialtegn
	function spescharsingle($spesverdi1) {
			echo htmlspecialchars($spesverdi1, ENT_NOQUOTES);
	
	} //end of function

	// Function for å vise kinesisk kalenderdag		
	function chinese_zodiac($year) {

			//Do what a zodiac calendar does
			$conv_value = (($year - 4) % 12);
			
			switch ($conv_value){
				case 0: return 'Rat';
				case 1: return 'Ox';
				case 2: return 'Tiger';
				case 3: return 'Rabbit';
				case 4: return 'Dragon';
				case 5: return 'Snake';
				case 6: return 'Horse';
				case 7: return 'Goat';
				case 8: return 'Monkey';
				case 9: return 'Rooster';
				case 10: return 'Dog';
				case 11: return 'Pig';
				}
	} //end of function

	//Function for å søke i begynnelsen av en txtstreng
	function startsWith($haystack, $needle) {
	     $length = strlen($needle);
	     
	     return (substr($haystack, 0, $length) === $needle);
	
	} //end of function
	
	//Function for å søke i enden av en txtstreng
	function endsWith($haystack, $needle) {
	    $length = strlen($needle);
	    if ($length == 0) {
	        return true;
	    	}
	
	    return (substr($haystack, -$length) === $needle);
	    
	} // end of function

/* End of Function page*/ ?>