<?php
require_once 'Menu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<body>
	<table class='table table-bordered'>
		<tr>
			<th>Id</th> 
			<th>Name</th> 
			<th>Price</th>
		</tr>
		<tbody> 
<?php
$menu = new Menu();
// The filter_var function is built into PHP to help prevent people from basing in things like HTMl
// If someone is able to pass html into an input form they have the ability to possibly send code to be executed by a website.
$result = $menu->GetMenuByType(filter_var($_POST["name"],FILTER_SANITIZE_STRING));

if(isset($result)) //This is making sure the result code is set before making the table. An error can be thrown if that happens
{
	while ($row = $result->fetchArray()) 
	{
		print_r("<tr>");
	    print_r("<td>{$row['Id']}</td><td>{$row['Name']}</td> <td>{$row['BasePrice']}</td> \n");
	    print_r("</tr>");
	}
}
else
{
	//This a simple error message to prevent any code errors from being shown on the page
	//Errors that aren't "caught" or over written can show Hackers information that can help break systems more. 
	print_r("Whoops Something Failed And No Results Could be Found");
}

?>
		</tbody>
	</table>

</body>
</html>


