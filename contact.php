<!DOCTYPE HTML>
<html>

<head>
  <title>Turntable Furniture</title>
  <meta name="description" content="Contact Form for Turntable Furniture" />
  <meta name="author" content="Turntable Furniture">
  <meta name="keywords" content="furniture, recycling, Turntable, Exeter, Devon, England, UK, South West, Turntable Furniture, donate furniture, electrical appliance, electrical appliances, carpets, donate" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
		<div id="logo_image">
		  <a title="Turntable Furniture" href="index.html"><img src="images/Logo.jpg" alt="Logo Image"></a>
		</div>
        <div id="logo_text">
          <h1>Turntable Furniture</h1>
          <h2>Helping local people furnish their homes</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">About Us</a>
			  <ul>
				<li><a href="about_us.html">What is Turntable &amp; what does it do?</a></li>
				<li><a href="start.html">How Turntable started</a></li>
				<li><a href="trustees.html">Board of trustees</a></li>
				<li><a href="#">Info. for the past financial year:</a>
				  <ul>
					<li><a href="report_chairman.html">Chairman's report</a></li>
					<li><a href="report_manager.html">Manager's report</a></li>
					<li><a href="statistics.html">Collections &amp; deliveries</a></li>
					<li><a href="our_supporters.html">Our supporters</a></li>
				  </ul>
				</li>
			  </ul>
			</li>
            <li><a href="#">Donate Furniture</a>
			  <ul>
				<li><a href="donate_furniture_how.html">How to donate</a></li>
				<li><a href="donate_furniture_notes.html">Notes about donation</a></li>
			  </ul>
			</li>
            <li><a href="#">Need Furniture</a>
			  <ul>
				<li><a href="need_furniture_client.html">Do you need furniture?</a></li>
				<li><a href="need_furniture_referrer.html">Does your client need furniture?</a></li>
			  </ul>
			</li>
            <li><a href="#">Ways to Help</a>
              <ul>
                <li><a href="volunteer.html">Volunteer at Turntable</a></li>
                <li><a href="help_us_financially.html">Help us financially</a></li>
              </ul>            
			</li>
			<li><a href="latest_news.html">Latest News</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Urgently Needed:</h3>
		  <p>There is always a high-demand for the following items.</p>
		  <p>If you have any of these that you no longer need please contact us.</p>
          <p>Wardrobes<br>Large chests of drawers<br>Fully-working white goods</p>
        </div>
        <div class="sidebar">
		  <p></p>
		  <p>Follow us: <a href="https://www.facebook.com/TurntableFurniture" target="blank"><img src="images/facebook-logo.png" alt="Facebook"></a> <a href="https://twitter.com/TurntableExeter" target="blank"><img src="images/twitter-logo.png" alt="Twitter"></a></p>
        </div>
        <div class="sidebar">
		  <p></p>
		  <p>Turntable Furniture<br>The Warehouse<br>Swan Yard<br>Okehampton Street<br>Exeter&nbsp;&nbsp;EX4 1DS</p>
		  <p>Tel: 01392 202032<br>Email: office@turntable.org.uk</p>
		  <p>Mon - Thu: 9am - 3pm<br>Fri: 9am - 2pm<br>Sat + Sun: Closed</p>
		  <iframe src="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Turntable+Furniture,+Swan+Yard,+Okehampton+Street,+Exeter,+EX4+1HU&amp;aq=&amp;sll=50.7182,-3.538735&amp;sspn=0.003879,0.010568&amp;ie=UTF8&amp;hq=Turntable+Furniture,+Swan+Yard,&amp;hnear=Okehampton+St,+Exeter,+Devon+EX4+1DY,+United+Kingdom&amp;filter=0&amp;update=1&amp;t=m&amp;ll=50.717874,-3.538713&amp;spn=0.008151,0.012875&amp;z=15&amp;output=embed" scrolling="no"></iframe><br><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Turntable+Furniture,+Swan+Yard,+Okehampton+Street,+Exeter,+EX4+1HU&amp;aq=&amp;sll=50.7182,-3.538735&amp;sspn=0.003879,0.010568&amp;ie=UTF8&amp;hq=Turntable+Furniture,+Swan+Yard,&amp;hnear=Okehampton+St,+Exeter,+Devon+EX4+1DY,+United+Kingdom&amp;filter=0&amp;update=1&amp;t=m&amp;ll=50.717874,-3.538713&amp;spn=0.008151,0.012875&amp;z=15" target="_blank">View Larger Map</a>
		</div>
	  </div>
      <div class="content">
        <h1>Contact Us</h1>
        <p>Get in touch with Turntable Furniture using this contact form.</p>
        <?php
          // Set these 2 parameters
          // 1. Enter the email address you would like the enquiry sent to
          // 2. Enter the text that you would like the user to see once they submit the contact form
          $to = 'office@turntable.org.uk';
          $contact_submitted = 'Your message has been sent. Turntable Furniture will aim to respond within 2 working days.';

          // Do not amend anything below here, unless you know PHP
          function email_is_valid($email) {
            return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
          }
          if (!email_is_valid($to)) {
            echo '<p style="color: red;">You must set-up a valid (to) email address before this contact page will work.</p>';
          }
          if (isset($_POST['contact_submitted'])) {
            $return = "\r";
            $youremail = trim(htmlspecialchars($_POST['your_email']));
            $yourname = stripslashes(strip_tags($_POST['your_name']));
            $yoursubject = stripslashes(strip_tags($_POST['your_subject']));
            $yourmessage = stripslashes(strip_tags($_POST['your_message']));
            $contact_name = "Name: ".$yourname;
            $subject = $yoursubject." (sent via the website contact form)";
            $message_text = "Message: ".$yourmessage;
            $user_answer = trim(htmlspecialchars($_POST['user_answer']));
            $answer = trim(htmlspecialchars($_POST['answer']));
            $message = $contact_name . $return . $message_text;
            $headers = "From: ".$youremail;
            if (email_is_valid($youremail) && !eregi("\r",$youremail) && !eregi("\n",$youremail) && $yourname != "" && $yoursubject != "" && $yourmessage != "" && substr(md5($user_answer),5,10) === $answer) {
              mail($to,$subject,$message,$headers);
              $yourname = '';
              $youremail = '';
              $yoursubject = '';
              $yourmessage = '';
              echo '<p style="color: #178123;">'.$contact_submitted.'</p>';
            }
            else echo '<p style="color: red;">Please complete all of the fields, and the correct answer to the simple question before sending your message.</p>';
          }
          $number_1 = rand(1, 9);
          $number_2 = rand(1, 9);
          $answer = substr(md5($number_1+$number_2),5,10);
        ?>
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="<?php echo $yourname; ?>" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="<?php echo $youremail; ?>" /></p>
            <p><span>Subject</span><input class="contact" type="text" name="your_subject" value="<?php echo $yoursubject; ?>" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"><?php echo $yourmessage; ?></textarea></p>
            <p style="line-height: 1.7em;">To help prevent spam, please enter the answer to this question:</p>
            <p><span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ?</span><input type="text" name="user_answer" /><input type="hidden" name="answer" value="<?php echo $answer; ?>" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p>
			<p style="padding-top: 15px"><strong>Please ensure your email address is correct before clicking 'send'<br>- if it isn't we will be unable to get in touch with you</strong></p>
          </div>
        </form>
      </div>
    </div>
    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
    </div>
    <footer>
      <p>Turntable Furniture &nbsp;&nbsp;&nbsp; Registered Charity No. 1090229<br>Copyright &copy; Turntable Furniture | <a href="http://www.css3templates.co.uk" target="_blank">Design from css3templates.co.uk</a></p>
	</footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>
</body>
</html>
