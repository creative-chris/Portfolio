<?php

include ("body.php");

?>

<!doctype html>
<html>
    
<head>
<link href="css/header.css" type="text/css" rel="stylesheet" media="screen"/>
    
    <script>
    $(document).ready(function(){
        
        
        var page = "";                 
                         
                         
        $( ".nav1" ).mouseover(function() { 
			$('#navicon1').animate({top: '0'}, 500);
			$('#navline1').animate({width: '100%'}, 500);
		});
		
		$( ".nav1" ).mouseleave(function() { 
			$('#navicon1').animate({top: '-40px'}, 500);
			$('#navline1').animate({width: '0'}, 500);
		});
		
		$( ".nav2" ).mouseover(function() { 
			$('#navicon2').animate({top: '0'}, 500);
			$('#navline2').animate({width: '100%'}, 500);
		});
		
		$( ".nav2" ).mouseleave(function() { 
			$('#navicon2').animate({top: '-40px'}, 500);
			$('#navline2').animate({width: '0'}, 500);
		});
		
		$( ".nav3" ).mouseover(function() { 
			$('#navicon3').animate({top: '0'}, 500);
			$('#navline3').animate({width: '100%'}, 500);
		});
		
		$( ".nav3" ).mouseleave(function() { 
			$('#navicon3').animate({top: '-40px'}, 500);
			$('#navline3').animate({width: '0'}, 500);
		});
		
		$( ".nav4" ).mouseover(function() { 
			$('#navicon4').animate({top: '0'}, 500);
			$('#navline4').animate({width: '100%'}, 500);
		});
		
		$( ".nav4" ).mouseleave(function() { 
			$('#navicon4').animate({top: '-40px'}, 500);
			$('#navline4').animate({width: '0'}, 500);
		});
		
		$( ".nav5" ).mouseover(function() { 
			$('#navicon5').animate({top: '0'}, 500);
			$('#navline5').animate({width: '100%'}, 500);
		});
		
		$( ".nav5" ).mouseleave(function() { 
			$('#navicon5').animate({top: '-40px'}, 500);
			$('#navline5').animate({width: '0'}, 500);
		});
        
        
        
        
    });
    </script>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <script type="text/javascript" charset="utf-8" src="logo-gif_edgePreload.js"></script>
    <style>
        .edgeLoad-EDGE-1376562877 { visibility:hidden; }
        
    </style>
</head>
<body>
    <header>
		<nav>
            <div class="logo">
                <div id="Stage" class="EDGE-1376562877"></div>
            </div>
			<ul class="mainUL">
				<li  class="nav1"><div id="navline1" class="navline"></div><i id="navicon1" class="fas fa-home navicon"></i><a href="index.php">Home</a></li>
				<li  class="nav2"><div id="navline2" class="navline"></div><i id="navicon2" class="fas fa-info-circle navicon"></i><a href="about.php">About me</a></li>
				<li  class="nav3"><div id="navline3" class="navline"></div><i id="navicon3" class="fas fa-graduation-cap navicon"></i><a href="work.php">My work</a></li>
				<li style="display: none;"  class="nav4"><div id="navline4" class="navline"></div><i id="navicon4" class="fas fa-hashtag navicon"></i><a href="contact.php">Contact</a></li>
				<li  class="nav5"><div id="navline5" class="navline"></div><i id="navicon5" class="fas fa-hashtag navicon"></i><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
    </header>
	
	
</body>
</html>