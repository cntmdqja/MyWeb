<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<LINK href="main.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="javascript.js"></script>
    <script src="skill.js"></script>
	<script type="text/javascript">
	
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
            	<h1>STEVECHOO</h1>
	        </div>
	        <div class="container">
	            <ul class="menu">
	                <li id="menuIndex" class="active"><a href="#indexDiv">Home</a></li>
                    <li id="menuSkill"><a href="#skillDiv">Skill</a></li>
	                <li id="menuProject"><a href="#projectDiv">Projects</a></li>
	                <li><a href="Resume.pdf">Resume</a></li>
	            </ul>
	        </div>
	    </div> <!-- end of wrapper-->
	<div id="indexDiv" class="middleDiv" >        
        <div class="main">
        	<div class="left">
				<img src="img/profile.png" width="180" height="200" alt="Picture of Steve Choo" style="padding-top:10%;"/>
            </div>
            <div class="right">
            	<h2>Software Engineer, Web Developer</h2>
				<br />
            	<p>Hello there. My name is Steve Choo, well my real name is Seungbeom but no one can pronounce it anyway. Welcome to my website, it's a web portfolio made by me using HTML, CSS, PHP, Javascript(Jquery). It's still under construction but will be updated regularly.</p>
				<p>Here is my LinkedIn link.&nbsp; &nbsp;&nbsp;<a href="https://www.linkedin.com/profile/view?id=347046895&trk=spm_pic"><img src="img/linked in.png" width="10%" height="10%" alt="LinkedIn Logo"/></a></p>
                <script type="text/javascript">
				sessionStorage.ID = "#indexDiv";
				sessionStorage.menuID = "#menuIndex";
                </script>
                
            </div>
        </div>    
                
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
