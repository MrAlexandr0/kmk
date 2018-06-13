	<p> Else and Elseif statements are built on the following syntax:</p>
	<code class="expl"> 

	<?php 
		$example = array();

		$example[] = '	if (expression) {';
		$example[] = '	Execute this due to this expression';
		$example[] = '	} elseif (expression) {';
		$example[] = '	Execute this due to this expression';
		$example[] = '	} else {';
		$example[] = '	execute this due to no spesified expression';
		$example[] = '	}';

		speschar($example);
	?>
	</code>
	
	<p> Here is an example of a value comparison between the value $a and the value $b. 
		<br>We are going to detect which value is the greatest, or if they are equal:
	</p>
	<code class="synt">
	<?php
$example = array();
$example[] = '		// Detect largest value using else and elseif';
$example[] = '		if ($a > $b){';
$example[] = '			echo "a is larger than b";';
$example[] = '		}elseif ($a < $b) {';
$example[] = '			echo "a is smaller than b";';
$example[] = '		}else{';
$example[] = '			echo "a is equal to b";';
$example[] = '		}';

speschar($example);
?>

	</code>
	<p> It will look like this when executed: </p>
<code class="examp">
<?php 
		// Detect largest value using else and elseif
		if ($a > $b){
			echo "a is larger than b";
		}elseif ($a < $b) {
			echo "a is smaller than b";
		}else{
			echo "a is equal to b";
		}
	
	
?>
</code>