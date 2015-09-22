<?php 

if ($_GET['id']) {
	$productid = $_GET['id'];
}

$output = "You chose ";

if ($productid == 50) {
	$output .= "the MacBook.";
} else if ($productid == 75) {
	$output .= "Ubuntu.";
} else if ($productid == 100) {
	$output .= "Windows.";
} else {
	$output = "Not Found";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	
	<?php include 'header.php' ?>
	
	<h1><?php echo $output; ?></h1>
	
	<?php include 'footer.php' ?>

</body>
</html>