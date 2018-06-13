<p>Normally a function with 2 arguments must be called with 2 values for matching those arguments. There is a way around that, by setting default argument values </p>

<p>Here is an example containing a function as it evolves over 3 versions. It evolves so that it can be called upon without any arguments: </p>
	<code class="synt">
		<?php 
			$example = array();
	
			$example[] = '	<?php // foreach using assoc. array';
			$example[] = '<?php ';
			$example[] = '	// Ver 1';
			$example[] = '	function paint_v1($color){ //requires a value for $color';
			$example[] = '		return "Ver:1 - The color of the room is " . $color . "<br>";';
			$example[] = '	}';
			$example[] = '	';
			$example[] = '	//will result in error due to lack of value';
			$example[] = '	// echo paint_v1();';
			$example[] = '	';
			$example[] = '	//will work due to provided value:';
			$example[] = '	echo paint_v1("blue");';
			$example[] = '	';
			$example[] = '	// Ver 2';
			$example[] = '	function paint_v2($color="red_default"){ // now has a default argument value';
			$example[] = '		return "Ver:2 - The color of the room is " . $color . "<br>";';
			$example[] = '	}';
			$example[] = '	';
			$example[] = '	//can now be called upon without a value';
			$example[] = '	echo paint_v2();';
			$example[] = '';
			$example[] = '	// Ver 3';
			$example[] = '	function paint_v3($room="office_default",$color="red_default"){';
			$example[] = '		return "The color of the " . $room . " is " . $color . ".<br>";';
			$example[] = '	}';
			$example[] = '';
			$example[] = '	//can now be called upon wihtout any values';
			$example[] = '	echo paint_v3();';
			$example[] = '	echo paint_v3("bedroom","blue");';
			$example[] = '	echo paint_v3("bedroom",null);';
			$example[] = '';
			$example[] = '	//important to have important arguments first, then have optionals afterwards.';
			$example[] = '?>		';

			speschar($example);
		?>
	</code>

<p>When executed the code will look like this: </p>
	<code class="examp">
		<?php 
			// Ver 1
			function paint_v1($color){ //requires a value for $color
				return "Ver:1 - The color of the room is " . $color . "<br>";
			}
			
			//will result in error due to lack of value
			// echo paint_v1();
			
			//will work due to provided value:
			echo paint_v1("blue");
			
			// Ver 2
			function paint_v2($color="red_default"){ // now has a default argument value
				return "Ver:2 - The color of the room is " . $color . "<br>";
			}
			
			//can now be called upon without a value
			echo paint_v2();
		
			// Ver 3
			function paint_v3($room="office_default",$color="red_default"){
				return "The color of the " . $room . " is " . $color . ".<br>";
			}
		
			//can now be called upon wihtout any values
			echo paint_v3();
			echo paint_v3("bedroom","blue");
			echo paint_v3("bedroom",null);
		
			//important to have important arguments first, then have optionals afterwards.
		?>
	</code>