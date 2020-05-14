<?php
     $footerFile = '/home/user/index.html';
     include($footerFile);
?> 

<!DOCTYPE html> 
<html> 
	
<head> 

</head> 

<body> 
 
	
	<?php
		if(array_key_exists('button1', $_POST)) { 
			button1(); 
		} 
		else if(array_key_exists('button2', $_POST)) { 
			button2(); 
		} 
		function button1() { 
                        ob_end_clean();
			$footerFile = '/home/user/attendance.html';
                        include($footerFile); 
		} 
		function button2() { 
			ob_end_clean();
			$footerFile = '/home/user/index.html';
                        include($footerFile);  
		} 
	?> 

	<form method="post"> 
		<input type="submit" name="button1"
				class="button" value="Next Page" /> 
		
		<input type="submit" name="button2"
				class="button" value="Previous Page" /> 
	</form> 
</head> 

</html> 

