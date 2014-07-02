<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">




<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<LINK href="main.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>‌​
	<script type="text/javascript">
	
		//$(function(){
	//      $("#includedContent").load("b.html"); 
//	    });
	
	
		$(document).ready(function(){
		  $("#menuSkill").click(function(){
		    $("#skillDiv").fadeToggle(300);
			 $("#menuSkill").load(changeActiveLink());
			 $("#menuSkill").load("skills.html"); 
  			  });
		  });
		  
		  $(document).ready(function(){
		  $("#menuProject").click(function(){
		    $("#projectDiv").fadeToggle(300);
			 $("#menuProject").load(changeActiveLink());
  			  });
		  });
		  
		  function changeActiveLink() {
			  var currentLocation = window.location.href;
			  currentLocation = currentLocation.replace('//', '/').split('/');
			  var page = currentLocation[currentLocation.length - 1];
			  $('#menuProject a[href*="'+ page +'"]').addClass('active');
			  alert("Current Location:" + currentLocation);
			  alert("Page:" + page);
			  //for changing the class
			  //document.getElementById("MyID").className =
		      //document.getElementById("MyID").className.replace(/\bMyClass\b/,'');
			}
		  </script>
	<title>Portolio of Steve S Choo</title>
    
</head>


<body>
	<div class="wrapper">
        	<div class="name">
            	<h1>STEVECHOO</h1>
	        </div>
	        <div class="container">
	            <ul class="menu">
	                <li id="menuIndex" class="active"><a href="index.html">Home</a></li>
                    <li id="menuSkill"><p>Skills</p></li>
	                <li id="menuProject"><p>Projects</p></li>
	                <li><a href="Resume.pdf">Resume</a></li>
	            </ul>
	        </div>
	    </div>
	<div class="middleDiv">
		
        
        <div id="indexDiv" class="main">
        	<div class="left">
				<img src="img/profile.png" width="180" height="200" alt="Picture of Steve Choo" style="padding-top:10%;"/>
            </div>
            <div class="right">
            	<h2>Software Engineer, Web Developer</h2>
				<br />
            	<p>Hello there. My name is Steve Choo, well my real name is Seungbeom but no one can pronounce it anyway. Got nothing to say for now. Just a test</p>
                <?php echo 'dsafsadf'; ?>
				<p>Here is my LinkedIn link.&nbsp; &nbsp;&nbsp;<a href="https://www.linkedin.com/profile/view?id=347046895&trk=spm_pic"><img src="img/linked in.png" width="10%" height="10%" alt="LinkedIn Logo"/></a></p>
            </div>
        </div>    
        
        <div id="skillDiv" class="main" style="display:none;">
        zxdcz
    		<?php
            	echo "dsfsadfsa";
	    		include '1990-to-2000.htm';
	        ?>
    </iframe></div>
        
    <div id="projectDiv" class="main" style="display:none;">
    <iframe src="projects.html" name="targetframe" allowTransparency="true" frameborder="0"  style="width:100%">
    </iframe></div>    
        
    </div> <!-- This is for closing middle div-->
       <!-- <div id="projectDiv"></div>-->
</body>
<div style="clear:both"></div>
<footer>
	<h1>Contact</h1>
	<p>Email: <a href="mailto:chooseun@gmail.com">chooseun@gmail.com</a>   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;     Phone: 517-897-0578</p>
    
</footer>

</html>
