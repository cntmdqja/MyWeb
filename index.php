<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<LINK href="main.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="javascript.js"></script>
    <script src="photoslider.js"></script>
    <script src="skill.js"></script>
	<script type="text/javascript">
			
		////////////////////////////////////////////////////////
		//  These processes are for having JS session to have //
		//	the right css for menu in index page. Since my	  //
		//	webpage menu handles everything in index page I   //
		//	can't just set the menu seperately. It also		  //
		//	handles changing the html file that clients view  //
		////////////////////////////////////////////////////////
		$(document).ready(function(){
		  $("#menuSkill").click(function(){
			move(sessionStorage.ID);
			var lastID = sessionStorage.menuID;
			sessionStorage.setItem("ID","#skillDiv");
			sessionStorage.setItem("menuID","#menuSkill");
			var currID = sessionStorage.menuID;
			show(sessionStorage.ID);
			changeActiveLink(lastID, currID);
  			  });
		  });
		  
		 $(document).ready(function(){
		  $("#menuProject").click(function(){
			move(sessionStorage.ID);
			var lastID = sessionStorage.menuID;
			sessionStorage.setItem("ID","#projectDiv");
			sessionStorage.setItem("menuID","#menuProject");
			var currID = sessionStorage.menuID;
			changeActiveLink(lastID, currID);
		    show(sessionStorage.ID);
  			  });
		  });
		  
		 $(document).ready(function(){
		  $("#menuIndex").click(function(){
		    move(sessionStorage.ID);
			var lastID = sessionStorage.menuID;
			sessionStorage.setItem("ID","#indexDiv");
			sessionStorage.setItem("menuID","#menuIndex");
			var currID = sessionStorage.menuID;
			changeActiveLink(lastID, currID);
		    show(sessionStorage.ID);
			
  			  });
		  });
		  
		  $(document).ready(function(){
		  $("#menuAbout").click(function(){
		    move(sessionStorage.ID);
			var lastID = sessionStorage.menuID;
			sessionStorage.setItem("ID","#aboutDiv");
			sessionStorage.setItem("menuID","#menuAbout");
			var currID = sessionStorage.menuID;
			changeActiveLink(lastID, currID);
		    show(sessionStorage.ID);
			
  			  });
		  });
		  
		  $(document).ready(function(){
		   		var width = document.getElementById("left").offsetWidth;
				document.getElementById("myImg").width=width;  
				document.getElementById("myImg2").width=width;  
				document.getElementById("myImg3").width=width;  
		  });
		  
		  function move(id){
			  $(id).slideToggle();
		  }
		  function show(id){
			  $(id).slideToggle();
		  }
		  
		  function changeActiveLink(lastID, curID) {
			  $(lastID).removeClass('active');
			  $(curID).addClass('active');
			}
		  </script>
          <!--This Script is for the skill page-->
	<title>Portolio of Steve S Choo</title>
    
</head>


<body>
	<div class="wrapper">
        	<div class="name">
            	<h1>STEVE CHOO</h1>
	        </div>
	        <div class="container">
	            <ul class="menu">
	                <li id="menuIndex" class="active"><a href="#indexDiv">Home</a></li>
                    <li id="menuAbout"><a href="#aboutDiv">About</a></li>
                    <li id="menuSkill"><a href="#skillDiv">Skill</a></li>
	                <li id="menuProject"><a href="#projectDiv">Projects</a></li>
	                <li><a href="Resume.pdf">Resume</a></li>
	            </ul>
	        </div>
	    </div> <!-- end of wrapper-->
	<div id="indexDiv">        
        <div class="main">
        	<div id="left">
				<div class="photoslidecontainer">
			<div class="image-slider-wrapper">
				<ul id="image_slider">
					<li><img id="myImg" src="img/Logo/java.jpg" height="300px"></li>
					<li><img id="myImg2" src="img/Logo/php.jpg" height="300px"></li>
					<li><img id="myImg3" src="img/Logo/jsp.jpg" height="300px"></li>
				</ul>			
			</div>
		</div>
            </div><!--left ends-->
            <div class="right">
            	<h2>Welcome</h2>
				<br />
            	<p>Hello there. My name's Steve Choo and welcome to my website, it's a web portfolio made by me using HTML, CSS, PHP, Javascript(Jquery). It's still under construction but will be updated regularly.</p>
				<p>Here is my LinkedIn link.&nbsp; &nbsp;&nbsp;<a href="https://www.linkedin.com/profile/view?id=347046895&trk=spm_pic"><img src="img/linked in.png" width="10%" height="10%" alt="LinkedIn Logo"/></a></p>
                <script type="text/javascript">
				// I do this to set the session ID and MenuID when people first come to my page
				// Doesn't need to be doen in other pages since it's all done in the JS above
				sessionStorage.ID = "#indexDiv";
				sessionStorage.menuID = "#menuIndex";
                </script>
                
            </div>
        </div>    
                
     </div>
     
     <div id="aboutDiv" class="middleDiv" style="display:none;">
    		<?php
            	include 'AboutMe.html';
	        ?>
        </div>
     
     <div id="skillDiv" class="middleDiv" style="display:none;">
    		<?php
            	include 'skills.html';
	        ?>
        </div>
        
	    <div id="projectDiv" class="middleDiv" style="display:none;">
	        <?php
	           	include 'projects.html';
	        ?>
	    </div>
</body>
<div style="clear:both"></div>
<footer>
	<h1>Contact</h1>
	<p>Email: <a href="mailto:chooseun@gmail.com">chooseun@gmail.com</a>   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;     Phone: 517-897-0578</p>
    
</footer>

</html>
