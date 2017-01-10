<?php
$names = array("Tyler", "Cornelius", "Rupert", "Travis", "Bob", "Marla", "Chloe", "Richard", "Thomas", "Stern");
$namesLength = count($names);
$rand = rand(0,20);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Week 1 - Adv PHP</title>
</head>
<body>
	<!-- PUT LINES 6-21 here? This moves the display elements into the proper place -->
	<?php
	if ($rand <= "9") 
	{
    	$x = $rand;
    	echo "Hello ";
   		echo $names[$x];
	} 

	else 
	{
		echo "Name List: ";
    	for($x = 0; $x < $namesLength; $x++) 
    	{	
    		echo $names[$x];
    		echo ", ";
		}
	}
	?>
</body>
</html>