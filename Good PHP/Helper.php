<?php
	class Helper{
		
		public static function SafeString($input){
			try{
				// The filter_var and htmlspecialchars functions are built into PHP to help prevent people from basing in things like HTMl
				// If someone is able to pass html into an input form they have the ability to possibly send code to be executed by a website.
				$safestring = htmlspecialchars($input, ENT_QUOTES, 'utf-8');
				return filter_var($safestring,FILTER_SANITIZE_STRING);
			}
			catch(Exception $e){
				print_r("String could not be properly santized");
			}
					
		}
	}
?>