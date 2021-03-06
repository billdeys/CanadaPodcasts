<!DOCTYPE html> 
<head> 
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
	<title>The home of Canadian podcasting - CanadaPodcasts.ca</title> 
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.4.2.js'></script> 
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="test.css"/> 

	<script type='text/javascript'> 

	
$(document).ready(function(){    
    $('#popup').show("bounce", { times:3 }, 300);
    $('.showpop').hide();
    $('.hide').click(function(){
        $('#popup').slideUp();
        $('span.showpop').fadeIn('slow');
        return false;
    });
    
    $('a.showpoplink').click(function(){
        $('#popup').show("bounce", { times:3 }, 300);
        $('.showpop').hide();
        return false;
    });
});
 

	</script> 
</head> 
<body> 
<div id=popup> 
	<span class=hide> 
		<a href=# class=hide>X</a> 
	</span> 
	<nav id="directory">
		<ul>
			<li><a href=#>Arts, Movies, and Television</a></li>
			<li><a href=#>Business and Finance</a></li>
			<li><a href=#>Comedy/Satire</a></li>
			<li><a href=#>Crafts and Hobbies</a></li>
			<li><a href=#>Documentary/Interview</a></li>
			<li><a href=#>Education</a></li>
			<li><a href=#>Environment</a></li>
			<li><a href=#>Family</a></li>
			<li><a href=#>Food/Drink</a></li>
			<li><a href=#>Health</a></li>
			<li><a href=#>Lifestyle</a></li>		
			<li><a href=#>Music</a></li>
			<li><a href=#>Political/Cultural</a></li>
			<li><a href=#>Radio Simulcast</a></li>
			<li><a href=#>Religion/Inspiration</a></li>	
			<li><a href=#>Science</a></li>
			<li><a href=#>Sports and Recreation</a></li>
			<li><a href=#>Storytelling</a></li>
			<li><a href=#>Technology</a></li>
			<li><a href=#>Variety/Chat</a></li>
			<li><a href=#>Video Podcasts</a></li>
			<li><a href=#>CBC Radio Podcasts</a></li>
			<li><a href=#>Radio Canada International Podcasts</a></li>
			<li><a href=#>TSN Podcasts</a></li>
			<li><a href=#>Toronto Star</a></li>
		</ul>
	</nav> 
</div> 

 
 
<nav id="primary">
	<ul>
		<li><a href=#>Home</a></li>
		<li>
			<span class=showpop> 
				<a href=# class=showpoplink>Directory</a> 
			</span>
		</li>
		<li><a href=#>Updates</a></li>
		<li><a href=#>Episodes</a></li>
		<li><a href=#>Add</a></li>
	</ul>
</nav>
 
<article> 
	
	<p>Welcome to CanadaPodcasts.ca, Canada's top podcast directory.<br /><br /></p>
	<p><I><b>What are podcasts?</b><br /> </I>  Think "Internet TV/Radio on Demand". Want to know more? We think <a href="http://en.wikipedia.org/wiki/Podcasting">wikipedia</a> does a great job of explaining podcasting, but all you need to know is you can listen/watch most shows listed here just by clicking on the show title and playing it right from the show's home page.<br /></p>
	  <p>If you're using a <a href="http://en.wikipedia.org/wiki/Aggregator#List_of_Media_Aggregators">podcatcher</a>, you can subscribe (for free) to the shows right from this page<br />by clicking the <img alt="iTunes" title="iTunes" src="images/itunes.gif" border="0" height="14">  to add it to iTunes, or the <img alt="RSS" title="RSS feed" src="images/feed.gif" border="0" height="14" width="14"> to get the RSS feed for other podcatchers.
	  </p>
		
</article> 
</body> 
 
 
</html> 