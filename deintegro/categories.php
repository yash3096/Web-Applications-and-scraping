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
<div id ="categories"><!--Start product-->
<?php
if(isset($_GET['action']))
{
	if($_GET['action']=="tel")
	{
		$cid=$_GET['req'];
		echo "<h3> Telecom Products </h3><br/>";
		echo "	<p class=\"product-detail\"><b>De Integro </b>is a company with vision of satisfactory customer service in installation & maintenance in telecommunication system . We  install as  client  require as solution  for help  them to solute their problems and  Hassel free communication.</p><br/><br/>";
		echo $obj->viewproduct($cid);
	}
	
	
	else if($_GET['action']=="conference")				
	{
		
		$cid=$_GET['req'];
		echo "<h3> Conferencing Integration Products </h3><br/>";
		echo " 
<b>The Following are the area of business in  Conferencing products</b><br/>

Our  conferencing room products.<br/>

PLASMA DISPLAYS  - <b>Panasonic / Sony  /  Hitachi /NEC </b> <br/>   <br/>   
 Video Conferencing equipment <b> TANDBERG   /  POLYCOM.</b> <br/><br/> 
  LCD /  DLP  Projector   <b> Panasonic /  BENQ  / Hitachi  /  NEC.</b><br/><br/> 
 Interactive &  Normal  <b> PANABOARD  from   Panasonic .</b><br/><br/> 
  Audio Conferencing  Telephone    POLYCOM / Panasonic <br/><br/> 
   Multi Channel  Audio Equipments Amplifiers – Speakers <b>  YAMAHA / DENNON</b><br/><br/> 
  Paging &  P. A. System  <b> YAHAMA /  BOSCH  /  BOSS  JBL   Etc .</b><br/><br/> 
   Video Player Equipment <b> YAMAHA / SONY / SAMSUNG / DENNON.</b><br/><br/> 
Projector  Screens  Motorized &  Normal.<b> GALALITE / LEXUS </b> <br/><br/> 

 Whiteboards  &  Magnetic  Ceramics Boards <b> Whitemark.</b> <br/><br/> 
 <b> RGB / Audio / Video etc cabling  for Conferencing  Solution.</b><br/><br/> 
<b> Motorized and  Normal Ceiling  Mounting Kits.</b><br/><br/> 
<b> CRESTRON  INTEGREATED  AUTOMATIC  SYSTEM  FOR Conferencing Room.</b><br/><br/><br/>  ";

	echo"<b>Video &amp; Audio Conferencing Solution</b>";


		echo "<p  class=\"product-detail\">In today’s business climate, companies are highly concerned with safety, time and cost-related issues. As a result, video conferencing is more relevant than ever, and the benefits are significant. We works closely with you to design your company’s customized video conferencing environment.  De Integro  delivers solutions to meet all of your requirement   of  video conferencing and  Audio – Video solution needs.<br /><br />

Audio conferences, whether PSTN or Extensions , can be used as a cost-effective complement to travel and face-to-face meetings. Users can quickly set up and manage virtual meetings from any telephone resulting in better communication and collaboration along with a significant cost savings advantage over traditional audio conferencing services. <br /><br />

Quality video conferencing that is simple to use while increasing productivity and providing a quick return on investment The Polycom and TANDBERG  video conferencing system delivers High Definition quality resolution as well  XGA quality Video as client require  and CD quality audio along with simple-to-use content sharing capabilities.
 </p><br/><br/><br />";
 
 
 
 
 		echo "<center>";
		echo $obj->viewproduct($cid);
		echo "</center>";
		
 		echo"<br /><p  class=\"product-detail\"><b>NEW! Buyer's Guide to Video Conferencing</b><br />
The current geo-political climate, a focus on increasing productivity and cost reduction, and a general reluctance to travel have all contributed to a heightened awareness regarding the use of video conferencing and other conferencing and collaboration technologies. Corporations, state and local governments, universities and health care providers are using this technology today for many applications including training, telemedicine, product development, customer service, board meetings, managing mergers and acquisitions, and interviewing to name a few. When properly implemented, video conferencing does indeed provide value to these businesses.</p><br /><br />
";

echo"<p  class=\"product-detail\"><b>Visual  Solution  ( Projector / Screens / Display )</b><br />
<b>De Integro</b> enhances the impact and quality of communications through audio/visual tools and solutions. Our expertise in room design and customized room control systems ensures the successful integration of audio, video and data presentation tools, which translates into functional and easy to use meeting facilities.  High- impact customer meetings and  productive internal meetings are just some of the benefits you will receive.</p><br /><br/>";

echo "<table width=\"100%\"><tr>";
echo "<td><img src=image/uploadDir/17030L_etpkb50_lb51nt.png width=\"89\" height=\"69\" /></td>";
echo "<td><img src=image/uploadDir/2776image-20.png width=\"100\" height=\"100\" /></td>";
echo "<td><img src=image/uploadDir/14932image-22.png width=\"100\" height=\"100\" /></td>";
echo "<td><img src=image/uploadDir/image-21.png width=\"100\" height=\"100\" /></td>";
echo "<td><img src=image/uploadDir/image-46.png width=\"100\" height=\"100\" /></td>";
echo "</tr></table>";



		echo"<br /><p  class=\"product-detail\"><b>Audio Solution -  Amplifier and Speakers</b><br />
Conventional multi-channel audio reproduction systems base their sound on Dolby Digital and DTS decoding, using matrix and steering technologies to create surround sound effects. YAMAHA CINEMA DSP is much more advanced, actually creating richly realized independent sound fields that envelop you in an unmatched surround sound experience. With dialogue, music and effects from ideally located in these separate sound fields, you will hear sound with accurate placement, smooth movement, exceptional clarity and richness, and startlingly realistic presence for conferencing room and  mono sound system  for paging.</p><br /><br/>";
		echo "<table width=\"100%\"><tr>";
		echo "<td><img src=image/uploadDir/25488speaker2.png width=\"128 height=\"87\" /></td>";
		echo "<td><img src=image/uploadDir/image-25.png width=\"100\" height=\"100\" /></td>";
		 echo "<td><img src=image/uploadDir/12251image-23.png width=\"100\" height=\"100\" /></td>";
		echo "<td> <img src=image/uploadDir/30033image-39.png width=\"100\" height=\"100\" /></td>";
		echo "<td><img  src=image/uploadDir/4308image-38.png width=\"100\" height=\"100\" /></td>";
		
		echo "</tr></table>";

}
	
	
	
	else if($_GET['action']=="camera")				
	{
		echo "<h3> CCTV Camera Surveillance Products </h3><br/>";
		echo "<p  class=\"product-detail\">CCTV Surveillance system solution available  for Viewing , Monitoring, Recording , with  Remote View  option , good quality picture and  recording as required. <br/>     

<b>Your  regular  P. C. work can continuing on with hassle free monitoring of your  security camera  images/videos  on  your  Computer.</b>  <br/><br/>
</p>";
	
		$cid=$_GET['req'];
	
		echo $obj->viewproduct($cid);
	}
	else if($_GET['action']=="music")				
	{
			
		$cid=$_GET['req'];
		echo "<h3> Paging / Pipeline Music Products </h3><br/>";
		echo "<p  class=\"product-detail\">Our products instill and inspire the confidence of performers; leaders and communicators rely on to express themselves. Everyday, every where. It's your sound. World renowned microphones for better performance.</p><br/><br/>";
		echo $obj->viewproduct($cid);
		
	echo "<br/><br/>";
	    
   echo "<b>PANABOARDS   with  Whiteboards  writing solution </b><br/>";

	echo "<table><tr>";
	echo "<td width=\20%\"><img src=\"image/uploadDir/30998image-26.png\" width=\"100\" height=\"100\" /></td>";
	echo "<td><img src=\"image/uploadDir/image-42.png\" width=\"100\" height=\"100\" /></td>";
	echo "<td width=\"20%\"><img src=\"image/uploadDir/7729image-37.png\" width=\"100\" height=\"100\" /></td>";
	echo "</tr></table>";

	}
	
}

?>

</div><!--End categories-->
</div><!--End Center Content-->
</div><!-- End Container-->
<?php require_once("include/webparts/footer.php")?>
</body>
</html>