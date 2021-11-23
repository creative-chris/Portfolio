<?php

    include ("body.php");

?>

<!doctype html>
<html>
<head>
<title>About me</title>
    
    <link href="about.css" type="text/css" rel="stylesheet" media="screen"/>
    
    <script>
    $(document).ready(function(){
        
        $('.nav2').addClass('currentpage');
        
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
        
        $('header').animate({opacity: '1'}, 500);
        
        $('#img1').delay(1000);
        $('#img1').animate({opacity: '1', paddingTop: '0'}, 2000);
        
        var list1 = "none";
        var list2 = "none";
        var list3 = "none";
        var list4 = "none";
        
		$('#list1').mouseenter(function(){
            $('#img2').animate({height: '300px'}, 1000);
            $('.popup').animate({top: '15px'}, 500);
            $('#popup1').animate({fontSize: '2em', fontWeight: '900', opacity: '1'}, 500);
            list1 = "active";
            list2 = "none";
            list3 = "none";
            list4 = "none";
        });
        $('#list1').mouseleave(function(){
            $('#img2').animate({height: '200px'}, 1000);
            $('.popup').animate({top: '0px'}, 500);
            $('#popup1').animate({fontSize: '.75em', fontWeight: '0', opacity: '0.5'}, 500);
            list1 = "none";
            list2 = "none";
            list3 = "none";
            list4 = "none";
        });
		$('#list2').mouseenter(function(){
            $('#img3').animate({height: '300px'}, 1000);
            $('.popup').animate({top: '0px'}, 500);
            $('#popup2').animate({fontSize: '2em', fontWeight: '900', opacity: '1'}, 500);
            list1 = "none";
            list2 = "active";
            list3 = "none";
            list4 = "none";
        });
        $('#list2').mouseleave(function(){
            $('#img3').animate({height: '200px'}, 1000);
            $('.popup').animate({top: '0px'}, 500);
            $('#popup2').animate({fontSize: '.75em', fontWeight: '0', opacity: '0.5'}, 500);
            list1 = "none";
            list2 = "none";
            list3 = "none";
            list4 = "none";
        });
		$('#list3').mouseenter(function(){
            $('#img4').animate({height: '300px'}, 1000);
            $('.popup').animate({top: '-15px'}, 500);
            $('#popup3').animate({fontSize: '2em', fontWeight: '900', opacity: '1'}, 500);
            list1 = "none";
            list2 = "none";
            list3 = "active";
            list4 = "none";
        });
        $('#list3').mouseleave(function(){
            $('#img4').animate({height: '200px'}, 1000);
            $('.popup').animate({top: '0px'}, 500);
            $('#popup3').animate({fontSize: '.75em', fontWeight: '0', opacity: '0.5'}, 500);
            list1 = "none";
            list2 = "none";
            list3 = "none";
            list4 = "none";
        });
		$('#list4').mouseenter(function(){
            $('#img5').animate({height: '300px'}, 1000);
            $('.popup').animate({top: '-30px'}, 500);
            $('#popup4').animate({fontSize: '2em', fontWeight: '900', opacity: '1'}, 500);
            list1 = "none";
            list2 = "none";
            list3 = "none";
            list4 = "active";
        });
        $('#list4').mouseleave(function(){
            $('#img5').animate({height: '200px'}, 1000);
            $('.popup').animate({top: '0px'}, 500);
            $('#popup4').animate({fontSize: '.75em', fontWeight: '0', opacity: '0.5'}, 500);
            list1 = "none";
            list2 = "none";
            list3 = "none";
            list4 = "none";
        });
        
        
        
        
    });
    </script>
    <style>
        
        
        
        
    </style>
</head>
<body>
    <?php include_once("header.php") ?>
    
        <img id="img1" src="image/Rectangle_aboutme.png" />
    
    <div id="container">
        <h1 class="title"><b class="select">I</b>&nbsp;am</h1>
        <main>
            <div id="toptext">
                <h1 id="name">Chris</h1><br>
                <br>
                <p id="text1">I'm a interactive developer and student ICT media at fontys Eindhoven. I love to code and create my own work. I plan to finish my studies because I want to know more and there's always more to know. When I'm done with school I want to aim high and try to become a great allround-developer. I'm undesided about if I want to work in a company or start my own. I see myself being succesfull in what I love to do.</p>
            </div>
            <div id="bottomtext">
                <h1><b class="select">I</b>&nbsp;like</h1>
                <p class="popup" id="popup1">to hang out</p>
                <p class="popup" id="popup2">to travel</p>
                <p class="popup" id="popup3">to be funny</p>
                <p class="popup" id="popup4">to go out</p>
                <ul id="list">
                    <li id="list1"><img id="img2" src="image/FB_IMG_1587710640961.jpg"/></li>
                    <li id="list2"><img id="img3" src="image/Snapchat-212691255.jpg"/></li>
                    <li id="list3"><img id="img4" src="image/Snapchat-2635778808673254096.jpg"/></li>
                    <li id="list4"><img id="img5" src="image/20190601_203353_002.jpg"/></li>
                </ul>
            </div>
            <div id="exp">
                <ul>
                    <li id="exp1"><h3>Education</h3><br><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
Aenean commodo ligula eget dolor. Aenean massa. Cum 
sociis natoque penatibus et magnis dis parturient montes, 
nascetur ridiculus mus. Donec quam felis, ultricies nec, 
pellentesque eu, pretium quis, sem. Nulla consequat massa
quis enim. Donec pede justo, fringilla vel, aliquet nec, i.</p></li>
                    <li id="exp2"><h3>Intership</h3><br><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
Aenean commodo ligula eget dolor. Aenean massa. Cum 
sociis natoque penatibus et magnis dis parturient montes, 
nascetur ridiculus mus. Donec quam felis, ultricies nec, 
pellentesque eu, pretium quis, sem. Nulla consequat massa
quis enim. Donec pede justo, fringilla vel, aliquet nec, i.</p></li>
                    <li id="exp3"><h3>Clients</h3><br><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
Aenean commodo ligula eget dolor. Aenean massa. Cum 
sociis natoque penatibus et magnis dis parturient montes, 
nascetur ridiculus mus. Donec quam felis, ultricies nec, 
pellentesque eu, pretium quis, sem. Nulla consequat massa
quis enim. Donec pede justo, fringilla vel, aliquet nec, i.</p></li>
                </ul>
            </div>
        </main>
        
    </div>
	
	<?php include_once("footer.php") ?>
</body>
</html>