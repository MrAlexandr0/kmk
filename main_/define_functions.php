<p>A function is a block of statements that can be used repeadetly in a program<br>
It will not execute immediately, but has to be called upon. </p>
<p>The syntax of a function would look like this:</p>
<code class="expl">
function nameoffunction($parameter1, $parameter2, $parameter3){<br>
code to be executed and often calls upon the parameters;<br>	
}
</code>
<p>Her is an example of a function:</p>
<code class="synt">
<?php 
	$example = array();
	$example[] = '<?php';
	$example[] = '	// Simple echo function';
	$example[] = '	Function say_hello(){';
	$example[] = '		echo "Hello World!<br>";';
	$example[] = '	}';
	$example[] = '	say_hello();';
	$example[] = '	// echo with parameter function';
	$example[] = '	function say_hello_to ($word) {';
	$example[] = '		echo "Hello $word !<br>";';
	$example[] = '	}';
	$example[] = '	say_hello_to(alexander);';
	$example[] = '	say_hello_to(Everyone);';
	$example[] = '?>';

speschar($example);

?>
</code>
<p> Here is what it looks like when executed: </p>
<code  class="examp">
	<?php
		// Simple echo function
		Function say_hello(){
			echo "Hello World!<br>";
		}
		say_hello();
		// echo with parameter function
		function say_hello_to ($word) {
			echo "Hello $word !<br>";
		}
		say_hello_to(alexander);
		say_hello_to(Everyone);
	?>
</code>

<p>Remember:</p>
<code class="expl">
-A function can not be redefined<br>
-A function  can be defined after it is being called upon since php will go trough the code before it starts to handle it.</code>