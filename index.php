
<head>
  <title>FST Gaming Club</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
                                            <form action="login.php" method="post">
											<div class="form-group">
												<input type="email" class="form-style" placeholder="Email" name = "user_email">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Password" name="password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<input type="submit" class="btn mt-4" value="Login" name="Login">
                                            <?php if (isset($_GET['error_login'])) { ?>
                                                <p class="error"><?php echo $_GET['error_login']; ?></p>
                                            <?php } ?>
				      					</div>
			      					</div>
			      				</div>
                            </form>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-3 pb-3">Sign Up</h4>
                                            <form action="signup.php" method="post">
											<div class="form-group">
												<input type="text" class="form-style" placeholder="User Name" name="user_name">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="tel" class="form-style" placeholder="Phone Number" name="tel">
												<i class="input-icon uil uil-phone"></i>
											</div>	
                      <div class="form-group mt-2">
												<input type="email" class="form-style" placeholder="Email" name="user_email">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Password" name="password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<input type="submit" class="btn mt-4" name="Register" value="Register">
                                            <?php if (isset($_GET['error_signup'])) { ?>
     		                                <p class="error"><?php echo $_GET['error_signup']; ?></p>
     	                                     <?php } ?>

                                                   <?php if (isset($_GET['success_signup'])) { ?>
                                                    <p class="success"><?php echo $_GET['success_signup']; ?></p>
                                                    <?php } ?>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
    </form>
</body>

