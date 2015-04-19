<?php if(isset($_GET['c'])){
	$c=$_GET['c'];
	switch ($c) {
		case "1":
			$msg= "<span style=color:red>Please enter your name.</span>";
			break;
		case "2":
			$msg= "<span style=color:red>Please enter your email.</span>";
			break;
		case "3":
			$msg= "<span style=color:red>Please enter a valid email address.</span>";
			break;
		case "4":
			$msg= "<span style=color:red>Please enter your message to us.</span>";
			break;
		case "5":
			$msg= "<span style=color:green>Thank you for contacting us, we will get back to you shortly.</span>";
			break;
		default:
			$msg="";
			break;
	}
}else{
	$c=0;
}
?>
<!DOCTYPE html>
<html>
<head>
     <title>Contact Us ::Little Einstein Child Care Limited</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	 <script src="js/jquery.bxslider.min.js"></script>
     <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <header>
        <div class="header-top">
         <div class="container">
          
            <div class="header-inner">
                <div class="logo-wrapper">
              <a href="index.html"><img src="images/logo.png" alt="View Offcet" /></a>
               </div>
                <nav>
				<ul class="top-menu right">
					<li><a href="index.html">Home</a></li>
					<li><a href="rooms.html">Rooms</a></li>
					<li><a href="staff.html">Staffs</a></li>
					<li><a href="menus.html">Menus</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
			</nav>
            </div>
            </div>
        </div>
  </header>
    <div class="container contact-wrapper">
        <div class="contact-head">
            <h1>Contact us</h1>
        </div>
        <div class="contact-form">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <?php if($c != 0) { 
						echo $msg;
				} ?>
				<?php if($c < 5 ) { ?> 
            <form action="send.php" method="post" name="contact-form">
		
		<p class="name">
			<input type="text" name="name" id="name" placeholder="Name" />
		</p>
		
		<p class="email">
			<input type="text" name="email" id="email" placeholder="Email" />
		</p>
		
		<p class="web">
			<input name="phone" type="tel" id="web" placeholder="Phone" />
		</p>		
	
		<p class="text">
			<textarea name="message" placeholder="Write something to us" /></textarea>
		</p>
		
		<p class="submit">
			<input type="submit"  name="mail" value="Send Message"/>
		</p>
	</form>
	<?php }?>
        </div>
    <div class="clearBoth"></div>
    <div class="push"></div>

    </div>
  <footer>
     <div class="footer-wrap container">
          <div class="footer-left left">
         <p>All Rights Reserved</p>
         </div>
         <div class="footer-right right">
         <p>Little Einstien's Child Care Limited</p>
         </div>
     </div>
 </footer>
</body>
</html>