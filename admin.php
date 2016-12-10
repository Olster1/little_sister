<?php require_once("functions.php"); ?>

<?php 

$fileName = "info.txt";

if(isset($_POST["submit"])) {
	$fileHandle = fopen($fileName, "w");
	$values = array(
		"title" => trim($_POST["title"]),
		"address" => trim($_POST["address"]),
		"about" => trim($_POST["about"]),
		"phoneNumber" => trim($_POST["phoneNumber"]),
		"facebook" => trim($_POST["facebook"])
		);
	
	$text = "{";
	foreach ($values as $name => $value) {
		$text .= "\"";
		$text .= $name;
		$text .= "\":\"";
		$text .= $value;
		$text .= "\",\n";
	}
	$text .= "}";
	
	fwrite($fileHandle, $text);
	fclose($fileHandle);
}
else {
	// echo("else not submitting...");
}

$fileSizeResult = filesize($fileName);

$fileHandle = fopen($fileName, "r");
$fieldValues = fread($fileHandle, $fileSizeResult);
fclose($fileHandle);


?>
<!-- <script src="head.js"></script>	 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>1 Little Sister </title>
    <meta charset="utf-8">
    
  </head>
<form action="admin.php" method="POST">
	<p>Title: <input id="title" type="text" name="title" value=""/></p>
	<p>Address: <input id="address" type="text" name="address"/> 
	<p>Phone Number: <input id="phoneNumber" type="text" name="phoneNumber"/> 
	<p>About text: <input id="about" type="text" name="about" /></p>
	<p>Facebook Url: <input id="facebook" type="text" name="facebook"/></p>
	<input type="submit" name="submit" value="Submit Changes" />
</form>
<script>
	function populateField(id, value) {
		document.getElementById(id).value = value;	
	}

	var jsonValues = <?php echo $fieldValues; ?>;
	populateField("title", jsonValues.title);
	populateField("address", jsonValues.address);
	populateField("about", jsonValues.about);
	populateField("facebook", jsonValues.facebook);
	
	
</script>	


</html>
