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
		if($ItemType === "Food" || $ItemType === "Drinks" )
		{
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




