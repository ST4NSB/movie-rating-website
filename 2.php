<!DOCTYPE html>
<html>  
	<head>    
		<meta charset="UTF-8">    
		<link rel="stylesheet" type="text/css" href="css/theme.css">    
		<?php		include 'php/user_logged.php';		
			if($_SESSION['$user_logged']) {			
				echo '<title>Pag 2</title>';		
			}		
			else {			
				echo '<title>Login Page</title>';		
			}		
		?>  
	</head>
	<body>   
		<div id="container">   
		<?php     
			include 'navbar.php';		
			if($_SESSION['$user_logged']) {		
				echo '<h1> pagina 2</h1>';			
				echo '<button type="button">Javascript</button>';	
			}	
			else {	
				include 'structure/form_login.html';		
			}     
		?>         
		</div>	<script src="js/main.js"></script>   
		<script src="js/2.js"></script> 
	</body>
	</html>
	