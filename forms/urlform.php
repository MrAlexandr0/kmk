
<form action="urlform.php" method="post">

Service Name: <input type="text" name="ServiceURL_name" value="<?php /*echo $ServiceURL_name;*/ ?>">

URL: <input type="text" name="ServiceURL_address" value="<?php /*echo $ServiceURL_address;*/ ?>">

IMG URL: <input type="text" name="ServiceURL_imgurl" value="<?php /*echo $ServiceURL_imgurl;*/ ?>">

<input type="submit">

</form>





<?php
	
/*Check if main values are present*/
if ( !empty($_POST["ServiceURL_name"]) && !empty($_POST["ServiceURL_address"]) ){

echo 'Chosen Service Name: ' . $_POST["ServiceURL_name"] . '<br>';
echo 'Chosen URL Address ' . $_POST["ServiceURL_address"] . '<br>';
	

echo 'Chosen image: ';

/* Check if Image has been spesified*/
if ( !empty($_POST["ServiceURL_imgurl"]) )
	{
	echo $_POST["ServiceURL_imgurl"];	
	}else{
		echo "None";
	}


echo '<br>';

}else{
	
echo '<a>Fill out the form and click submit to create a service entry </a>'	;
}	

?>