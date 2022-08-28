<DOCTYPE> </DOCTYPE>
<html>
	<head>
		
	</head>
	<body>
		
		<?php
		
		echo "this is php file <br />";
		
		$x = "Hello World!";
		$y = 5;
		$z = 10.5;
		
		$txt = "www.w3schools.com <br />";
		echo "I love $txt"; 
		
		echo "I love" . $txt ;
		
		 // the scope of the variable is part of the script where the variable can be refernced/used.
		 //PHP variable has three type of scope these are local, global and static.
		 //Global varible are declared outside a function and can only be accessed out the function.
		  
		 $a = 5;
		 
		 function MyTest(){
		 	
			echo "<p>varible a inside a function is: $a </p>";
		 }
		 
		 MyTest();
		 
		 echo "<p>Variable a outside the function is : $a</p>";
		
		// a variable declared inside a function has a local scope and can only be accessed inside the function.
		
		function myTest2(){
			
			$b = 7; //local scope
		    echo "the value of the variable is: $b";
		}
		
		myTest2();
		
		echo"<p>The value of the variable b is: $b</p>";
		
		// The global keyword is used to access a global variable inside a finction
		
		$c = 8;
		
		function myTest3(){
				
			global $c;
			$d = 5;
			$e = $c + $d;
			echo "<p>The value of e is: $e<p/>";
			
		}
		
		myTest3();
		
		// PHP stores all global variable in an aaray called $GLOBALS[index]
		// The index is a refernce to the variable name.
		
		$f = 1;
		$g = 1;
		
		function myTest4(){
			
			$GLOBALS["f"] = $GLOBALS["f"] + $GLOBALS["g"];
			echo$GLOBALS["f"]  . " <br>";
		}
		
		myTest4();
		
		//when a dunction is completed or excuted all its variables are deleted
		//we use the static keyword if we want to store the variable for later use
		
		function myTest5(){
							
	        static $a = 1;
	        $a++;
			echo$a ."<br>";						
		}
		
		myTest5();
		myTest5();
		myTest5();
		
		//"echo" - no return value and can take many parameters 
		//"print" - return value 1 and can take only one argument
		
		echo"PHP is fun! <br>";
		echo"this ", "srting ", "is ", "made ", "from ", "multiple ", "parameter <br>";
		
		//Constants are global by default and they are case sensetive.
		
		define("GREETING","Welcomme to www.w3schools.com <br>");
		echo GREETING ;
		
		// % - Modulus - is the remender in the devision of two integers
		
		$x = 7;
		$y = 3;
		echo $x%$y;
		
		// $x += $y is the same as $x = $x + $y
		
		//Comparision operators always retirn either TRUE or FALSE
		
		// $x && $y = true onlyif both x and y are true, all the other case result in false
		// $x || $y = true if either x or y are true. the result becomes false if both x and y are flase.
		
		if($expression){
			//excute this part of the code
		}else{
			//excute this part of the code
		}
		
		// elseif
		
		if($e1){
			//excute this part
		}elseif($e2){
			//excute this part
		}elseif($e3){
			//excute this part
		}else{
			//excute this part
		}
		
		//the switch conditional 
		
		$color = "red";
		
		switch ($color){
			
          case "blue":
		  echo"this is blue not match";
		  break;
		  
          case "green":
	      echo"this is green, not match";
		  break;
		  
		  case "red":
		  echo "grerat, this is the match";
		  break;
		  
		  default:
		  echo "<p>therewas no match</p>";	  
		}
		
		// the while loop
		
		//while($condition){
			//excute this part of the code as long as the condition is true
		//}
		
		// do - while - excute the block of code once before checking the condition
		
		//do{
			//excute this code
		//}while($condition);
		
	  // the for-loop init - test - increment
	  
	  for($i = 0; $i <= 10; $i++){
	  	
		//excute this code as the expression in the middle returns true
	  }
	
	//foreach - for evry loop iteration the array pointer is moved to the next value of the array stating from the first value
	
	$days = array("monday", "tuesday", "wednesday");
		foreach($days as $day){
			echo "<p>Today is $day </p>";
		}
		
		// the count function take an array as argument and returns the length of the array
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		  ?>
	</body>
	
</html>









