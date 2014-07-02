// JavaScript Document
$(document).ready(function() {$('#history').click(function (e) {
	alertDiv('history');
	});
	
}); 
$(document).ready(function() {$('#CodeLoad').click(function (e) {

alertDiv('CodeLoad');
	});
}); 
$(document).ready(function() {$('#ispmain').click(function (e) {

alertDiv('ispmain');
	});
}); 
$(document).ready(function() {$('#Agreement').click(function (e) {

alertDiv('Agreement');
	});
}); 
$(document).ready(function() {$('#partnerdays').click(function (e) {

alertDiv('partnerdays');
	});
}); 


//This is the function that outputs the div to describe the project
function alertDiv(text, left, top) {
	if(text == 'history'){
		var start = '<div class="alert">';
		var title = '<h1>History webpage for Studyabroad website</h1>';
		var language = '<h5>Language used: </h5> <p>PHP, HTML, CSS</p>';
		var purpose = '<h5>Purpose: </h5><p>This webpage was made to introduce the history of studyabroad in MSU</p>';
		var whatIDid = '<h5>Contribution: </h5><p>One unique thing about this website was that I used query so the user can browse different html files in the index page. This way, less time is consumed on loading the html file.</p>';
		var URL = '<a href="http://studyabroad.isp.msu.edu/history/">Go to the website</a>';
		var end = '</div>';
	}
	else if(text == 'CodeLoad'){
		var start = '<div class="alert">';
		var title = '<h1>CodeLoad</h1>';
		var language = '<h5>Language used: </h5> <p>Java</p>';
		var purpose = '<h5>Purpose: </h5><p>CodeLoad is a FTP solution which enables user to edit and complie codes within the program instead of using external sources such as notepad++</p>';
		var whatIDid = '<h5>Contribution:</h5><p>Still being made. My job in this program was to design out the classes needed and documentation plus some functions</p>';
		var URL = '<a href="https://github.com/oonis/CodeLoad">Github Page</a>';
		var end = '</div>';
	}
	else if(text == 'ispmain'){
		var start = '<div class="alert">';
		var title = '<h1>ISP Main Site</h1>';
		var language = '<h5>Language used: </h5> <p>PHP, CSS, SQL, XML, HTML</p>';
		var purpose = '<h5>Purpose: </h5><p>Index page of ISP main page, showing events and news</p>';
		var whatIDid = '<h5>Contribution: </h5><p>I used php and SQL to bring extract the event and news data which was in the isp database and used php to extract the datafile and get the certain information needed (date, title) which was in the xml format. Lastly, I used HTML and CSS to adjust the front end of the news and events div to meet the criteria.</p>';
		var URL = '<a href="http://www.isp.msu.edu">Go to the website</a>';
		var end = '</div>';
	}
	else if(text == 'Agreement'){
		var start = '<div class="alert">';
		var title = '<h1>The agreement webpage in the ISP</h1>';
		var language = '<h5>Language used: </h5> <p>PHP, SQL</p>';
		var purpose = '<h5>Purpose: </h5><p>The purpose of this webpage is to retrieve the list of schools around the world that made agreements with MSU. You can choose to see list of schools by categories</p>';
		var whatIDid = '<h5>Contribution: </h5><p>Sorting the list when the category on the table is clicked, used session to save the format user used.</p>';
		var URL = '<a href="http://www.isp.msu.edu/agreements/">Go to the website</a>';
		var end = '</div>';
	}
	else if(text == 'partnerdays'){
		var start = '<div class="alert">';
		var title = '<h1>Partnerdays webpage for Studyabroad</h1>';
		var language = '<h5>Language used: </h5> <p>HTML, CSS</p>';
		var purpose = '<h5>Purpose: </h5><p>This webpage was made to introduce the Partnerdays event and provide information necessary</p>';
		var whatIDid = '<h5>Contribution: </h5><p>This was my first ever project to work on as a webdeveloper. I made to use HTML and CSS to make a webpage that looked like the picture that client gave me</p>';
		var URL = '<a href="http://studyabroad.isp.msu.edu/partnerdays">Go to the website</a>';
		var end = '</div>';
	}
	var clicktoEnd = '<h6 id="close" style="color:red">click to close the description</h6>';
	var alrt = $(start + title + language + purpose + whatIDid + URL + clicktoEnd + end);
    $(document.body).append(alrt);
	
    alrt.click(function () {

        alrt.remove();
    });
	
}


$(function(){
	var pop = function(){
        $('#screen').css({"display": "block", opacity: 0.7, "width":$(document).width(),"height":$(document).height()});
        $('.alert').css({"display": "block"}).click(function(){$(this).css("display", "none");$('#screen').css("display", "none")});
		$('.alert').show().css("top", "500px").animate({top: 100}, 400);
		
		
}

$(document.querySelectorAll("#history, #partnerdays, #Agreement, #ispmain, #CodeLoad")).click(pop);
$(window).resize(function(){
        $('.alert').css("display") == 'block'?pop.call($(querySelectorAll("#history, #partnerdays, #Agreement, #ispmain, #CodeLoad"))):"";
});
});
