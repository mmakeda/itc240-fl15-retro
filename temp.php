<head> 
 <title>Convert Temperature</title> 
 </head> 
 <body> 
 <h2>Temperature Conversion</h2> 
 <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET"> 
 Degrees: 
 <input type = "text" name = "degree" size=4> 
	 <select name="scale"> 
		 <option value="celcius">Celsius</option> 
		 <option value="fahrenheit">Fahrenheit</option>
		 <option value="kelvin">Kelvin</option> 
 <br/> 
 <input type = "submit" name = "Convert Temperature"/> 
 </form> 

<?php 
 //check for input
 if (array_key_exists('degree',$_GET)){
	$scale = $_GET['scale'];
	$degree = $_GET['degree'];
	$firstLength = strlen($_GET['degree']);
	
	//check that input is not NULL
	if(($firstLength > 0) && (is_numeric($_GET['degree'])))
		{
		if ($scale == "celcius") 
		{
			 echo "<table><tr><th> Conversion Results</th></tr><tr><td>$degree</td><td>celsius</td></tr>"; 
			 $c_2_f = $degree*9/5+32; 
			 echo "<tr><td>$c_2_f</td><td>fahrenheit</td></tr>"; 
			 $c_2_k = $degree+273.15; 
			 echo "<tr><td>$c_2_k </td><td>kelvin</td></tr>"; 
		} 

		if ($scale == "fahrenheit") 
		{
			 echo "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td>$degree</td><td>farhenheit</td></tr>"; 
			 $f_2_c = ($degree -32)*5/9; 
			 echo "<tr><td>$f_2_c</td><td>celsius</td></tr>"; 
			 $f_2_k = $f_2_c+273.15; 
			 echo "<tr><td>$f_2_k </td><td>kelvin</td></tr>"; 
		} 
		 
		 if ($scale == "kelvin") 
		{
			 echo "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td> 
			 $degree</td><td>kelvin</td></tr>"; 
			 $k_2_f = ($degree - 273.15) * 9 / 5 + 32; 
			 echo "<tr><td>$k_2_f</td><td>fahrenheit</td></tr>"; 
			 
			 $k_2_c = $degree-273.15; 
			 echo "<tr><td>$k_2_c </td><td>celsius</td></tr>"; 
		} 
		 
	 }
	 else
		//echo an error message if input is NULL
		echo "<span style = \"color:red\">*Please Enter a Valid Temperature.</span>";
}
 ?> 