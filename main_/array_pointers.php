<p>Array pointers can be used to navigate trough the values within the arrays. It is possible to show current, goto next, goto previous, goto end, goto beginning</p>
<h3>How to use Array pointers</h3>
<p> Here are som ways of using Array pointers to navigate an array: </p>
<code class="expl">
current($array) - Shows what value is pointed out/selected in the array.<br>
next($array) - Moves the poinger to the next value in the array, like placing a continue within a loop.<br>
prev($array) - Moves the pointer to the previous value in the array.<br>
end($array) - moves the pointer to the end of the array.<br>
reset($array) - Moves the pointer to the beginning of an array<br>
</code>
<p>Here is an example to show how to use array pointers:</p>
<code class="synt">
<?php 
	$example = array();
$example[] = ' <?php // show the currently selected value within an array';
$example[] = ' 	//define an array ';
$example[] = ' 	$ages = array(4,8,15,16,23,42); ';
$example[] = ' 	 ';
$example[] = ' 	//list all the ages with a position ';
$example[] = ' 	$array_counter = 0; ';
$example[] = ' 	foreach ($ages as $value){ ';
$example[] = ' 		$array_counter += 1; ';
$example[] = ' 		echo "[" . $array_counter . "]" . $value . " "; ';
$example[] = ' 		} ';
$example[] = ' 		echo "<br>"; ';
$example[] = ' 	 ';
$example[] = ' 	// reset the array ';
$example[] = ' 		reset($ages); ';
$example[] = ' 	// show current value ';
$example[] = ' 		echo "current: " . current($ages) . "<br>"; ';
$example[] = ' 	//Next value: move the pointer forward(like continue inside a loop) ';
$example[] = ' 		next($ages); ';
$example[] = ' 		echo "pointer_1_next: " . current($ages) . "<br>"; ';
$example[] = ' 	//Skip 2 values ';
$example[] = ' 		next($ages); ';
$example[] = ' 		next($ages); ';
$example[] = ' 		echo "2 more skips: " . current($ages) . "<br>"; ';
$example[] = ' 	// one backwards ';
$example[] = ' 		prev($ages); ';
$example[] = ' 		echo "go 1 back: " . current($ages) . "<br>"; ';
$example[] = ' 	// all the way do the end.  ';
$example[] = ' 		end($ages); ';
$example[] = ' 		echo "goto_end: " . current($ages) . "<br>"; ';
$example[] = ' 	//reset the array ';
$example[] = ' 		reset($ages); ';
$example[] = ' 		echo "back to beginning : " . current($ages) . "<br>"; ';
$example[] = ' ?> ';

speschar($example);

?>
</code>


<p> This is how the code looks when executed: </p>
<code class="examp">
<?php // show the currently selected value within an array
	
	//define an array
	$ages = array(4,8,15,16,23,42);
	
	//list all the ages with a position
	$array_counter = 0;
	foreach ($ages as $value){
		$array_counter += 1;
		echo "[" . $array_counter . "]" . $value . " ";
		}
		echo "<br>";
	
	// reset the array
	reset($ages);
	
	// show current value
	echo "current: " . current($ages) . "<br>";
	
	//Next value: move the pointer forward(like continue inside a loop)
	next($ages);
	echo "pointer_1_next: " . current($ages) . "<br>";
	
	//Skip 2 values 
	next($ages);
	next($ages);
	echo "2 more skips: " . current($ages) . "<br>";
	
	// one backwards
	prev($ages);
	echo "go 1 back: " . current($ages) . "<br>";
	
	// all the way do the end. 
	end($ages);
	echo "goto_end: " . current($ages) . "<br>";
	
	//reset the array
	reset($ages);
	echo "back to beginning : " . current($ages) . "<br>";
	
?>
</code>