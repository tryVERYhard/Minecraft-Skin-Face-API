<html>
<head>
<title>Showcraft - Show your face</title>
<style>
body
{
background: url(img/bg.jpg);
color: black;
font-family: Arial;
font-size: 15px;
color: rgba(0,0,0,0.8);
}
#fix
{
width: 990px;
margin: auto;
}
#left
{
	float: left;
	margin-left: 70px;
	margin-top: 50px;
}
#left h1
{
	margin-bottom: -10px;
}
#codebox
{
	padding: 0 3px 2px;
font-family: Menlo,Monaco,"Courier New",monospace;
font-size: 12px;
color: #333333;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
display: block;
padding: 8.5px;
margin: 0 0 9px;
font-size: 12.025px;
line-height: 18px;
background-color: #eee;
border: 1px solid #ccc;
border: 1px solid rgba(0,0,0,0.15);
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
white-space: pre;
white-space: pre-wrap;
word-break: break-all;
word-wrap: break-word;
}
</style>
</head>
<body>
   <div id="fix">
   <br><br>
   <center><img src="img/logo.png"><br><br><span style="color: rgba(0,0,0,0.2);">
   _________________________________________________________________________________________________________
   </span><br><br>
   <img src="face.php?user=spexxor&size=64.png" style="margin-right: 10px;">
   <img src="face.php?user=ungespielt&size=64" style="margin-right: 10px;">
   <img src="face.php?user=Notch&size=64" style="margin-right: 10px;">
   <img src="face.php?user=tomitomi2001&size=64" style="margin-right: 10px;">
   <img src="face.php?user=BenB97&size=64" style="margin-right: 10px;">
   <img src="face.php?user=Vareide&size=64" style="margin-right: 10px;">
   <img src="face.php?user=b0xx3r&size=64" style="margin-right: 10px;">
   <img src="face.php?user=00Sora&size=64" style="margin-right: 10px;">
   <img src="face.php?user=callumrocks12345&size=64" style="margin-right: 10px;">

   </center>
    
     <div id="left">
     <center>
  <h1>Einfache API</h1>
  <span style="color: rgba(0,0,0,0.2);">
   _________________________________________________________________________________________________________</center>
   <br>
   </span>
   <h3>Dein Kopf als Image</h3>
   Du m&oumlchtest das Gesicht deines Minecraft Avatar's<br>
   haben? Egal ob als Forum Avatar, Youtube Avatar oder<br>
   Sonstiges? Hier findest du M&oumlglichkeiten:<br><br>
   <h4>Default(100x100)</h4>
   <div id="codebox">&lt;img src="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>face.php?user=<span style="color:#C40000;">spexxor</span>"></div>
   <h4>Custom Size</h4>
   <div id="codebox">&lt;img src="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>face.php?user=<span style="color:#C40000;">spexxor</span>&size=<span style="color:#00D9CA;">150</span>"></div>
   <h4>As PNG</h4>
   <div id="codebox">&lt;img src="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>face.php?user=<span style="color:#C40000;">spexxor</span>&size=<span style="color:#00D9CA;">150</span>.png"></div>
     </div>	
     <div id="right">
     	 	
     </div>
   </div>
</body>
</html>