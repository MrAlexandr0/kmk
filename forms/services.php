<?php
	
/*Check if main values are present*/
if ( ($_POST["ServiceURL_name"]) && ($_POST["ServiceURL_address"]) ){

echo 'Chosen Service Name: ' . $_POST["ServiceURL_name"] . '<br>';
echo 'Chosen URL Address ' . $_POST["ServiceURL_address"] . '<br>';
	

echo 'Chosen image: ';

/* Check if Image has been spesified*/
if ( $_POST["ServiceURL_imgurl"] )
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

<a target="_blank" href="//<?php echo $_POST["ServiceURL_address"]; ?>">
<img src="<?php echo $_POST["ServiceURL_imgurl"]; ?>" alt="<?php echo $_POST["ServiceURL_name"]; ?>">
<span class="someclass"><?php echo $_POST["ServiceURL_name"]; ?></span>
</a>