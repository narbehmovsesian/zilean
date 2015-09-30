<?php

	class SchedulingAlg extends Migration
	{
		//Code below is supposed to get all classes
		$allClasses = zilean::table('classes')->lists('class_code');
			foreach ($allClasses as $allClass){
				echo $allClass;
			}
	
		//Code below is supposed to get users current classes
		$curClasses = zilean::table('user_classes')->lists('class_id');
			foreach ($curClasses as $curClass){
				echo $curClass;
			}
		
		//Get size of both lists
		$curSize = sizeof($curClasses); //size of users taken classes
		$actualSize = sizeof($allClasses); //size of entire class list
		
		//Googled the method below. It is supposed to check if item is in the array.
		bool in_array ( mixed $needle , array $haystack 
		
		//Supposed to keep running until all classes are dealt with
		while($x<5){ //This number '5' is temporary. It should be the number of classes the user wants to take for the semester
		
		//Code below is supposed to check prerequisites
		
		//NOTE: The echo statements should be changed to store that class and display it when the build schedule button is clicked
		
			//if array empty, add first two possible classes for major
			if(empty($curCLasses){
			echo "MATH 102";
			echo "COMP 108";
			$x++;
			$x++;
			}
		
			else if(in_array("COMP 108", $curClasses) && !in_array("MATH 102", $curClasses)){
				echo "MATH 102";
				$x++;
			}
			
			else if(in_array("MATH 102", $curClasses) && !in_array("COMP 108", $curClasses)){
				echo "COMP 108";
				$x++;
			}
			
			else if(in_array("MATH 102", $curClasses) && !in_array("MATH 104", $curClasses)){
				echo "MATH 104";
				$x++;
			}
			
			else if(in_array("MATH 102", $curClasses) $$ in_array("COMP 108", $curClasses) && !in_array("COMP 110", $curClasses)){
				echo "COMP 110";
				$x++;
			}
			
			else if(in_array("MATH 104", $curClasses) $$ !in_array("MATH 150A", $curClasses)){
				echo "MATH 150A";
				$x++;
			}
			
			else if(in_array("MATH 150A", $curClasses) && !in_array("MATH 150B", $curClasses)){
				echo "MATH 150B";
				$x++;
			}
			
			else if(!in_array("GE FRESHMAN COMP", $curClasses)){
				echo "GE FRESHMAN COMP";
				$x++;
			}
			
			else if(in_array("MATH 104", $curClasses) && in_array("COMP 110", $curClasses) && in_array("GE FRESHMAN COMP", $curClasses)){
				echo "COMP 182";
				$x++;
			}
			
			else if(in_array("COMP 182", $curClasses) && in_array("GE FRESHMAN COMP", $curClasses)){
				echo "COMP 222";
				$x++;
			}
			
			else if(in_array("COMP 182", $curClasses) && in_array("MATH 150A", $curClasses)){
				echo "COMP 282";
				$x++;
			}
			
			else if(in_array("COMP 182", $curClasses)){
				echo "COMP 333";
				$x++;
			}
			
			else if(in_array("GE FRESHMAN COMP", $curClasses)){
				echo "PHIL 230";
				$x++;
			}
			
			else if(in_array("PHIL 230", $curClasses) && in_array("MATH 150A", $curClasses) && in_array("COMP 182", $curClasses)){
				echo "COMP 256";
				$x++;
			}
	
		}
	}
		