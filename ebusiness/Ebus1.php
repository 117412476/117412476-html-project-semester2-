<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="ebus.css" type="text/css">
        
        
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_cal.js"></script>
        
       
    </head>
    
    <body>
        
        <div class="image">
            <img src="https://pbs.twimg.com/profile_images/670310483589623809/8MS4_joS.jpg">
        </div>
        
        <h4>Select a Product</h4>
        
        <br>
        
        <form method="POST" action="Ebus2.php">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onclick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            <br>
            <br>
            <br>
            
            
             <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onclick="disablebtnProceed()"/>
                Cloud9 @ $200
            </label>
            <br>
            <br>
            <br>
            
             <label for="gmail">
                <input type="radio" id="gmail" name="product"  onclick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            <br>
            <br>
            <br>
            
            <label for "aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                AWS @ 300$
            </label>
            <br>
            <br>
            <br>
            <br>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
             <br>
            <br>
            <br>
             <br>
             
              <label for="discount">
               discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
             <br>
             <br>
            <br>
            <br>
             <label for="vat">
                vat @ 10%
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
             <br>
            <br>
            <br>
            <br>
             <label for="total">
                 Total
                 <input type="text" id="total" name="total" value="0.00" readonly/>
             </label>
             
            <br>
            <br>
            <br>
            <br>
             
            <button type="submit" id="btnProceed" disabled> Add to Shopping Cart</button>
             
        </form>
        
      
       <br>
       <br>
       <br>
       <br>
       
        <button onclick="calcSub()" class="calculate">Calculate Cost</button>
        <a role="button" href="Ebus1.php" class="clear">Clear Choice</a>
        
          <?php
             // Set session variables
        	  $_SESSION["total"] = $_POST["total"];
           	?>
        
       
        </body>
    
    
</html>