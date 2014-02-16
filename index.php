<!Doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; "charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<title>NJIT Login Authentication</title> <!-- Title that shows up on tab-->

</head>
<body>
<section class="container">
<div class="login"> <!-- Start of normal UCID Authentication -->
	<h1>NJIT UCID Login</h1>
    <form id='login' action='njit_auth.php' method='post' style="text-align: center">
    	
	    Username: <input type="text" name="username" placeholder="UserName" /><br />
	    Password: <input type="password" name="password" placeholder="Password" /><br />
        <br><input type="submit" name="login" value="submit" class="button"><br/>
        
        <?php
	        if(isset($_GET['error']) && $_GET['error'] == "inc1"){
	         print ("Incorrect UCID or Password");
	        }
	 ?>
	    <!--<button id="sub">Submit</button>-->
    </form>
    <!--<span id="result" style="text-align:center"></span>
    <span id="result" "text-align:center"></span> -->

</div> <!-- End of normal UCID Authentication -->

 <p>&nbsp;</p> <!-- Creates small gap between login forms-->

<div class="login"> <!-- Start of SQL server Authentication -->
  <h1>NJIT SQL Login</h1>
        <form id='login2' action='login.php' method='post' style="text-align: center">
       	
	    UCID: <input type="text" name="uname" placeholder="UserName"/><br />
	    Password: <input type="password" name="passwd" placeholder="Password"/><br />
	    <br><input type="submit" name="login2" value="submit" class="button"><br/>
        <?php
	        if(isset($_GET['error']) && $_GET['error'] == "inc"){
	         print ("Incorrect UCID or Password");
	        }
	    ?>
        <!--<button id="sub2">Submit</button>-->
    </form>
    <!-- <span id="result" style="text-align:center"></span>
    <span id="result" "text-align:center"></span> -->
</div> <!-- End of SQL Server Authentication -->
    
<!--<script src="jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="UCIDlog.js" type="text/javascript"></script> <!-- Used to get Json reply from UCID Authentication php 
<script src="SQLlog.js" type="text/javascript"></script> <!-- Used to get Json reply from SQL Server Authentication php 
-->
<div class="about">
	<!--New Jeresy Institute of Technology-->    
    Login Form Created By: <br> Kishan Patel (Front End)<br /> James Bell (Middle End) <br /> Samuel Roberts (Back End) <br />
    </div>
</body>
</html>
