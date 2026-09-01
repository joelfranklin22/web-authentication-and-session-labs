<html>
    <head>
    </head>
<style>
        .f1{
            border:2px solid blue;
            width:100%;
            height:70px;
            background-color:lightblue;
        }
        .f2{
            border:2px solid black;
            width:100%;
            height:70px;
            background-color:red;
            font-size:30;
        }
        .button1{
            padding:5px 5px;
            background-color:blue;
        }
        body{
            background-color:aliceblue;
        }
</style>
    <body>
            <div class="f1">
	   <center><h1>Online Email Validation</h1></center>
            </div>	
        <form method="POST"  >	       
        <center><div class="f2">
            <label for="ip">Type Your Mail</label>
          <input  placeholder="email" type="text" id="io" name="ip" size="50">
        </div></center>
                <center>
        <button class="button1" onclick="match()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Test&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                </center>
    </form>
	</div>
       	<?php
		if(isset($_POST))
		{	
			$emaill=$_POST["ip"];
			$pattern="/^[a-z0-9.]+@[a-z0-9.]+\.[a-zA-Z]{2,4}$/";
			if($emaill=="")
				{echo "<h1 style='background-color:rgb(78, 109, 246);width: 350px;border-radius: 25px;'>Please enter the email-id</h1>";}
			else
			{
			if(preg_match($pattern,$emaill))
				{
                    echo "<h1 style='background-color:rgb(57, 243, 57);width: 300px;border: 3px solid black;border-radius: 20px;text-align: center;'>Valid Email-ID: $emaill</h1>";
                }
			else 
				{echo "<h1 style=' background-color:rgb(241, 22, 22);width: 300px;border: 3px solid black;border-radius: 25px;'>Invalid Email-ID: $emaill</h1>";}		
			}	
		}			
	?>
	</h1>
	</center>
    </body>
</html>
