<p> The while-loop syntax looks like : </p>
	<code class="expl"> 
			While (expression) {
			<br>this gets executed;
			<br>}
	</code>

<p> A While-loop does the execution part while the expression still is valid, and will loop untill it is not </p>

<p> Here is an example: </p>
	<code class="synt">
		<?php 
		$example = array();
	
		$example[] = '<?php // a while-loop';
		$example[] = '';
		$example[] = '	//define a value';
		$example[] = '	$count = 0;';
		$example[] = '	';
		$example[] = '	//do something while that value meets a condition:';
		$example[] = '	while ( $count <= 10 ) {';
		$example[] = '		echo $count . ", ";';
		$example[] = '		';
		$example[] = '		//increment value to avoid ethernal-loop';
		$example[] = '		$count += 1;';
		$example[] = '		//could do $count++;';
		$example[] = '		}';
		$example[] = '';
		$example[] = '?>';
	
		speschar($example);
	
		?>
	</code>

<p> The code will look like this when executed:</p> 

	<code class="examp"> 
		<?php // a while-loop
	
			//define a value
			$count = 0;
			
			//do something while that value meets a condition:
			while ( $count <= 10 ) {
				echo $count . ", ";
				
				//increment value to avoid ethernal-loop
				$count += 1;
				//could do $count++;
				}
		?>
	</code>

<p> An example with the modulo operator: </p>

	<code class="synt">
	<?php

	$example = array();

	$example[] = '	<?php';
	$example[] = '		// an example of a while loop using increments ';
	$example[] = '		//and modulo operator to separate odds from evens';
	$example[] = '		$counter = 0;';
	$example[] = '		while ( $counter <= 20 ) {';
	$example[] = '	';
	$example[] = '			// what is left after dividing by 2?';
	$example[] = '			if ( ($counter % 2) == 0 ) {';
	$example[] = '				echo $counter . " er partall <br>\n";';
	$example[] = '			} else {';
	$example[] = '				echo $counter . " er oddetall <br>\n";';
	$example[] = '				}';
	$example[] = '';
	$example[] = '			//Increment to avoid ethernal loop';
	$example[] = '			$counter += 1;';
	$example[] = '		}';
	$example[] = '		';
	$example[] = '		echo "ferdig";';
	$example[] = '	?>';

	speschar($example);

	?>
	</code>

<p> When executed the code will look like this: </p>

	<code class="examp">
	<?php
		// an example of a while loop using increments 
		//and modulo operator to separate odds from evens
		$counter = 0;
		while ( $counter <= 20 ) {

			// what is left after dividing by 2?
			if ( ($counter % 2) == 0 ) {
				echo $counter . " er partall <br>\n";
			} else {
				echo $counter . " er oddetall <br>\n";
				}

			//Increment to avoid ethernal loop
			$counter += 1;
		}
		
		echo "ferdig";
	?>
	</code>
