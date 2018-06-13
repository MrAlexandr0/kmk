<div id="topmenu">

	<div id="menubar">
<?php	//array med lenker på toppen
	 
	 /*	$content_sublist[0]='routepath'
		$content_sublist[1]='phpname'
		$content_sublist[2]='description' 
		 					routepath	phpname	 description		*/
$contentlist = array (	array ("/", "main.php", "KMK Holding"),
						array ("/", "about.php", "Om KMK Holding"),
						array ("/", "customer.php", "Kunder"),
						array ("/", "playroom.php", "Lekerom"),
						array ("/", "cmeny.php", "Barnemeny"),
						array ("/", "headsup.php", "Heads-UP"),
						array ("/", "automater.php", "Automater"),
						array ("/", "contact.php", "Kontakt KMK"),
						array ("http://www.facebook.com/kmkholding", "blogg", "Social")
);
	//	Innholdsfortegnelse
	foreach ($contentlist as $content_sublist){
		echo "<a id='" . "menubutton'" . " class='" . "fright'" . " href='" . "$content_sublist[0]?urlid=$content_sublist[1]'" . ">$content_sublist[2] </a>\n";
	}
		/*<a id="menubutton" class="fright">Nyheter</a> 
		<a id="menubutton" class="fright">Filer</a> 
		<a id="menubutton" class="fright">Media</a>
		
		<a id="menubutton" class="fright">Blogg</a> 
		<a id="menubutton" class="fright">Epost</a> 
		<a id="menubutton" class="fright">Hjem</a> */
?>

	</div>
	
	
</div>

