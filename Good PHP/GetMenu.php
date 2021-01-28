<?php
require_once 'Menu.php';
require_once 'Helper.php';
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
	try{
		$menu = new Menu();
		
		$result = $menu->GetMenuByType(Helper::SafeString($_POST['name']));
		
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
				print_r("Please make sure not to enter an empty value");
			}
	}
	catch(Exception $e){
		print_r("An Unexpected error was caught while getting the menu");
	}


?>
		</tbody>
	</table>

</body>
</html>


