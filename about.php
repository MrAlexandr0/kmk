	<?php // Lister ut alt i mappa. OLD Expired updated: nå lister ut mapper. skal brukes for input value for bytte av mappe

	/*
	
	//scanner for filer og lister de ut
	$directory = './';
	$unwanted_returns = array('..', '.', '.htaccess', 'index.php');
	$filtered_dir = array_diff(scandir($directory), $unwanted_returns);
	
		foreach ($filtered_dir as $result_val) {
			if (is_dir($result_val)){
				echo "$result_val";
				}

			}
	*/
	?>

<br>

<?php // Tiles of files

	//flytter oss til rett filmappe:
	$oldPath = getcwd();
	chdir('../docs.cloudberry.it/');

	// create a container around the tiles
	echo '<div class="wrapper">';

	//Define the path to scan:
	$path = './';
		//clean out unwanted entries:
		foreach (new DirectoryIterator($path) as $fileInfo) {
		
			//Check for something like .htaccess in addition to . and ..
			$fileName = $fileInfo->getFileName();
			if(strlen(strstr($fileName, '.', true)) < 1) continue;
		
		/* Sort by filetype:
		
		*/
		if ( 	endsWith($fileName, ".pdf")
			){
				$docstack_val = "pdf";

		}elseif (endsWith($fileName, ".doc")
			|| 	endsWith($fileName, ".docx")
			|| 	endsWith($fileName, ".odt")
			|| 	endsWith($fileName, ".rtf")
			){
				$docstack_val = "doc";
		
		}elseif (endsWith($fileName, ".jpg")
			|| 	endsWith($fileName, ".jpeg")
			|| 	endsWith($fileName, ".png")
			|| 	endsWith($fileName, ".gif")
			|| 	endsWith($fileName, ".svg")
			){
				$docstack_val = "picture";

		}elseif (endsWith($fileName, ".xls")
			|| 	endsWith($fileName, ".xlsx")
			|| 	endsWith($fileName, ".csv")
			|| 	endsWith($fileName, ".uos")
			|| 	endsWith($fileName, ".uof")
			|| 	endsWith($fileName, ".odp")
			|| 	endsWith($fileName, ".odg")
			|| 	endsWith($fileName, ".otp")
			){
				$docstack_val = "xls";

		}elseif (endsWith($fileName, ".txt")
			){
				$docstack_val = "txt";

		}elseif (endsWith($fileName, ".php")
			|| 	endsWith($fileName, ".py")
			|| 	endsWith($fileName, ".html")
			|| 	endsWith($fileName, ".css")
			|| 	endsWith($fileName, ".xls")
			|| 	endsWith($fileName, ".exe")
			){
				$docstack_val = "code";

		}elseif (endsWith($fileName, ".zip")
			|| 	endsWith($fileName, ".rar")
			|| 	endsWith($fileName, ".7zip")
			|| 	endsWith($fileName, ".tar")
			|| 	endsWith($fileName, ".gz")
			){
				$docstack_val = "compressed";

		}elseif (endsWith($fileName, ".vsd")
			|| 	endsWith($fileName, ".vsdx")
			){
				$docstack_val = "visio";

		}elseif (endsWith($fileName, ".iso")
			|| 	endsWith($fileName, ".img")
			|| 	endsWith($fileName, ".dmg")
			|| 	endsWith($fileName, ".dat")
			|| 	endsWith($fileName, ".udf")
			){
				$docstack_val = "iso";
		}else{
				$docstack_val = "other";
		}

		$docstack_type = "docstack_" . $docstack_val; //color of the tile
		$docstack_text = "docstacktext_" . $docstack_val; // color of the text
		$docstack_pic = "document" . ".png"; //which picture
		
		//echo "$fileName<br>";
		echo '<div class="' . $docstack_type . '" ID="docstack">';
		echo '<a class="cleanurl" target="_blank" href="' . "http://docs.cloudberry.it/" . $fileName . '">';
		echo '<div><img src="img/icon/' . $docstack_pic . '" alt="' . $fileName . '"></div>';
		echo '<div class="' . $docstack_text . '" ID="docstacktext">'. $fileName . '</div>';
		echo '</a>';
		echo "</div>";
		


		} //foreach ends here

	// close container around the tiles
	echo '</div>';

	//flytter tilbake til gammel mappe
	chdir($oldPath);

?>
