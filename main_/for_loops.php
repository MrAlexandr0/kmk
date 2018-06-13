<p> The syntac for a for loop would look like this :</p>
	<code class="expl"> 
		for (initial; do_untill_conditions_met; todo_each_time) {<br>
		execute this;<br>
		}
	</code>

<p> Here is an example on how to use a for-loop: </p>
	<code class="synt">
	<?php 

		$example = array();

		$example[] = '	<?php';
		$example[] = '';
		$example[] = '	// simple for loop for incrementing numbers';
		$example[] = '	for( $count = 0; $count <= 10; $count+=1){';
		$example[] = '		echo $count . ", ";';
		$example[] = '	}';
		$example[] = '';
		$example[] = '?>	';

		speschar($example);
	?>

	</code>

<p> This is what the code looks like when executed: </p>
	<code class="examp">
		<?php
			// simple for loop for incrementing numbers
			for( $count = 0; $count <= 10; $count+=1){
				echo $count . ", ";
			}
		?>	
	</code>
	
<p> Another example: </p>
	<code class="synt">
		<?php
		$example = array();

		$example[] = '<?php';
		$example[] = '';
		$example[] = '	// example with odds and evens';
		$example[] = '	for ($count = 20; $count > 0; $count-=1){';
		$example[] = '		if ( ($count % 2) == 0) {';
		$example[] = '			echo "{$count} is even.<br />\n";';
		$example[] = '		}else {';
		$example[] = '			echo "{$count} is odd.<br />\n"; }';
		$example[] = '	}';
		$example[] = '';
		$example[] = '?>';
		
		speschar($example);

		?>
	</code>

<p> When the code is executed it will look like this:</p>
	<code class="examp">
		<?php
			// example with odds and evens
			for ($count = 20; $count > 0; $count-=1){
				if ( ($count % 2) == 0) {
					echo "{$count} is even.<br />\n";
				}else {
					echo "{$count} is odd.<br />\n"; }
			}
		?>
	</code>