<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
    <body>

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