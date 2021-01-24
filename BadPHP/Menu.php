<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<body>
<?php
require_once 'MyDB.php';
$db = new MyDB();
$ItemType = $_POST["name"];
$result = $db->query("SELECT * FROM MenuItems Where ItemType IN('$ItemType') Limit 100");// This line of code doesn't attempt to sanitze the values of the data before executing a query
//For example SELECT * FROM MenuItems Where ItemType IN(DELETE FROM MenuItems) could be entered into the input box sent to the server and delete the data.
echo "<table class='table table-bordered'>";
print_r("<tr><th>Id</th> <th>Name</th> <th>Price</th></tr> \n");
print_r("<tbody>");
while ($row = $result->fetchArray()) 
{
	print_r("<tr>");
    print_r("<td>{$row['Id']}</td><td>{$row['Name']}</td> <td>{$row['BasePrice']}</td> \n");
    print_r("</tr>");
}
print_r("</tbody>");
echo "</table>";
?>

</body>
</html>


