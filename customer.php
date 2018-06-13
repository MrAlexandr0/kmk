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

<?php 

Echo "Customer"
/*
	// Tiles of files

		//flytter oss til rett filmappe:
		$oldPath = getcwd();
		chdir('../file.cloudberry.it/');

		// create a container around the tiles
		echo '<div class="wrapper">';

		//Define the path to scan:
		$path = './';
			
		//clean out unwanted entries:
			foreach (new DirectoryIterator($path) as $fileInfo) {
			
				//Check for something like .htaccess in addition to . and ..
				$fileName = $fileInfo->getFileName();
				if(strlen(strstr($fileName, '.', true)) < 1) continue;
			
			// Sort by filetype:
			

			if ( 	endsWith($fileName, ".jpg")
				|| 	endsWith($fileName, ".png")
				|| 	endsWith($fileName, ".jpeg")
				|| 	endsWith($fileName, ".gif")
				|| 	endsWith($fileName, ".svg")
				){
					$filestack_val = "picture";

			}elseif (endsWith($fileName, ".doc")
				|| 	endsWith($fileName, ".docx")
				|| 	endsWith($fileName, ".odt")
				|| 	endsWith($fileName, ".rtf")
				|| 	endsWith($fileName, ".txt")
				){
					$filestack_val = "doc";
			
			}elseif (endsWith($fileName, ".xls")
				|| 	endsWith($fileName, ".xlsx")
				|| 	endsWith($fileName, ".csv")
				|| 	endsWith($fileName, ".uos")
				|| 	endsWith($fileName, ".uof")
				|| 	endsWith($fileName, ".odp")
				|| 	endsWith($fileName, ".odg")
				|| 	endsWith($fileName, ".otp")
				){
					$filestack_val = "xls";

			}elseif (endsWith($fileName, ".vsd")
				|| 	endsWith($fileName, ".vsdx")
				){
					$filestack_val = "visio";

			}elseif (endsWith($fileName, ".php")
				|| 	endsWith($fileName, ".py")
				|| 	endsWith($fileName, ".html")
				|| 	endsWith($fileName, ".css")
				|| 	endsWith($fileName, ".xls")
				|| 	endsWith($fileName, ".exe")
				){
					$filestack_val = "code";

			}elseif (endsWith($fileName, ".zip")
				|| 	endsWith($fileName, ".rar")
				|| 	endsWith($fileName, ".7zip")
				|| 	endsWith($fileName, ".tar")
				|| 	endsWith($fileName, ".gz")
				){
					$filestack_val = "compressed";

			}elseif (endsWith($fileName, ".vmw")
				|| 	endsWith($fileName, ".wmv")
				|| 	endsWith($fileName, ".avi")
				|| 	endsWith($fileName, ".mpg")
				|| 	endsWith($fileName, ".mpeg")
				|| 	endsWith($fileName, ".mp4")
				|| 	endsWith($fileName, ".mov")
				){
					$filestack_val = "movie";

			}elseif (endsWith($fileName, ".iso")
				|| 	endsWith($fileName, ".img")
				|| 	endsWith($fileName, ".dmg")
				|| 	endsWith($fileName, ".dat")
				|| 	endsWith($fileName, ".udf")
				){
					$filestack_val = "iso";
			}else{
					$filestack_val = "other";
			}

			$filestack_type = "filestack_" . $filestack_val; //color of the tile
			$filestack_text = "filestacktext_" . $filestack_val; // color of the text
			$filestack_pic = $filestack_val . ".png"; //which picture
			
			//echo "$fileName<br>";
			echo '<div class="' . $filestack_type . '" ID="filestack">';
			echo '<a class="cleanurl" target="_blank" href="' . "https://file.cloudberry.it/" . $fileName . '">';
			echo '<img src="img/icon/' . $filestack_pic . '" alt="' . $fileName . '"><br>';
			echo '<div class="' . $filestack_text . '" ID="filestacktext">'. $fileName . '</div>';
			echo '</a>';
			echo "</div>";
			


			} //foreach ends here

		// close container around the tiles
		echo '</div>';

		//flytter tilbake til gammel mappe
		chdir($oldPath);
*/
	?>
