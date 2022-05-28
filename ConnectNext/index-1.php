<!DOCTYPE html>
<html>
<head>
<title>
ConnectNext
</title>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">

      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>




 <script language="javascript" type="text/javascript">

<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>
</head>
<body  style="
  background-image: url('bgimg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;"
  >
<?php include('includes/navfixed.php');?>







			<div class="logo"><center>
				<h2 style="margin-top: 190px; color: white; font-size:50px;">ConnectNext</h2>
				<!-- <img src="images/netechlogo.png" width="160px"  style="margin-top: -55px;"> -->
			</center></div>
<div id="mainmain">




<a href="job_page1.php"><br> Organisers</a>
<a href="job_apply.php"><br> Attendees</a>
<!-- <a href="allvideos.php"><i class="icon-list-alt icon-2x"></i><br> ALL VIDEOS</a> -->


<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</body>
<?php include('footer.php'); ?>
</html>
