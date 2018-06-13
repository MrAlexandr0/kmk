<p>A function can return values using the return command<br>
return exits the function and sends the return value as a result<br>
It works like the break command does in a switch statement. 
</p>

<p>Here is how the syntax of a function returning values looks like: </p>
	<code class="expl">
		<?php
		$example = array();
	
	
	
		$example[] = 'function Name_Of_Function($argument_A, $argument_2){';
	
		$example[] = '	$Putting_them_together = $argument_A + $argument_2;';
	
		$example[] = '		return $Putting_them_together;';
		$example[] = '	}';
		$example[] = '	';
		$example[] = '	Using a function:';
		$example[] = '	echo namedFunction1(2,3)';
		$example[] = '	';
	
		speschar($example);
		?>
	</code>

<p> Here is an exapmple of using returning values within a function: </p>
	<code class="synt">
	<?php 
			
	$example = array();
		

	$example[] = '<?php ';
	$example[] = '	//example of returning value';
	$example[] = '	function add($val1, $val2) {';
	$example[] = '		$sum = $val1 + $val2;';
	$example[] = '		// Returning a value will make it flexible to work with';
	$example[] = '		return $sum;';
	$example[] = '	}';
	$example[] = '';
	$example[] = '	//Use the function to create results:';
	$example[] = '	$result1 =  add(3,4);';
	$example[] = '	// Use a existing result in a new result:';
	$example[] = '	$result2 = add(5, $result1);';
	$example[] = '	//project the result in the browser:';
	$example[] = '	echo $result2;';
	$example[] = '';
	$example[] = '?>';
		
	speschar($example);
		
	?>
	
	</code>
	
<p>When executed the code will look like this:</p>
	<code class="examp">
		<?php 
			//example of returning value
			function add($val1, $val2) {
				$sum = $val1 + $val2;
				// Returning a value will make it flexible to work with
				return $sum;
			}
		
			//Use the function to create results:
			$result1 =  add(3,4);
			// Use a existing result in a new result:
			$result2 = add(5, $result1);
			//project the result in the browser:
			echo $result2;
		
		?>
	</code>

	<br><code class="expl"> 
		It is recommended to leave echo out of a function
	</code>
<p>Here is an example of the Chinese Zodiac as a function: </p>

	<code class="synt">
	<?php 
		$example = array();

		$example[] = '	<?php // Chinese Zodiac as a function';
		$example[] = '';
		$example[] = '		function chinese_zodiac($year) {';
		$example[] = '';
		$example[] = '			//Do what a zodiac calendar does';
		$example[] = '			$conv_value = (($year - 4) % 12);';
		$example[] = '			';
		$example[] = '			switch ($conv_value){';
		$example[] = '				case  0: return "Rat";';
		$example[] = '				case  1: return "Ox";';
		$example[] = '				case  2: return "Tiger";';
		$example[] = '				case  3: return "Rabbit";';
		$example[] = '				case  4: return "Dragon";';
		$example[] = '				case  5: return "Snake";';
		$example[] = '				case  6: return "Horse";';
		$example[] = '				case  7: return "Goat";';
		$example[] = '				case  8: return "Monkey";';
		$example[] = '				case  9: return "Rooster";';
		$example[] = '				case 10: return "Dog";';
		$example[] = '				case 11: return "Pig";';
		$example[] = '				}';
		$example[] = '		} //end of function  ';
		$example[] = '	// Getting some results:';
		$example[] = '	$zodiac = chinese_zodiac(2013);';
		$example[] = '	echo "2013 is the year of the : " . $zodiac . "<br>";';
		$example[] = '	echo "2027 is the year of the : " . chinese_zodiac(2027) . "<br>";';
		$example[] = '	?>';

		speschar($example);
	?>

	</code>

<p>Here is what the code looks like when executed: </p>
	<code class="examp">		
		<?php // Chinese Zodiac as a function

			//new name due to duplicate function
			function chinese_zodiac_2($year) {
				//Do what a zodiac calendar does
				$conv_value = (($year - 4) % 12);
				
				switch ($conv_value){
					case  0: return "Rat";
					case  1: return "Ox";
					case  2: return "Tiger";
					case  3: return "Rabbit";
					case  4: return "Dragon";
					case  5: return "Snake";
					case  6: return "Horse";
					case  7: return "Goat";
					case  8: return "Monkey";
					case  9: return "Rooster";
					case 10: return "Dog";
					case 11: return "Pig";
					}
			} //end of function  
		
		// Getting some results:
		$zodiac = chinese_zodiac_2(2013);
		echo "2013 is the year of the : " . $zodiac . "<br>";
		echo "2027 is the year of the : " . chinese_zodiac_2(2027) . "<br>";
		
		?>
	</code>