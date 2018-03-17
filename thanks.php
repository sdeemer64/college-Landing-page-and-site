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
 <?php //include 'includes/form.php'; ?>
 </div>
  </div>
  <div style="clear:both"></div>
  <!-- body starts -->
  <div class="body_wrapper">
    <div class="body_inner">
      <div class="content_left_inner" style="width: 100%;">        <h2 class="tag1"  style="text-align: center;margin-top: 14px;">Thank you for your Interest!</h2>
        <p class="" style="text-align:center;">A representative will contact you as soon as possible.<br>
For more information, please visit our website at <a href="/"> www.studyatvatterott.com </a> and come visit us on Social Media!</p>
<p class="" style="text-align: center;">
         <a href="https://www.facebook.com/vatterott.college" target="_blank"><img src="icons/FB-f-Logo__blue_58.png" width="32"></a>
         <a href="https://twitter.com/VatterottEd" target="_blank"><img src="icons/TwitterLogo55acee.png" width="32"></a>
         <a href="https://plus.google.com/+VatterottEdu/videos" target="_blank"><img src="icons/YouTube-social-icon_red_48px.png" width="32"></a>   
         </p>
         <p class="" style="text-align: center;"> <a href="https://vatterotteducation.wordpress.com/"> Read our blog </a></p>
         
         <p class="" style="text-align: center;"><b>Looking forward to meeting you soon!</b></p>

<!--

    <a href=""><img src="icons/Instagram_Icon_Large.png" width=32></a>
   

    Facebook: https://www.facebook.com/vatterott.college

    Twitter: https://twitter.com/VatterottEd

    Google+ or YouTube: https://plus.google.com/+VatterottEdu/videos

    Blog Page: https://vatterotteducation.wordpress.com/

    
    
<a href=""><img src="icons/FB-f-Logo__blue_58.png" width=32></a>
<a href=""><img src="icons/TwitterLogo55acee.png" width=32></a>
<a href=""><img src="icons/YouTube-social-icon_red_48px.png" width=32></a>
<a href=""><img src="icons/Instagram_Icon_Large.png" width=32></a>
    
    
    
    
    
    
-->

      </div>
      <div class="content_right mtopinnerright">





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



<noscript>
<div style="display:inline;">
</div>
</noscript>

</body>
</html>