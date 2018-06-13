<p> Continue will immediately continue the loop, incrementing the value and moving on, without executing any more of the code within the loop.
	To understand what a continue does, imagine that there is a continue at the end of every for-loop.
	By manually placing it within a for-loop, you hasten the "end-game" and it will be as if you just skipped the code within the for loop for that exact value.
</p>

<p> Here is an example of how to use a contiune: </p>
	<code class="synt">
		<?php 
			$example = array();

			$example[] = '	<?php ';
			$example[] = '	/* this for loop sets 0 as start value, ';
			$example[] = '		will loop as long as value is less than or equal to 10,'; 
			$example[] = '		and it will increment by 1 */';
			$example[] = '	';
			$example[] = '	for ($count=0; $count <= 10; $count+=1) {';
			$example[] = '		';
			$example[] = '		if ($count == 5){';
			$example[] = '			// we placed continue here. It skips the rest and increments the count';
			$example[] = '			continue;';
			$example[] = '		} //If is done';
			$example[] = '		';
			$example[] = '		echo $count . ", ";';
			$example[] = '		';
			$example[] = '		// this is where it would normally execute the continue; and set $count += 1,';
			$example[] = '		// as we have reached the end of the for-loop';
			$example[] = '	} // for is done';
			$example[] = '	';
			$example[] = '	?>';

			speschar($example);
		?>
	</code>
