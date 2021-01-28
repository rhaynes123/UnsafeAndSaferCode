<?php
require_once 'MyDB.php';
/**
 * 
 */
class Menu 
{
	private $db;

	public function __construct()
	{
		$this->db = new MyDB();
	}

	public function GetMenuByType($ItemType)
	{
		//Since the purpose of the application is to only show Food or Drinks preventing any other texts help keep the data safe
		if(strtolower($ItemType) === "food" || strtolower($ItemType) === "drinks" )
		{
			//The code below uses a prepared statement this helps to prevent dangerous inputs from being executed. This is the most common practice for preventing sql injection
			$query = $this->db->prepare("SELECT * FROM MenuItems Where ItemType =:itemType ");
			$query->bindParam(':itemType', $ItemType);
			$QueryResults = $query->execute();
			return $QueryResults;
		}
		else
		{
			print_r("Invalid Type\n");
		}
		
	}

}




