Arguments
<p> Arguments are values that a function recieves from the outside environemnt. <br>
	The defined function will work with this arguments and return a result.<br>
	The name of an oustide variable does not have tomatch the name of the argument.<br>
	Here is an example of a function using arguments:</p>
<code class="synt">
<?php 
	$example = array();
	
	$example[] = '<?php';
	$example[] = '//first we define a name:';
	$example[] = '$defined_name="John Doe";';
	$example[] = '	//here is a function with 3 arguments. Notice the names used:';
	$example[] = '	function better_hello($greeting, $target, $punct) {';
	$example[] = '		//echo out the information:';
	$example[] = '		echo $greeting . " " . $target . $punct . "<br>";';
	$example[] = '	}';
	$example[] = '	// here we call upon the function in differend ways:';
	$example[] = '	better_hello("Normal greeting: Hello", $defined_name, "!");';
	$example[] = '	better_hello("Stronger punct: Hello", $defined_name, "!!!");';
	$example[] = '	better_hello("Punct defined as null: Hello", $defined_name, null)';
	$example[] = '?>';

	speschar($example);

?>
</code>
<p>Here is what it looks like when executed:</p>
<code class="examp">
	<?php 
		//first we define a name:
		$defined_name="John Doe";
			//here is a function with 3 arguments. Notice the names used:
			function better_hello($greeting, $target, $punct) {
				//echo out the information:
				echo $greeting . " " . $target . $punct . "<br>";
			}
			// here we call upon the function in differend ways:
			better_hello("Normal greeting: Hello", $defined_name, "!");
			better_hello("Stronger punct: Hello", $defined_name, "!!!");
			better_hello("Punct defined as null: Hello", $defined_name, null)
	?>

</code>


