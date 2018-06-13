<h3> Comparison operators: Equal - Not equal</h3>
	<p> Here are some comparison operators using the = sign: </p>
			<code class="expl"> 
				Set a value: =<br> 
				Equal: ==<br> 
				Identical: ===
			</code>
		
		<p> The differense between equal and identical is that 1 2 3 as numbers can be equal to "1" "2" "3" as string values. 
		<br>When using identical it has to be the exact same! which means that the number 2 is not identical to the string "2"</p>
			
	<p> Here are some comparison operators using the NOT equal: </p>
			
		<code class="expl"> 
			Not equal: !=<br>
			Not identical: !==
		</code>
			
	<p> Notice that one of the equal [=] signs are replaced by the exclamation point [!] when using NOT equal or identical </p>
	
<h3> Logical operators [ AND -- OR -- NOT] </h3>
		<code class="expl">
			<?php 
				$example = array();
				
				$example[] = 'and: &&';
				
				speschar($example);
			?>			
		</code>
		
	<p> AND require to include combination as a neccesity. If a value meets a certain requirement AND the other value meets a certain requirement, THEN we can execute the following code</p>

		<code class="expl"> 
			<?php 
				$example = array();

				$example[] = '';
				$example[] = 'or: ||';
				
				speschar($example);
			?>
		</code>
		
	<p> OR require only to meet one of the chosen requirements. If a value meets a certain requirement OR the other value meets a certain requirement, THEN we can execute the following code </p>
	
		<code class="expl">
			<?php 
				$example = array();

				$example[] = '';
				$example[] = 'not: !';
				
				speschar($example);
			?>
		</code>
		
	<p> NOT require a valute to not meet a certain requirement. If a value does not meet a certain requirement, THEN we can execute the following code </p>
		
	<p> Here is an example using AND in a IF-else: </p>
		
		<code class="synt">
			<?php 
				$example = array();
				
				$example[] = '			<?php';
				$example[] = ' //value comparison sample using AND,meaning both conditions needs to be met';
				$example[] = '	$a = 4;';
				$example[] = '	$b = 3;';
				$example[] = '	$c = 1;';
				$example[] = '	$d = 20;';
				$example[] = '	';
				$example[] = '	if ( ($a > $b) && ($c > $d) ){';
				$example[] = '		echo "a is larger than b AND ";';
				$example[] = '		echo "c is larger than d";';
				$example[] = '	} else {';
				$example[] = '		echo "negative";';
				$example[] = '	}';
				$example[] = '	?>';

				speschar($example);
			?>
		</code>
		
	<p> This is how the code looks like when executed: </p>
		<code class="examp">
			<?php
 				//value comparison sample using AND,meaning both conditions needs to be met
					$a = 4;
					$b = 3;
					$c = 1;
					$d = 20;
					
				if ( ($a > $b) && ($c > $d) ){

					echo "a is larger than b AND ";
					echo "c is larger than d";

				} else {
					echo "negative";
					}
			?>
		</code>
	
	<p> Since c is not larger than d, it will display the negative text. Lets do the same using OR instead:</p>
				
		<code class="synt">
			<?php 
				$example = array();
				
				$example[] = '<?php';
				$example[] = '//value comparison sample using OR, only one of the two conditions need to be met';
				$example[] = '	$a = 4;';
				$example[] = '	$b = 3;';
				$example[] = '	$c = 1;';
				$example[] = '	$d = 20;';
				$example[] = '	';
				$example[] = '	if ( ($a > $b) || ($c > $d) ){';
				$example[] = '		echo "a is larger than b AND ";';
				$example[] = '		echo "c is larger than d";';
				$example[] = '	} else {';
				$example[] = '		echo "negative";';
				$example[] = '		}';
				$example[] = '?>';

				speschar($example);
			?>
		</code>
	
	<p>Here is what the code looks like when it is executed:</p>
		<code class="examp">
			<?php
			//value comparison sample using OR, only one of the two conditions need to be met
				$a = 4;
				$b = 3;
				$c = 1;
				$d = 20;
				
				if ( ($a > $b) || ($c > $d) ){
					echo "a is larger than b AND ";
					echo "c is larger than d";
				} else {
					echo "negative";
					}
			?>
		</code>

	<p> Now it will display that a is larger than b, and that c is larger than d. Allthough c is not larger than d, but because of the fact that one of the two conditions are met it will now display this</p>
		
<h3> Using the empty operator </h3>
	
	<p> You do not want to accept blank / NULL values but you do want to accept 0 or 0.0. 
		What you can do is use the logical <?php spescharsingle('&&'); ?> operator and make sure the value entered is not empty as in NULL or not numeric: </p>
		
		<code class="synt">
			<?php

			$example = array();

			$example[] = '<?php';
			$example[] = '	// dont reject 0 or 0.0';
			$example[] = '	$quantity = "";';
			$example[] = '	';
			$example[] = '	if ( empty($quantity) && !is_numeric($quantity) ){';
			$example[] = '		echo "you must enter a quantity.";';
			$example[] = '	} else {';
			$example[] = '		echo "you have entered a quantity";';
			$example[] = '	}';
			$example[] = '?>';

			speschar($example);

			?>
		</code>

	<p>The code will look like this when executed: </p>
		
		<code class="examp">
			<?php
				// dont reject 0 or 0.0
				$quantity = "";
				
				if ( empty($quantity) && !is_numeric($quantity) ){
					echo "you must enter a quantity.";
				} else {
					echo "you have entered a quantity";
				}
			?>
		</code>
		