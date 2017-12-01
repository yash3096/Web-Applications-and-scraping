<?php require_once("include/admin.php");
$obj=new admin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>De-Integro</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/pluginpage.js"></script>
<script type="text/javascript" src="js/jquery.pngFix.js"></script>
<script type="text/javascript" src="js/jquery.pngFix.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(document).pngFix();
		});
</script>		
<script src="js/thickbox.js" type="text/javascript"></script>
<link href="css/thickbox.css" rel="stylesheet" type="text/css" />            
</head>

<body>
<div id="container"><!--Start Container-->
<?php require_once("include/webparts/header.php")?>
<div id="center-content"><!--Start Center-content-->
<div id ="product"><!--Start product-->
<h1>Products</h1>
<hr />
<div class="all-product"><!--Telecom Product-->
        	<h3><a href="categories.php?action=tel&req=1">Telecom Products</a></h3>
           	<p class="product-detail">De Integro is a company with vision of satisfactory customer service in installation & maintenance in telecommunication system . We  install as  client  require as solution  for help  them to solute their problems and  Hassel free communication.<br/><br/>
            

  </p><br/><br/>
  
            <?php
				$cid=1;	
				
				echo "<center>".$obj->viewproductlimit($cid). "</center>";
				
			?>     
           

                   
          <!--<img src="image/telecom-product.jpg" width="369" height="86" alt="Telecom Product" />-->
            <a href="categories.php?action=tel&req=1" style="float:right">View All</a>
</div><!--End telecom product--><br/>
        
<div class="all-product">
        	<h3><a href ="categories.php?action=conference&req=2" >Conferencing Integration Products</a></h3>
        	 <p  class="product-detail">In today’s business climate, companies are highly concerned with safety, time and cost-related issues. As a result, video conferencing is more relevant than ever, and the benefits are significant. We works closely with you to design your company’s customized video conferencing environment.  De Integro  delivers solutions to meet all of your requirement   of  video conferencing and  Audio – Video solution needs.

Audio conferences, whether PSTN or Extensions , can be used as a cost-effective complement to travel and face-to-face meetings. Users can quickly set up and manage virtual meetings from any telephone resulting in better communication and collaboration along with a significant cost savings advantage over traditional audio conferencing services. 

Quality video conferencing that is simple to use while increasing productivity and providing a quick return on investment The Polycom and TANDBERG  video conferencing system delivers High Definition quality resolution as well  XGA quality Video as client require  and CD quality audio along with simple-to-use content sharing capabilities
 </p><br/><br/>
			 <?php
			 	$cid=2;		
				echo $obj->viewproductlimit($cid);
			?>  
            <a href ="categories.php?action=conference&req=2" style="float:right" >View All</a>
</div><!--End conferencing product--><br/>
        
<div class="all-product"><!--CCtv product-->
       		 <h3><a href="categories.php?action=camera&req=3">CCTV Camera Surveillance Products</a></h3>
        		<p  class="product-detail">CCTV Surveillance system solution available  for Viewing , Monitoring, Recording , with  Remote View  option , good quality picture and  recording as required. <br/>     

<b>Your  regular  P. C. work can continuing on with hassle free monitoring of your  security camera  images/videos  on  your  Computer.</b>    </p><br/><br/>
          
             <?php
				$cid=3;		
				echo $obj->viewproductlimit($cid);
			?>  
             <a href="categories.php?action=camera&req=3" style="float:right">View All</a>
</div><!--end cctv product--><br/>
        
<div class="all-product"><!--Start music-product-->        
<h3><a href="categories.php?action=music&req=4">Paging / Pipeline Music Products</a></h3>
  <p  class="product-detail">Our products instill and inspire the confidence of performers; leaders and communicators rely on to express themselves. Everyday, every where. It's your sound. World renowned microphones for better performance.</p><br/><br/>
        	 <?php
				$cid=4;		
				echo $obj->viewproductlimit($cid);
			?>  
            <a href="categories.php?action=music&req=4" style="float:right">View All</a>
</div><!--End music-product--><br/><br/>

 
</div><!--End product-->
</div><!--End Center Content-->
</div><!-- End Container-->
<?php require_once("include/webparts/footer.php")?>
</body>
</html>
