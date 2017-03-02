<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Custom Login Form Styling</title> 
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection">
      	<script type="text/javascript" src="js/materialize.min.js"></script>
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(images/bg2.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
		</style>
    </head>
    <body>

    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper fixed">
          <a href="#" class="brand-logo"><img src="images/logo.png" height="50px" width="50px"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down"> 
            <li><a href="home.php" class="waves-effect waves-light btn">Home</a></li>
            <li><a href="infosiswa.php" class="waves-effect waves-light btn">Info</a></li>
            <li><a href="login.php" class="waves-effect waves-light btn">Login</a></li>
            </ul>
          </ul>
        </div>
      </nav>
    </div>

        <div class="container">
		
			<header>

				<img src="images/logo.png" width="100px" height="100px">
				
			</header>
			<section class="main">
				<form class="form-4" action="log.php?op=in" method="POST">
				    <h1 align="center">Login or Register</h1>
				    <p>
				        <label for="login">Username or email</label>
				        <input type="text" name="userid" placeholder="Username or email" required>
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input type="password" name="psw" placeholder="Password" required> 
				    </p>

				    <p>
				        <input type="submit" name="submit" value="Continue">
				        <input type="reset" name="reset" value="Reset">
				    </p>       
				</form>​
			</section>
			
        </div>
    </body>
</html>