<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: iqlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: iqlogin.php");
  }
?>
<!DOCTYPE html>	
<html>
<head>
	<title>
		IQ Tester
	</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1><font face="Verdana" size="7"><center>IQ TESTER</center></font></h1>
	<table border = "0" align="center">
         <tr>
            <td rowspan = "10" width="200">
            </td>
            <td width="1100">
			    <?php  if (isset($_SESSION['username'])) : ?>
				<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
				<?php endif ?>
            	<center><img src = "images/eins.jpg" alt = "Image of Albert Einstein" width = "300" height = "300" border="3"/></center>
				<p class="b" style = "font-family:arial;">A person's <big>Intelligence Quotient (IQ)</big> is, arguably, one of their most important characteristics. It is believed that you can predict a person's behavior more accurately from their IQ than from any other single piece of information about them.<br><br>The average IQ is 100. Have you wondered what your IQ score is? Our original IQ Test will give you a fast, free and accurate iq score. Take our quick free IQ test and find out just how smart you are.</p><br>
				<div class="bo">
				<ol>
				<li><form>
				<p >Which number should come next in the pattern?</p><p class="it">37,34,31,28</p></p>
				<input type="radio" name="1" value="37">37
				<input type="radio" name="1" value="34">34
				<input type="radio" name="1" value="34">31
				<input type="radio" name="1" value="34">28
				<br><br></form>
				</li>
				<li><form>
				<p>Book is to Reading as Fork is to?</p>
				<input type="radio" name="1" value="37">drawing
				<input type="radio" name="1" value="34">writing
				<input type="radio" name="1" value="34">stirring
				<input type="radio" name="1" value="34">eating
				<br><br></form>
				</li>
				<li><form>
				<p>What number best completes the analogy</p><p class="it">8:4 as 10:</p></p>
				<input type="radio" name="1" value="37">3
				<input type="radio" name="1" value="34">7
				<input type="radio" name="1" value="34">24
				<input type="radio" name="1" value="34">5
				<br><br></form>
				</li>
				<li><form>
				<p>Please enter the missing number:</p><p class="it">4, 8, 14, 22, ?</p>
				<input type="radio" name="1" value="37">26
				<input type="radio" name="1" value="34">28
				<input type="radio" name="1" value="34">32
				<input type="radio" name="1" value="34">36
				<br><br></form>
				</li>
				<li><form>
				<p>One word in this list doesn't belong to the same group:<br>  Receiver, Reviver, Racecar, Radar.</p>
				<input type="radio" name="1" value="Receiver">Receiver
				<input type="radio" name="1" value="Reviver">Reviver
				<input type="radio" name="1" value="Racecar">Racecar
				<input type="radio" name="1" value="Radar">Radar
				<br><br></form>
				</li>
				<li><form>
				<p>One word in this list doesn't belong to the same group:<br>  Yen, Pound, Franc, Penny</p>
				<input type="radio" name="1" value="Receiver">yen
				<input type="radio" name="1" value="Reviver">pound
				<input type="radio" name="1" value="Racecar">franc
				<input type="radio" name="1" value="Radar">penny
				<br><br></form>
				</li>
				<li><form>
				<p>Please find the figure continuing the series:</p>
				<img src="images/img1.jpg"><img src="images/img2.jpg"><br>
				<input type="radio" name="1" value="Receiver">a
				<input type="radio" name="1" value="Reviver">b
				<input type="radio" name="1" value="Racecar">c
				<input type="radio" name="1" value="Radar">d
				<br><br></form>
				</li>
				<li><form>
				<p>Please find the figure continuing the series:</p>
				<img src="images/img3.jpg"><img src="images/img4.jpg"><br>
				<input type="radio" name="1" value="Receiver">a
				<input type="radio" name="1" value="Reviver">b
				<input type="radio" name="1" value="Racecar">c
				<input type="radio" name="1" value="Radar">d
				<br><br></form>
				</li>
				<br>
				<button type="submit">Submit</button>1
				<h3> <a href="iqtester.php?logout='1'">logout</a> </h3>
				</form>
			</td>
            <td rowspan="10" width="200"></td>
        </tr>
    </table>
	
</body>
</html>