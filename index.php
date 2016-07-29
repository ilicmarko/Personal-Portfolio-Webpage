<!DOCTYPE html>

<html>

	<head>
		<title> Petar Petkovic </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="UTf-8">
	</head>

	<body>

		<div id="container">

			<div class="navBar">
				<div class="leftNav">
					<span class="logo">
					<img src="logo.jpg" alt="logo" width="45px">
					</span>
					<span class="name"> Portfolio Webpage </span>
				</div>
				<div class="rightNav">
					<a href="#"> Home </a>
					<a href="#about"> About </a>
					<a href="#portfolio"> Portfolio </a>
					<a href="#contact"> Contact </a>
				</div>
			</div> <!-- end of .navBar -->

			<div class="main">

				<div class="homePageTitles">

					<div class="titles">
		                <h1> I am Petar </h1>
		                <h2> I love Back-End </h2>
		                <a href="#about"> read more </a>
        			</div>

				</div> <!-- end of .homePageTitles -->
			</div>

			<div id="about">
				<h1> About me </h1>
				<p> 
					Lorem ipsum dolor sit amet, cu commune omnesque his, ei ius solum delenit. Ea nec probatus conceptam, alia erant quaestio ea eum. Sint habeo nominavi ad duo, debet dissentias eu sea. Usu laudem alterum te. Ei torquatos tincidunt mea, est id facete admodum. Mei ea facer ancillae consequat, aeterno explicari vix no.

					Mea cu mutat bonorum. At inani labitur convenire mel, fastidii electram mel ne. Duo et aliquid adversarium intellegebat, eam aliquip maiorum an, ne ius everti delicata. Invenire tincidunt vim ex, ius eu dicit mucius, has ei iudicabit constituam. Modus minim vim ad, no melius nusquam qui.
				</p>
			</div>

			<div id="portfolio">
				<h1> Portfolio </h1>
				<a href="https://5ar5kovic.github.io/Tribute-Page/" target="_blank"> <img src="p1.jpg" width="20%" height="15%" title="Tribute Page"> </a>
				<a href="#portfolio"> <img src="holder.jpg" width="20%" height="15%" title="empty"> </a>
				<a href="#portfolio"> <img src="holder.jpg" width="20%" height="15%" title="empty"> </a>
				<a href="#portfolio"> <img src="holder.jpg" width="20%" height="15%" title="empty"> </a>
				<a href="#portfolio"> <img src="holder.jpg" width="20%" height="15%" title="empty"> </a>
				<a href="#portfolio"> <img src="holder.jpg" width="20%" height="15%" title="empty"> </a>
				<a href="#portfolio"> <img src="holder.jpg" width="20%" height="15%" title="empty"> </a>
				<a href="#portfolio"> <img src="holder.jpg" width="20%" height="15%" title="empty"> </a>
			</div>

			<div id="contact">
				<h1> Contact me </h1> <br/> <br/>
				<?php
					$action=$_REQUEST['action'];
					if ($action=="")    /* display the contact form */
			   		{
			    ?>
			    <form action="" method="POST" enctype="multipart/form-data">	    
				    <input name="action" value="submit" type="hidden">
				    <input name="name" size="40" type="text" placeholder="Your name:"> <br/>
				    <input name="email" size="40" type="text" placeholder="Your e-mail:"> <br/>
				    <textarea placeholder="Your message..." name="message" rows="7" cols="40"></textarea> <br/>
				    <input value="Send email" type="submit">
			    </form>
			    <?php
			    } 
					else                /* send the submitted data */
					    {
						    $name=$_REQUEST['name'];
						    $email=$_REQUEST['email'];
						    $message=$_REQUEST['message'];
					    if (($name=="")||($email=="")||($message=="")) {
					        echo "All fields are required, please fill form again.";
					    }
					    else {        
					        $from="From: $name, $email, Return-path: $email";
					        $subject="Message sent using your contact form";
					        mail("petar.petkovic@pmf.edu.rs", $subject, $message, $from);
					        echo "Email sent!";
					    }
			    }  
				?>
				
				<div id="links">
	    			<a href="https://www.linkedin.com/in/petarpetkovic" target="_blank"> <img src="linkedin.png" title="Linkedin" class="large" alt="linkedin logo"> </a>
	    			<a href="https://plus.google.com/u/0/102190003575610727918" target="_blank"> <img src="google.jpg" title="Google+" class="small" alt="google plus logo"> </a>
	    			<a href="https://github.com/5ar5kovic" target="_blank"> <img src="github.png" title="GitHub" class="small" alt="github logo"> </a>
	    			<a href="https://www.facebook.com/5ar5kovic" target="_blank"> <img src="facebook.png" title="Facebook" class="large" alt="facebook logo"> </a>
    			</div> <!-- end of #links -->
    		<div class="clear"> </div>
    		</div>

    		<div id="footer">
    		    <div class="footerLine">
                    <div class="leftFooter">
                        <p> © 2016 Petar Petković </p>
                    </div>
                    <div class="rightFooter">
                        <a href="https://github.com/5ar5kovic/UVP-Custom" title="GitHub" target="_blank"> All Codes for this Site </a>
                    </div>
                    <div class="clear"> </div>

                </div>

            </div> <!-- End of footer -->
			</div>
		
		</div>

	</body>

</html>