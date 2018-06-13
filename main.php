
<h2> Velkommen til våre nettsider </h2>


	<p> Besøk våre konsepter for å lære mer om løsningene vi tilbyr din bedrift

	</p>
	
<h2> Contents</h2>

<?php		//array med innholdsfortegnelse
	 /*	$content_sublist[0]='filnavn'
		$content_sublist[1]='name_id'
		$content_sublist[2]='description' 
		 							filnavn				name_id			description		*/
$contentlist = array (	array ("if_statements.php", "if_statements", "if statements"),
						array ("else_elseif.php", "else_elseif", "else and elseif"),
						array ("logical_operators.php", "logical_operators", "Logical operators"),
						array ("switch_statements.php", "switch_statements", "Switch statements"),
						array ("while_loops.php", "while_loops", "While loops"),
						array ("for_loops.php", "for_loops", "For loops"),
						array ("foreach_loops.php", "foreach_loops", "foreach loops"),
						array ("continue.php", "continue", "Continue"),
						array ("array_pointers.php", "array_pointers", "Array pointers"),
						array ("define_functions.php", "define_functions", "Functions: Define Function"),
						array ("function_arguments.php", "function_arguments", "Functions: Arguments"),
						array ("returning_values.php", "returning_values", "Functions: Returning Values"),
						array ("multiple_return_values.php", "returning_multiple_values", " Functions: Returning Multiple Values"),
						array ("scope_global_val.php", "scope_global_val", " Scope and Global Variables"),
						array ("default_arguments.php", "default_arguments", " Functions: Default Argument Vaules"),
						array ("links_and_urls.php", "links_and_urls", " Webpages: Links and URLs"),
						array ("links_and_urls_get.php", "links_and_urls_get", " Webpages: Links and URLs - Get")
);
echo "<br>";
print_r($_GET);
echo "<br>";

	//	Innholdsfortegnelse
	foreach ($contentlist as $content_sublist){
		echo "<a id='" . "content_list'" . " href='" . "#$content_sublist[1]'" . "> - $content_sublist[2] </a><br>\n";
	}
	
	//	Sideinnhold
	foreach ($contentlist as $content_sublist){
		echo '<a name="' . $content_sublist[1] . '"></a>' . "\n";
		echo  "<h2> $content_sublist[2] </h2>\n";
		include("main_/$content_sublist[0]");
		
	}
?>
 