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
$result = $menu->GetMenuByType(filter_var($_POST["name"],FILTER_SANITIZE_STRING));
if(isset($result))
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
	print_r("Whoops Something Failed And No Results Could be Found");
}

?>
		</tbody>
	</table>

</body>
</html>


