<?php include 'includes/tfn.php'; ?>
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
        <h2 class="tag1">About Vatterott Educational Centers, Inc.</h2>
  
<p>Our facilities and our instructors are what separates us from the competition.</p>
<p>Vatterott serves a diverse student population across 20 locations in 7 states and a vibrant online community. Each of these institutions takes pride in serving both the student population and the local communities that help continue the Vatterott tradition.   Vatterott continues to grow by offering additional diploma and degree programs, launching new locations, and looking for other opportunities to grow and improve our student and veteran services. Through this effort, Vatterott has been named a G.I. Jobs Military Friendly School.</p>
<p>Vatterott offers programs in the fields of Business, Medical, Technical, Trades, Cosmetology, Dental, Legal, Personal Fitness, and Veterinary, as well as many continuing education opportunities. All programs are industry-relevant and designed to support the Vatterott mission of providing career skills for a better life.</p>
   
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
