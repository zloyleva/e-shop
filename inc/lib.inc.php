<?php
function addItemToCatalog($title, $author, $pubyear, $price, $link){
	// Prepare query
	$sql = "INSERT INTO catalog (title, author, pubyear, price) VALUES (?, ?, ?, ?)";

	// Return a pointer to the expression
	$stmt = mysqli_prepare($link, $sql);

	//Check expression and add to DB
	if(!$stmt){
		// Error, return false
		return false;
	}
	// Correct, 
	// Associate variables with labels
	mysqli_stmt_bind_param($stmt, "ssii", $title, $author, $pubyear, $price);

	// Doing query to DB
	mysqli_stmt_execute($stmt);
	//Close query
	mysqli_stmt_close($stmt);
	return true;
}
?>