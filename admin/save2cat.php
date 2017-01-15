<?php
if ($_POST['status']):
	if($_POST['title'] && $_POST['author'] && $_POST['pubyear'] && $_POST['price']):
		// Set variables
		$title = $_POST['title'];
		$author = $_POST['author'];
		$pubyear = $_POST['pubyear'];
		$price = $_POST['price'];
	else:
		// Text all fields!!!!
		$x = "Check fields";
	endif;
endif;
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<meta charset="utf-8">
	<title>Форма добавления товара в каталог</title>
</head>
</head>
<body>
	<?php 
		if(isset($x)){
			echo "<div class='error-flash' style='background-color: #f00; padding: 20px; border-radius: 5px; border: 1px solid #aaa;'>$x</div>";
		}
	?>
	<form action="save2cat.php" method="post">
		<input type="hidden" name="status" value="1">
		<p>Название: <input type="text" name="title" size="100">
		<p>Автор: <input type="text" name="author" size="50">
		<p>Год издания: <input type="text" name="pubyear" size="4">
		<p>Цена: <input type="text" name="price" size="6" value="10"> руб.
		<p><input type="submit" value="Добавить">
	</form>
</body>
</html>