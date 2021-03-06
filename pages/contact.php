<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- my css file -->
	<link type="text/css" rel="stylesheet" href="../css/main.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- font: Montserrat -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">

	<title>Jeni Starr Wellness</title>
</head>

<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="pull-left">
					<!-- Logo -->
					<!-- Name -->
					<a href="../index.html"><h3>Jeni Starr Wellness</h3></a>
				</div>
				<div class="pull-right">
					<!-- navbar -->
					<ul>
						<li><a href="about.html">About</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="bookshelf.html">Bookshelf</a></li>
						<li class="active"><a href="contact.php">Contact</a></li>
			</div>
		</div>
	</div>

	<div class="jumbotronContact">
		<div class="container">
			<!-- background-image -->
		</div>
	</div>

	<div class="mainContact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h2>Contact Me</h2>
					<?php
  						// Change this to YOUR address
  						$recipient = 'jeni@jenistarr.com';
  						$email = $_POST['email'];
  						$realName = $_POST['realname'];
  						$subject = $_POST['subject'];
  						$body = $_POST['body'];
  
  					# We'll make a list of error messages in an array
  						$messages = array();
					# Allow only reasonable email addresses
						if (!preg_match("/^[\w\+\-.~]+\@[\-\w\.\!]+$/", $email)) {
							$messages[] = "That is not a valid email address.";
						}
					# Allow only reasonable real names
						if (!preg_match("/^[\w\ \+\-\'\"]+$/", $realName)) {
							$messages[] = "The real name field must contain only " .
"alphabetical characters, numbers, spaces, and " .
"reasonable punctuation. We apologize for any inconvenience.";
						}
					# CAREFUL: don't allow hackers to sneak line breaks and additional
					# headers into the message and trick us into spamming for them!
						$subject = preg_replace('/\s+/', ' ', $subject);
					# Make sure the subject isn't blank afterwards!
						if (preg_match('/^\s*$/', $subject)) {
							$messages[] = "Please specify a subject for your message.";
						}

						$body = $_POST['body'];
					# Make sure the message has a body
						if (preg_match('/^\s*$/', $body)) {
							$messages[] = "Your message was blank. Did you mean to say " .
"something?"; 
						}
  						if (count($messages)) {
    				# There were problems, so tell the user and
    				# don't send the message yet
    					foreach ($messages as $message) {
      						echo("<p>$message</p>\n");
    					}
    						echo("<p>Click the back button and correct the problems. " . "Then click Send Your Message again.</p>");
  						} else {
    				# Send the email - we're done
							mail($recipient, $subject, $body, "From: $realName <$email>\r\n" . "Reply-To: $realName <$email>\r\n"); 
    							echo("<p>Your message has been sent. Thank you!</p>\n");
  							}
					?>

				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="pull-left">
					<!-- copyright -->
					<p>&copy Jeni Starr 2017</p>
				</div>
				<div class="pull-right">
					<!-- social media -->
					<ul>
						<li><a href="https://www.facebook.com/PlusSizeGirlsGuides">facebook</a></li>
						<li><a href="https://twitter.com/JeniferStarr">twitter</a></li>
						<li><a href="https://www.instagram.com/jenistarr/">instagram</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>