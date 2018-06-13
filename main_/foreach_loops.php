<p> The syntax of a foreach loop looks like this: </p>
	<code class="expl"> 
		foreach ( $array as $value ) {<br>
			execute this;<br>
		}
	</code>

<p> Here is an example of a foreach loop that echoes all the values of an array back to the webbrowser: </p>
	<code class="synt">
	<?php 
		$example = array();

		$example[] = '<?php //example of a foreach loop that echoes all the values back:';
		$example[] = '';
		$example[] = '//Defining an array with values:';
		$example[] = '$ages = array(4,8,15,16,23,42);';
		$example[] = '';
		$example[] = '//looping it:';
		$example[] = 'foreach ($ages as $value){';
		$example[] = '	echo "Age: {$value}<br>\n";';
		$example[] = '	}';
		$example[] = '';
		$example[] = '?>';

		speschar($example);
	?>

	</code>

<p> This is what the code looks like when executed:</p>
	<code class="examp"> 
		<?php //example of a foreach loop that echoes all the values back:
		//Defining an array with values:
		$ages = array(4,8,15,16,23,42);

		//looping it:
		foreach ($ages as $value){
			echo "Age: {$value}<br>\n";
			}
		?>
	</code>

<p> Here is a more complex example of a foreach loop using assoc. array, where each attribute of a person is listed with the value:</p>
	<code class="synt">
		<?php 
			$example = array();
		
			$example[] = '	<?php // foreach using assoc. array';
			$example[] = '	';
			$example[] = '	//Defining an array ';
			$example[] = '	$person = array(';
			$example[] = '		"first_name" => "Alexander",';
			$example[] = '		"last_name" => "Klein",';
			$example[] = '		"address" => "Ringvålvegen 352b",';
			$example[] = '		"city" => "Trondheim",';
			$example[] = '		"state" => "Sør Trønderlag",';
			$example[] = '		"zip_code" => "7038"';
			$example[] = '	);';
			$example[] = '	';
			$example[] = '	echo "<table border=2>";';
			$example[] = '	';
			$example[] = '	//Executing the foreach within a table: ';
			$example[] = '	foreach ($person as $attributt => $verdi){';
			$example[] = '		echo "<tr>";';
			$example[] = '		$fix_attr = ucwords(str_replace("_", " ", $attributt));';
			$example[] = '		echo "<td>{$fix_attr}</td> <td>{$verdi}</td>";';
			$example[] = '		echo "</tr>";';
			$example[] = '	}';
			$example[] = '	';
			$example[] = '	echo "</table>";';
			$example[] = '	';
			$example[] = '	?>';
			
			speschar($example);
		
		?>
	
	</code>


<p> The code will look like this when executed: </p>
<code class="examp">
<?php // foreach using assoc. array
	$person = array(
		"first_name" => "Alexander",
		"last_name" => "Klein",
		"address" => "Ringvålvegen 352b",
		"city" => "Trondheim",
		"state" => "Sør Trønderlag",
		"zip_code" => "7038"
	);
	echo "<table border='2'>";
	foreach ($person as $attributt => $verdi){
		echo "<tr>";
		$fix_attr = ucwords(str_replace("_", " ", $attributt));
		echo "<td>{$fix_attr}</td> <td>{$verdi}</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</code>


<p> Yet another example: </p>
<code class="synt">
<?php 
		$example = array();
		
		$example[] = '<?php ';
		$example[] = '	$prices = array("Brand new computer" => 2000,';
		$example[] = '					"1 month of lynda.com" => 25,';
		$example[] = '					"learning PHP" => null';
		$example[] = '					);';
		$example[] = '	foreach ($prices as $item => $price){';
		$example[] = '		echo "$item; ";';
		$example[] = '		if (is_int($price)){';
		$example[] = '			echo $price . "$";';
		$example[] = '		} else {';
		$example[] = '			echo "priceless";';
		$example[] = '		} //end of if';
		$example[] = '		echo "<br>";';
		$example[] = '	} // end of foreach';
		$example[] = '	';
		$example[] = '?>';
		speschar($example);
?>
</code>

<p> Executing the code will look like this: </p>
	<code class="examp"> 
		<?php 
			$prices = array("Brand new computer" => 2000,
							"1 month of lynda.com" => 25,
							"learning PHP" => null
							);
			foreach ($prices as $item => $price){
				echo "$item; ";
				if (is_int($price)){
					echo $price . "$";
				} else {
					echo "priceless";
				} //end of if
				echo "<br>";
			} // end of foreach
			
		?>
	
	</code>