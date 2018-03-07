<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <title>ebus1</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css" />
     
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </head>
    
    <body>
   <header>
		<div id = "Title">
       
		<h1 style="Color:black;">Payment Details </h1>
     
		</div>	
   </header>
   
	<nav>
   
		
	</nav>
	
	
	<div class="ebuscontainer">
		<section id="main">
			
		<!-- Form --> 	
		 <h4>Enter payment details</h4>
        
        
            <form method="POST" action="Ebus3.php">
            	
            	
            		<!-- Input Textboxes --> 
            		<label class="align" for="name">Name</label>
            		<input type="text" id="name" name="name">
            		<br/>
            		
            		<label class="align" for="email">Email</label>
            		<input type="text" id="email" name="email">
            		<br/>

                    <label class="align" for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br/>
					
					<!-- Buttons --> 
                	<button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            		<br/>
            
            		<button class="validate" onClick="validateDetails()">Validate</button>
            
            		<?php
            		// Set session variables
        			$_SESSION["total"] = $_POST["total"];
           			?>
            

        	
		</section>
		
		<!-- Basket --> 
		<p id="rectext">In Basket:</p>
     	<div id="reclogo"></div>
        
	</div>
    </body>
</html>