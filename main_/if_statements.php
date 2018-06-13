<p> IF statements are built on the following syntax:</p>
	<code class="expl">

		<?php 
			
			$example = array();

		$example[] = 'if (Expression) {';
		$example[] = 'execute this part;';
		$example[] = '}';

		
		speschar($example);
		
		?>
	


	</code>
	
<p>Here is an example :</p>
	<code class="synt">
		<?php 
			
			$example = array();
		$example[] = '<?php';
		$example[] = '//value is larger than value';
		$example[] = '$a = 2;';
		$example[] = '$b = 1;';
		$example[] = '';
		$example[] = '//Performing the IF:';
		$example[] = 'if ($a > $b) {';
		$example[] = '	echo "a is larger than b";';
		$example[] = '	}		';
		$example[] = '?>';
			speschar($example);
		?>
	</code>

<p> This is what it looks like when the code is executed:</p>

<code class="examp">
	<?php
		//value is larger than value
		$a = 2;
		$b = 1;
		
		//Performing the IF:
		if ($a > $b) {
			echo "a is larger than b";
			}		
	?>
</code>

<p> Another example. Here it is about welcoming new users if the $new_user value is valid:</p>
	<code class="synt">
		<?php 
			$example = array();
			
			$example[] = '<?php';
			$example[] = '//only welcome new users';
			$example[] = '$new_user = true;';
			$example[] = 'if ($new_user) {';
			$example[] = 'echo "Welcome!<br>";';
			$example[] = 'echo "We are glad you decided to join us!";';
			$example[] = '}';
			$example[] = '?>';

			speschar($example);
		?>		
	</code>

<p>Here is what it looks like when the code is executed:</p>
<code class="examp">
	<?php
		//only welcome new users
		$new_user = true;
		
		if ($new_user) {
			echo "Welcome!<br>";
			echo "We are glad you decided to join us!";
		}
	?>
</code>