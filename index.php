<?php 
	
	$msg = '';
	$msgClass = '';
	$mailClass = '';

	if(filter_has_var(INPUT_POST, 'submit')){
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		if (!empty($email) && !empty($name) && !empty($message)) {
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				$msg = 'Please use a valid email.';
				$msgClass = 'error';
			}
			else{
				$toEmail = 'Fernando_ArnoldC@yahoo.com.ph';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>';

				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if (mail($toEmail, $subject, $body, $headers)) {
					$msg = 'Your email has been sent';
					$msgClass = 'success';
				}else{
					$msg = 'Your email was not sent';
					$msgClass = 'error';
				}
			}
		}else{
			$msg = 'Please fill in all the fields.';
			$msgClass = 'error';
		}
		$mailClass = 'shown';
	}


 ?>

<!DOCTYPE html>
<html>


<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/progresscircle.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style-mobile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="scripts/prefixfree.min.js"></script>
	<link rel="icon" href="icon.png">

	<title>I am Arnold</title>

</head>


<body onscroll="displayNavbar()">
	<nav id="navbar">
		<a id="navbar-menu-btn" onclick="displayAnchors()"><i class="fa fa-bars"></i></a>
		<img id="navbar-logo" src="/img/logo-short-circle.svg">
		<div id="navbar-anchors">
			<a class="navbar-anchor active" id="anchor-home" onclick="scrollToSection('banner')">HOME</a>
			<a class="navbar-anchor" id="anchor-about" onclick="scrollToSection('about')">ABOUT</a>
			<a class="navbar-anchor" id="anchor-projects" onclick="scrollToSection('projects')">PROJECTS</a>
			<a class="navbar-anchor" id="anchor-contact" onclick="scrollToSection('contact')">CONTACT ME</a>
		</div>
		<div id="navbar-socials">
			<a class="navbar-social" id="nav-facebook" href="https://www.facebook.com/ArnChr" target="_new"><i class="fa fa-facebook"></i></a>
			<a class="navbar-social" id="nav-behance" href="#"><i class="fa fa-behance"></i></a>
			<a class="navbar-social" id="nav-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
		</div>
	</nav>
	<section class="container" id="banner">
		<div id="banner-contents">
			<div id="banner-title">
				<div id="banner-question">WHO IS</div>
				<div id="banner-name">ARNOLD</div>
				<div id="banner-job">WEB DEVELOPER | FRONT-END</div>
			</div>
			<p id="banner-desc">
				&quot;Out of the frying pan, into the fire&quot;. A fresh graduate of computer engineering  from Rizal Technological University. Majored in software development ventured into web design. Will his logical mind translate well to creative things?
			</p>
			<a id="find-out-here" onclick="scrollToSection('contact')">Find out here</a>
		</div>
	</section>
	<section class="container" id="about">
		<div class="border-skew top"></div>
		<div class="sub-container" id="about-me">
			<h2 class="section-header" id="header-about">ABOUT ME</h2>
			<div class="divider left"></div>
			<p>Greetings! I am <strong>Arnold Christopher Fernando</strong>; Nold for short. My unorthodox passion is writing <strong>code that is structurally elegant</strong> and creating an <strong>aesthetic user interface</strong> at the same time.</p>  

			<p>Admittedly, my forte does not lie in design but in programming. However, this only means that I have more <strong>room for improvement</strong>!</p>

			<p>Self-taught through online courses and youtube videos, I am looking for a <strong>workplace that will challenge</strong> myself so that I may <strong>grow further</strong>.</p>

			<p>My end goal is to become a <strong>full-stack developer</strong> capable of leading a team in providing a rich user experience.</p>
			 
			<p>Other than being a web developer, I am also a guitarist, a gamer, and a self-proclaimed artist.</p>
		</div>
		<div class="sub-container" id="skills">
			<h2 class="section-header" id="header-skills">SKILLS</h2>
			<div class="divider right"></div>
			<div id="skill-circles-container">
				<div class="circle-container">
					<div class="circle-out">
						<div class="circle-progress-clip p90"></div>
						<div class="circle-in"><span class="circle-progress-text">90</span></div>
					</div>
					<div class="circle-title">HTML5</div>
				</div>
				<div class="circle-container">
					<div class="circle-out">
						<div class="circle-progress-clip p88"></div>
						<div class="circle-in"><span class="circle-progress-text">88</span></div>
					</div>
					<div class="circle-title">CSS3</div>
				</div>
				<div class="circle-container">
					<div class="circle-out">
						<div class="circle-progress-clip p80"></div>
						<div class="circle-in"><span class="circle-progress-text">80</span></div>
					</div>
					<div class="circle-title">JS</div>
				</div>
				<div class="circle-container">
					<div class="circle-out">
						<div class="circle-progress-clip p90"></div>
						<div class="circle-in"><span class="circle-progress-text">90</span></div>
					</div>
					<div class="circle-title">Photoshop</div>
				</div>
				<div class="circle-container">
					<div class="circle-out">
						<div class="circle-progress-clip p70"></div>
						<div class="circle-in"><span class="circle-progress-text">70</span></div>
					</div>
					<div class="circle-title">WordPress</div>
				</div>
				<div class="circle-container">
					<div class="circle-out">
						<div class="circle-progress-clip p75"></div>
						<div class="circle-in"><span class="circle-progress-text">75</span></div>
					</div>
					<div class="circle-title">PHP</div>
				</div>
			</div>
		</div>
		<div class="border-skew bottom"></div>
	</section>
	<section class="container" id="projects">
		<h2 class="section-header" id="header-projects">PROJECTS</h2>
		<div id="projects-container">
			<a class="project" id="project-coedsris" href="img/projects/project-coedsris.jpg" target="_new">
				<div class="project-details">
					<span class="project-name">COEDSRIS</span>
					<span class="project-tags">code, css, asp.net</span>
				</div>
			</a>
			<a class="project" id="project-hebrews" href="img/projects/project-hebrews.jpg" target="_new">
				<div class="project-details">
					<span class="project-name">HeBrews</span>
					<span class="project-tags">ui design, code, vb.net</span>
				</div>
			</a>
			<a class="project" id="project-medimagic" href="img/projects/project-medimagic.jpg" target="_new">
				<div class="project-details">
					<span class="project-name">MediMagic</span>
					<span class="project-tags">ui design, code, vb.net</span>
				</div>
			</a>
			<a class="project" id="project-peslms" href="img/projects/project-peslms.jpg" target="_new">
				<div class="project-details">
					<span class="project-name">PESLMS</span>
					<span class="project-tags">code, vb.net</span>
				</div>
			</a>
			<a class="project" id="project-rtuaec" href="img/projects/project-rtuaec.jpg" target="_new">
				<div class="project-details">
					<span class="project-name">RTU AEC</span>
					<span class="project-tags">code, vb.net</span>
				</div>
			</a>
			<a class="project" id="project-icons" href="img/projects/project-icons.jpg" target="_new">
				<div class="project-details">
					<span class="project-name">Logo Design</span>
					<span class="project-tags">logo design</span>
				</div>
			</a>
		</div>
	</section>
	<footer id="contact">
		<div id="contact-content">
			<div id="mail-container" class="<?php echo $mailClass ?>">
				<h2 class="section-header" id="header-contact">CONTACT ME</h2>
				<span id="mail-subtext">Interested? Leave a message!</span>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<textarea id="mail-message" name="message" placeholder="Hey Arnold!"
					value="<?php isset($_POST['message']) ? $message : ''; ?>" onclick="displayMail()"></textarea>
					<div id="mail-details">
						<input type="text" name="name" placeholder="Your Name" value="<?php isset($_POST['name']) ? $name : ''; ?>">
						<input type="text" name="email" placeholder="Email Address" value="<?php isset($_POST['email']) ? $email : ''; ?>">
					</div>
					<div id="mail-alert" class="<?php echo $msgClass; ?>"><?php echo $msg ?></div>
					<input type="submit" name="submit">
				</form>
			</div>
			<div id="details-container">
				<div id="contact-details">
					<span id="mobile"><i class="fa fa-mobile-phone"></i>+639218931684</span>
					<a id="email" href="mailto:Fernando_ArnoldC@yahoo.com.ph" target="_top"><i class="fa fa-envelope"></i>Fernando_ArnoldC@yahoo.com.ph</a>
					<a id="resume" href="files/ArnoldChristopherFernando.pdf" target="_new"><i class="fa fa-download"></i>View/download my resume</a>
				</div>
				<div id="footer-socials">
					<a class="navbar-social" id="nav-facebook" href="https://www.facebook.com/ArnChr" target="_new"><i class="fa fa-facebook"></i></a>
					<a class="navbar-social" id="nav-behance" href="#"><i class="fa fa-behance"></i></a>
					<a class="navbar-social" id="nav-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
		</div>
		<span id="copyright">Designed by Arnold Christopher Fernando | Copyright 2017 - <?= date('Y'); ?></span>
	</footer>

	<script type="text/javascript" src="scripts/script.js"></script>
	<?php if ($mailClass!='') {echo '<script>document.getElementById("mail-message").focus();</script>';}?>
</body>


</html>