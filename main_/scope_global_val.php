<p class="expl"> Having a variable on the inside of a function not being accessible on the outside of the function by default is due to a variable scope.<br> 
	The function is then the variable's scope. There's two main scopes:<br> 
	-Global scope<br>
	-Local scope(restricted reachability due to isolation)<br>
A variable inside of a function can be defined as global by using "global $variable_name"</p>

<p>Here is an example of using local and global variables: </p>
	
	<code class="synt">
	<?php 
		$example = array();


		$example[] = '<?php ';
		$example[] = '	$bar = "outside"; // global scope';
		$example[] = '		';
		$example[] = '	function foo(){';
		$example[] = '		';
		$example[] = '		// ## edit: adding in the variable declared as a global variable';
		$example[] = '		//defining $bar as global. Getting it from outside';
		$example[] = '		global $bar;';
		$example[] = '';
		$example[] = '			// ## edit: adding in this if, to check if $bar exists';
		$example[] = '			if (isset($bar)){';
		$example[] = '				echo "foo: " . $bar . "<br>";';
		$example[] = '				} // End of if';
		$example[] = '';
		$example[] = '		$bar = "inside"; //local scope';
		$example[] = '	}';
		$example[] = '';
		$example[] = '	//echoing out variable $bar. Now it is the global one we are calling';
		$example[] = '	echo "1: " . $bar . "<br>";';
		$example[] = '';
		$example[] = '	//calling the function foo() .... but not echoing out.';
		$example[] = '	// ## edit echoing when defining $bar as global';
		$example[] = '	foo();';
		$example[] = '';
		$example[] = '	//echoing out $bar again. still it is the global one we are calling';
		$example[] = '	// ## edit: echoing out the inside variable as it is now declared global and redefined inside function';
		$example[] = '	echo "2:" . $bar . "<br>";';
		$example[] = '?>		';

		speschar($example);
	?>
	</code>

<p>This is what the code looks like when executed </p>

	<code class="examp">
	<?php 
		$bar = "outside"; // global scope
	

		function foo(){

			// ## edit: adding in the variable declared as a global variable
			//defining $bar as global. Getting it from outside
			global $bar;
	
				// ## edit: adding in this if, to check if $bar exists
				if (isset($bar)){
					echo "foo: " . $bar . "<br>";
					} // End of if
	
			$bar = "inside"; //local scope
		}
	
		//echoing out variable $bar. Now it is the global one we are calling
		echo "1: " . $bar . "<br>";
	
		//calling the function foo() .... but not echoing out.
		// ## edit echoing when defining $bar as global
		foo();
	
		//echoing out $bar again. still it is the global one we are calling
		// ## edit: echoing out the inside variable as it is now declared global and redefined inside function
		echo "2:" . $bar . "<br>";
	?>
	</code>