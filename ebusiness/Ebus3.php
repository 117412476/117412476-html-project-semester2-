<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
		<head>
        <title>ebus1</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css" />
     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Receipt --> 
	<div class="ebuscontainer">
		<section id="main">
			<h2>Receipt:</h2>
			
             
        <?php
        // Echo session variables that were set on previous page
        echo "Name: " . $_POST["name"] . ". <br>";
        echo "Email: " . $_POST["email"] . "<br>";
        echo "Total is &euro;" . $_SESSION["total"] . ". <br>";
        ?>
        <p>Thank you for your purchase.</p>
        
        
        </section>
        
        
    </div>
	
    </body>
</html>
