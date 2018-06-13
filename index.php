<?php include('inc/inc.header.php'); ?>

<?php include('inc/inc.top.menu.php') ?>

<div id="content"> 
<?php 
/* Laster inn verdi fra sidevalget*/
	if (!empty($_GET['urlid']) ){
	$page_val = $_GET['urlid'];
	}else {
	$page_val = "main.php";
	}


	/* Setter verdi for sidevalg */
	if (!empty($page_val) ){
		include($page_val);
		/*include('file2.php');*/
	}else {
		echo "cheeze not found";
	}
?>

<?php include('inc/inc.footer.php'); ?>