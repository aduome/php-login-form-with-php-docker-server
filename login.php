<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('Daniel' => '1234','username1' => 'password1','username2' => 'password2');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Azubi Cloud Project Version_2</title>
<link href="./css/style.css" rel="stylesheet">
</head>

<style>
body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 1rem;
	color: #333;
	background-color: #e9fcfc;
}

a {
	user-select: none;
	color: #1155CC;
	font-family: Verdana, Helvetica Neue, Helvetica, Arial, sans-serif;
	text-decoration: none;
}

a:hover {
	text-decoration: underline;
}

h3 {
	margin: 0;
	padding: 1rem 0.5rem;
}

#frame {
	text-align: center;
	background-color: #eff0c4;
	margin: 3rem auto;
	padding: 1rem;
	width: 450px;
	border: 2px solid #EEE;
}

.button {
	border: 1px solid;
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
	cursor: pointer;
	display: inline-block;
	font-size: 0.9rem;
	font-weight: 700;
	line-height: 2.3;
	margin-right: 0.5rem;
	min-width: 4rem;
	padding: 0 1rem;
	text-align: center;
	user-select: none;
	color: #FFF;
	box-shadow: inset 0 1px 0 #529E21,
		inset 1px 0 0 #4A911C,
		inset -1px 0 0 #4A911C,
		inset 0 -1px 0 #3D7F12,
		inset 0 2px 0 rgba(255, 255, 255, 0.3),
		inset 0 0 4px rgba(255, 255, 255, 0.3),
		0 1px 2px rgba(0, 0, 0, 0.3);
	background: #6dbd45;
	background: linear-gradient(to bottom, #6dbd45 20%, #51a326 100%);
	border: 0;
	border-radius: 3px;
	padding: 0.3rem 1rem;
	text-align: center;
	overflow: hidden;
	min-width: 7rem;
}

.button:hover {
	text-decoration: none;
}

.button:active {
	background: #6dbd45;
	background: linear-gradient(to bottom, #5EA534 20%, #519327 100%);
	position: relative;
	top: 1px;
}
.Input {
	background-color: #FFFFFF;
	border-color: #A0A0A0 #B9B9B9 #B9B9B9;
	border-style: solid;
	border-width: 1px;
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
	font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
	font-size: 11px;
	margin: 0;
	padding: 5px;
	width: 200px;
}
.Table {
	font-family: verdana, Helvetica, sans-serif;
	font-size: 12px;
	color: #333;
	background-color: #e4e4e4ce;
}
.Table td {
	background-color: #b3fcd1;
}

</style>
<body>
<div id="Frame0">
  <h1>Azubi Cloud Project Version 2</h1>
</div>
<br>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>
</body>
</html>