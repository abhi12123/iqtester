<?php 
$errors=[];
include('server.php') ?>
<!DOCTYPE html>	
<html>
<head>
	<title>
		log in to IQ Tester
	</title>
	<link rel="stylesheet" href="styles.css">
  <script type="text/javascript">
    function load() {
		alert("Welcome to IQtester.");
    }
  </script>
</head>
<body onload="load()">
	<h1><font face="Verdana" size="7"><center>IQ TESTER</center></font></h1>
	<table border = "0" align="center">
         <tr>
            <td rowspan = "10" width="200">
            </td>
            <td width="1100"> 
            	<div class="login">
				
            		<center><p><b>Log In to IQ Tester</b></p></center>
            		<form name="login" method="post" action="iqlogin.php">
					<?php include('errors.php'); 	?>
            			User name or Email Id<br>
  						    <input type="text" name="username" value=""><br><br>
  						    Password<br>
  						    <input type="Password" name="password" value=""><br><br>
  						    <button type="submit" name="login">Log In</button>
            		</form>
            	</div>
            	<br>
            	<div class="signup">
            		<center><p><b>New to IQ Tester? Sign up</b></p></center>
            		<form name="signup" method="post" action="iqlogin.php">
					<?php include('errors.php'); 	?>
            			First Name:
  						    <input type="text" name="firstname" value=""><br><br>
  						    Last Name:
  						    <input type="text" name="lastname" value=""><br><br>
                  User Name:
                  <input type="text" name="username" value=""><br><br>  
  						    Your Email:
  						    <input type="text" name="email" value=""><br><br>
  						    New Password:
  						    <input type="password" name="password" value=""><br><br>
  						    retype Password:
  						    <input type="password" name="password_1" value=""><br><br>  						    
							I am:
         				  <input type = "radio" name = "gender" value = "male" checked=""> Male
         				  <input type = "radio" name = "gender" value = "female"> Female<br><br>
                  My age:
                  <input type="text" name="age" value=""><br><br>
						      <button type="submit" name="signup">Sign up</button>
            		</form>
            	</div>
            </td>
            <td rowspan="10" width="200"></td>
        </tr>
  </table>
</body>
</html>