<?php
	//Connect library
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";

if ($_POST[status]):
	if($_POST[title] && $_POST[author] && $_POST[pubyear] && $_POST[price]):
		// Set variables
		$title = $_POST[title];
		$author = $_POST[author];
		$pubyear = $_POST[pubyear];
		$price = $_POST[price];

		// Call function to add data to DB
		if(!addItemToCatalog($title, $author, $pubyear, $price, $link)):
			echo "Returned error";
		else:
			header('Location: add2cat.php');
			exit;
		endif;
	else:
		echo "Text all fields";
	endif;
endif;
?>