<?php

    include ("body.php");

?>

<!doctype html>
<html>
<head>
<title>Creative Chris</title>
    
    <link href="css/home.css" type="text/css" rel="stylesheet" media="screen"/>
    
    <script>
    $(document).ready(function(){
        
        
        
//        var object2= $('#me-1');
//        var content= $('body');
//		
//		content.mousemove(function(e){
//			
//			var valueX=(e.pageX * 1 / 5);
//			var valueY=(e.pageY * -1 / 25);
//			
//			object2.css({
//				'transform':'translate3d('+valueY+'px,'+valueY+'px,0)'
//			});
//			
//		});
        
        
        $('.nav1').addClass('currentpage');
        $(".currentpage i").css("transition-delay", "5s");
        $(".currentpage a").css("transition-delay", "5s");
        $(".currentpage .navline").css("transition-delay", "5s");
        
		
		$( ".button" ).mouseover(function() { 
			$('#hat').animate({marginLeft: '-50px'}, 500);
            $("#me-1").css("filter", "blur(8px)");
            $("header").css("filter", "blur(8px)");
		});
		
		$( ".button" ).mouseleave(function() { 
			$('#hat').animate({marginLeft: '0'}, 500);
            $("#me-1").css("filter", "blur(0px)");
            $("header").css("filter", "blur(0px)");
		});
        
        
        
        
        
        $('#intro').delay(1000);
        $('#intro').animate({opacity: '1'}, 500);
        $('#intro').delay(2000);
        $('#intro').animate({opacity: '0'}, 500);
        
        $('header').delay(4000);
        $('header').animate({opacity: '1'}, 500);
        
        $('#c-home').delay(3700);
        $('#c-home').animate({width: '300px', left: '50px', top: '0', opacity: '1'}, 500);
        $('#home-text').delay(4500);
        $('#home-text').animate({opacity: '1'}, 1000);
        $('.home-text2').delay(4500);
        $('.home-text2').animate({opacity: '1'}, 1000);
        $('#line').delay(5000);
        $('#line').animate({width: '200px'}, 500);
        $('.button').delay(5600);
        $('.button').animate({opacity: '1'}, 500);
        
        
        
        
    });
    </script>
    <style>
        
        
        
        
        body {
            max-height: 100vh;
            overflow: hidden!important;
        }
        
        .button {
            float: left;
            left: -105px;
            top: 100px;
            opacity: 0;
        }
        #container {
            overflow: visible;
        }
        .button:hover {
            background: transparent;
            border: solid #1cbbb4 2px;
        }
        .button:hover > b {
            color: #1cbbb4;
        }
        
        
    </style>
</head>
<body>
    <?php include_once("header.php") ?>
    <div id="container">
        <main>
            <div id="intro" class="intro"><h1>Hi</h1></div>
            <div class="home-content">
                <img id="c-home" src="image/logo/home_c.png"/>
                <div id="home-text">
                    <p id="home-P"><l>W</l>elcome to my</p><p id="home-P">portfolio</p>
                </div>
                <div id="line"></div>
                <a href="about.php" class="button"><i id="hat" class="fas fa-info-circle"></i><b>About me</b></a>
            </div>
            
        <img id="me-1" src="image/me_1-colored.png" />
        </main>    
    </div>
	
	<?php include_once("footer.php") ?>
</body>
</html>