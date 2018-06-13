<p class="expl">Return can not handle more than one value. 
	If you want to return more than one value you have to return an array with all the desired values.</p>

<p>Here is an example of how to return multiple values using an array:</p>


	<code class="synt">
	<?php 
		$example = array();

		$example[] = '<?php //multiple values ';
		$example[] = '	function add_subt($val1, $val2){';
		$example[] = '		$add = $val1 + $val2;';
		$example[] = '		$subt = $val1 - $val2;';
		$example[] = '';
		$example[] = '		//Returning both in an array';
		$example[] = '		//let us bring out multiple values';
		$example[] = '		return array($add, $subt); ';
		$example[] = '	}';
		$example[] = '';
		$example[] = '	// ###the simple way';
		$example[] = '	//result_array is now recieving an array:';
		$example[] = '	$result_array = add_subt(10,5);';
		$example[] = '';
		$example[] = '	//echo out both array_values:';
		$example[] = '	echo "add: " . $result_array[0] . "<br>";';
		$example[] = '	echo "subtract: " . $result_array[1] . "<br>";';
		$example[] = '';
		$example[] = '';
		$example[] = '	// ### with list';
		$example[] = '	list($add_result, $subt_result) = add_subt(20,7);';
		$example[] = '';
		$example[] = '	//echo out both array_values:';
		$example[] = '	echo "add: " . $add_result . "<br>";';
		$example[] = '	echo "subtract: " . $subt_result . "<br>";';
		$example[] = '';
		$example[] = '?>		';
		
		speschar($example);
	?>
	</code>





<p>Here is the result of executing that code:</p>
	<code class="examp">
		<?php //multiple values 
			function add_subt($val1, $val2){
				$add = $val1 + $val2;
				$subt = $val1 - $val2;
		
				//Returning both in an array
				//let us bring out multiple values
				return array($add, $subt); 
			}
		
			// ###the simple way
			//result_array is now recieving an array:
			$result_array = add_subt(10,5);
		
			//echo out both array_values:
			echo "add: " . $result_array[0] . "<br>";
			echo "subtract: " . $result_array[1] . "<br>";
		
		
			// ### with list
			list($add_result, $subt_result) = add_subt(20,7);
		
			//echo out both array_values:
			echo "add: " . $add_result . "<br>";
			echo "subtract: " . $subt_result . "<br>";
		
		?>
	</code>