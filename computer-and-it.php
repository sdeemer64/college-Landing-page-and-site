<?php
ob_start();
session_start();
if(isset($_GET['Lead_Source']))
        $_SESSION['Lead_Source'] = strtolower($_GET['Lead_Source']) == 'Direct Mail' ? 104 : $_GET['Lead_Source'];


if(isset($_GET['TFN']))
        $_SESSION['TFN'] = $_GET['TFN'];
$lead_source = empty($_SESSION['Lead_Source']) ? 58 : $_SESSION['Lead_Source'];
$tfn = empty($_SESSION['TFN']) ? "888-381-2522" : $_SESSION['TFN'];
$kw = empty($_SESSION['kw']) ? "" : $_SESSION['kw'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Computer and IT | Hunter Business School</title>
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
  <div class="banner_wrapper banner_wrapperinner">
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
        <h2 class="tag1">Computer and IT Diploma</h2>
       <p>Employment of computer support specialists is projected to grow 17 percent from 2012 to 2022, faster than the average for all occupations*. More support services will be needed as organizations upgrade their computer equipment and software. Computer repair technicians resolve common issues, such as crashed hard drives, malfunctioning software and hardware conflicts. Technicians also deal with computer installation.</p>

<p>A career as a Computer Repair Technician might involve maintaining your employer's networks and computer systems. Additionally, you could help to make the company's network more secure, assist with Web development and keep all of the operating systems running up to speed. You may also be in charge of buying and installing software, equipment and computers. Computer repair technicians play a vital role in the maintenance of computers and associated systems.</p> 

<p>The Computer Technician Networking Specialist program prepares students for the field of electronics, computers, and networking. Topics covered include electrical theory and practicum, installation, support and repair, as well as planning, installation, and maintenance of various network modalities.</p>

<p>(*)<a href="http://www.bls.gov/ooh/computer-and-information-technology/computer-support-specialists.htm" target="_blank">http://www.bls.gov/ooh/computer-and-information-technology/computer-support-specialists.htm </a></p>
</p>




    <ul>
        <div style="clear:both"></div>
        <!-- <p> <strong class="button1">Explore your possibilities with CBT College today!</strong><br>
-->
        
        
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
    © <?php echo date("Y") ?> Hunter Business School. All Rights Reserved.</div>    

<div class="right"><?php include 'includes/footer.php'; ?></div>
</div>
  </div>
  <div style=" clear:both"></div>
</div>
<script src="js/AC_ActiveX.js" type="text/javascript"></script> 
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
<?php include 'includes/ynot-api.php'; ?>
</body>
</html>
