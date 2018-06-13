	<p>Switch statements are built using the following syntax:</p>
	<code class="expl">
	switch (Value){
		<br>case if_this_is_within_chosen_value:
			<br>execute this
		<br>case if_this_is_within_chosen_value:
			<br>execute this
		<br>default:
			<br>execute this if none of the desired values where correct
	<br>}
	</code>
	
	<p> Here is an example of a case where we have a value named $number and what happends depending on different set values: </p>
		<code class="synt">
			<?php

				$example = array();
	
				$example[] = '<?php';
				$example[] = '	// Switch with break ';
				$example[] = '	$number = 3;';
				$example[] = '	';
				$example[] = '	switch ($number){';
				$example[] = '		case 0:';
				$example[] = '		echo "number equals zero";';
				$example[] = '		break;';
				$example[] = '		case 1:';
				$example[] = '		echo "number equals one";';
				$example[] = '		break;';
				$example[] = '		case 2:';
				$example[] = '		echo "number equals two";';
				$example[] = '		break;';
				$example[] = '		case 3:';
				$example[] = '		echo "number equals three";';
				$example[] = '		break;';
				$example[] = '		default:';
				$example[] = '		echo "number equals none of the options";';
				$example[] = '		break;';
				$example[] = '	}';
				$example[] = '?>';
	
				speschar($example);

			?>	
		</code>
	
	<p>Here is what the code looks like when executed: </p>
		<code class="examp">
				<?php
					// Switch with break 
					$number = 3;

					switch ($number){
						case 0:
						echo "number equals zero";
						break;
						case 1:
						echo "number equals one";
						break;
						case 2:
						echo "number equals two";
						break;
						case 3:
						echo "number equals three";
						break;
						default:
						echo "number equals none of the options";
						break;
					}
				?>
		</code>

<h3> Switch with multiple values </h3>
	<p> Sometimes it is necessary to execute one statement for several cases. here is an example of how to do this in php:<p>

			<code class="synt"> 
				<?php
				$example = array();

				$example[] = '<?php // use case with one statement for multiple cases';
				$example[] = ' ';
				$example[] = '//define usertype:';
				$example[] = '$user_type = "customer";';
				$example[] = ' ';
				$example[] = 'switch ($user_type){ //Begin:';
				$example[] = ' ';
				$example[] = '	//Single case';
				$example[] = '	case "student":';
				$example[] = '		echo "welcome youngling";';
				$example[] = '		break;';
				$example[] = ' ';
				$example[] = '	//Double case';
				$example[] = '	case "press";';
				$example[] = '	case "customer";';
				$example[] = '		echo "Hello you whom i want to give a great impression";';
				$example[] = '		break;';
				$example[] = ' ';
				$example[] = '	// triple case';
				$example[] = '	case "board_members";';
				$example[] = '	case "boss" ;';
				$example[] = '	case "officials";';
				$example[] = '		echo "We are making alot of money";';
				$example[] = '		break;';
				$example[] = ' ';
				$example[] = '	//Add as many cases you want by stacking them, then execute a command';
				$example[] = '	} //End of switch';
				$example[] = ' ';
				$example[] = '?>';

				speschar($example);
				?>
			</code>


			<p> Here is how the code looks when executed: </p>

			<code class="examp"> 
				<?php // use case with one statement for multiple cases

				//define usertype:
				$user_type = "customer";

				switch ($user_type){ //Begin:

					//Single case
					case "student":
						echo "welcome youngling";
						break;

					//Double case
					case "press";
					case "customer";
						echo "Hello you whom i want to give a great impression";
						break;

					// triple case
					case "board_members";
					case "boss" ;
					case "officials";
						echo "We are making alot of money";
						break;

					//Add as many cases you want by stacking them, then execute a command

					} //End of switch
				?>
			</code>

	<p>As you can see, the execution of one of the commands can occur to multiple case values
		such as student, baby, teenager etc..</p>