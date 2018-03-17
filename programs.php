<?php include 'includes/tfn.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vatterott College</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/banner/flexslider.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/expand.js"></script>
<script type="text/javascript">
var $j = jQuery.noConflict();
$j(function() {
    $j("#demo1 h3.expand").toggler();
    $j("#demo2 h3.expand").toggler({initShow: "div.collapse:eq(0)"});

    $j("#demo1").expandAll({
      trigger: "h3.expand",
      ref: "h3.expand",
      showMethod: "slideDown",
      hideMethod: "slideUp"
    });
    $j("#demo2").expandAll({
      trigger: "h3.expand",
      ref: "h3.expand",
      showMethod: "slideDown",
      hideMethod: "slideUp",
      oneSwitch : false
    });
});

</script>


</head>

<body>
<?php include 'includes/tagmanager.php'; ?>
<div id="wrapper" class="innerpage"> 
  <!-- header starts -->

       <?php include 'includes/menu.php'; ?>
      </div>
    </div>
  </div>
  <div class="banner_wrapper banner_wrapperinner northpark">
    <div class="banner_inner">
      <div class="banner">
        <div class="slide banner1" >
          <div class="info">
            <!--<h2 class="bannertitle">Get the career <br>
              training you need! </h2>
            <h3 class="bannertitle"> Advance your Career. </h3>-->
          </div>
         <!-- <img class="form_btm" src="images/banner_inner.png">--> </div>
      </div>
        <?php include 'includes/form.php'; ?>
          <div style="clear:both"></div>
  <!-- body starts -->
  <div class="body_wrapper">
    <div class="body_inner">
      <div class="content_left_inner">
        <h2 class="tag1">Vatterott College Programs</h2>
  

<h2>Programs at Vatterott</h2>
<p>Vatterott offers programs in the fields of Business, Medical, Technical, Trades, Cosmetology, Dental, Legal, Personal Fitness, and Veterinary, as well as many continuing education opportunities. All programs are industry-relevant and designed to support the Vatterott mission of providing career skills for a better life.</p>
<p>Regardless of which career path you ultimately choose, you can rest-assured that every single one of our campuses will provide the personal attention you deserve. Our faculty and staff will ensure that when you graduate from one our programs, you are prepared for what awaits you in your chosen field.</p>
   
   
   <h3>Health & Beauty</h3>
   <ul>
   	    	 <li><a href="personal-fitness-trainer.php">Personal Fitness Trainer</a></li> 
   	    	 <li><a href="cosmetology.php">Cosmetology</a></li>   	  	

   	</ul>

    <h3>Medical Programs:</h3>
    <ul> 
		<li><a href="dental-assistant.php">Dental Assistant</a></li>
		<li><a href="medical-assistant.php">Medical Assistant</a></li>
		<li><a href="medical-assistant.php">Medical Assisting Professional</a></li>
		<li><a href="medical-assistant.php">Medical Assistant w/ Limited Radiography Technology</a></li>
		<li><a href="medical-assistant.php">Medical Assistant w/ Office Management</a></li>
		<li><a href="medical-billing-and-coding.php">Medical Billing & Coding</a></li>
		<li><a href="pharmacy-technician.php">Pharmacy Technician</a></li>
		<li><a href="veterinary-technician.php">Veterinary Technician</a></li>

    	</ul>
  	
    	<h3>Technology</h3>
    	<ul>
		<li><a href="network-technology.php">Computer Systems and Network Technology</a></li>
		<li><a href="network-technology.php">Computer Engineering and Network Technology</a></li>
		<li><a href="computer-programming-and-development.php">Computer Programming and Development</a></li>
		<li><a href="network-technology.php">Information Systems Security</a></li>
		<li><a href="network-technology.php">Network Technology</a></li>
		<li><a href="web-design.php">Web Design Degree</a></li>
	</ul>

		 <h3>Trade Programs:</h3>
    <ul>
		<li><a href="automotive-technology.php">Automotive Technology</a></li>
		<li><a href="building-maintenance.php">Building Maintenance Technology</a></li>
		<li><a href="combination-welding-technology.php">Combination Welding</a></li>
		<li><a href="diesel-mechanic.php">Diesel Mechanic</a></li>
		<li><a href="electrical-mechanic-technology.php">Electrical Mechanic</a></li>
		<li><a href="hvac.php">HVAC</a></li>
		<li><a href="powersports.php">Powersports Equipment and Small Engine Mechanic</a></li>
		
    </ul>



    		
    		</ul>

                </p>
        <div style="clear:both"></div>
       
        
        
      </div>
      <div class="content_right mtopinnerright">
        
    
       <div class="rightwhycontent">
<?php include 'includes/why.php'; ?>

</div>

     

        </div>
         <div style="clear:both"></div>
        
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
    </div>
  </div>
  <!-- body ends -->
  <div class="footer_wrapper">
    <div class="footer_inner">
	<div class="left">
    © <?php include 'includes/footer.php'; ?></div>
</div>
  </div>
  <div style=" clear:both"></div>
</div>
<script src="js/AC_ActiveX.js" type="text/javascript"></script> 
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
<?php include 'includes/ynot-api.php'; ?>
</body>
</html>
