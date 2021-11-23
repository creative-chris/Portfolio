<?php

    include ("body.php");

   
if(isset($_POST['submit'])){
    
    header('Location: thank-you-order.html');

    $counter = $_POST['count'];
    
    $fpx = fopen('counter.txt', 'w');
    fwrite($fpx, "$counter");
    fclose($fpx);
    
    
    header('Location: work_example.php');

    }

?>

<!doctype html>
<html>
<head>
<title>My work</title>
    
    <link href="work.css" type="text/css" rel="stylesheet" media="screen"/>
    
    <script>
    $(document).ready(function(){
        
        
            
            $('.nav3').addClass('currentpage');
        
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
        
        var carouselcounter = 0;
        var random = 'zero';
        
        
        $('#right').addClass('right1');
        $('#left').addClass('left1');
        
        
        
        var animate = 1000;
        var animatetwo = 1200;
        
        var on = "On";
        var off = "Off";
        
        document.getElementById('switch').innerHTML = on;
        
        $('.animationplay').click(function(){
            animate = 1000;
            animatetwo = 1200;
        
            document.getElementById('switch').innerHTML = on;
            
			$(".animate").css("color","#1cbbb4");
			$("#switch").css("color","#1cbbb4");
            
        });
        
        $('.animationstop').click(function(){
            
            animate = 0;
            animatetwo = 0;
        
            document.getElementById('switch').innerHTML = off;
            
			$(".animate").css("color","red");
			$("#switch").css("color","red");
            
            
            
        });
        
        
        //                          Right
        
        $('#right').click(function(){
            
            $('.story1').delay(animate);
            $('.story2').delay(animate);
            $('.story3').delay(animate);
            $('.story4').delay(animate);
            $('.story5').delay(animate); 
            $('.story6').delay(animate);
            $('.story7').delay(animate); 
            $('.story8').delay(animate);
            
            $('.story1').animate({opacity: '1', top: '0%'}, 0000); 
            $('.story2').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story3').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story4').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story5').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story6').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story7').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story8').animate({opacity: '0', top: '-100%'}, 0000); 
            
			$(".p1").css("color","#1cbbb4");
			$(".p2").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
            
            
             
			$(".P0").css("color","#1cbbb4");
			$(".P1").css("color","white");
			$(".P2").css("color","white");
			$(".P3").css("color","white");
			$(".P4").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
			$(".p1").css("display","inline-block");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","inline-block");
			$(".p7").css("display","inline-block");
			$(".p8").css("display","inline-block");
            
            carouselcounter++
            
            if (carouselcounter === 1) {
            
            $('#content1').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content2').delay(animate);
            $('#content2').animate({opacity: '1', left: '0'}, animate);
            $('#left').delay(animate);
            $('#left').animate({opacity: '1', right: '0'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '.5', top: '0px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
                }
            
            if (carouselcounter === 2) {
            
            $('#content2').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content3').delay(animate);
            $('#content3').animate({opacity: '1', left: '0'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '.5', top: '0px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
                }
            
            if (carouselcounter === 3) {
            
            $('#content3').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content4').delay(animate);
            $('#content4').animate({opacity: '1', left: '0'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '.5', top: '0px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
                }
            
            if (carouselcounter === 4) {
            
            $('#content4').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content5').delay(animate);
            $('#content5').animate({opacity: '1', left: '0'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
                }
            
            if (carouselcounter === 5) {
            
            $('#content5').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content6').delay(animate);
            $('#content6').animate({opacity: '1', left: '0'}, animate);
            $('#right').delay(animate);
            $('#right').animate({opacity: '0', left: '10vw'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '.5', top: '0px'}, animate);
                
                }
            
        console.log(carouselcounter);
            $('#count').val(carouselcounter);
        });
        
        
        
        //                          Left
        
        $('#left').click(function(){
            
            $('.story1').delay(animate);
            $('.story2').delay(animate);
            $('.story3').delay(animate);
            $('.story4').delay(animate);
            $('.story5').delay(animate); 
            $('.story6').delay(animate);
            $('.story7').delay(animate); 
            $('.story8').delay(animate);
            
            $('.story1').animate({opacity: '1', top: '0%'}, 0000); 
            $('.story2').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story3').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story4').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story5').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story6').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story7').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story8').animate({opacity: '0', top: '-100%'}, 0000); 
            
			$(".p1").css("color","#1cbbb4");
			$(".p2").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
            
            
             
			$(".P0").css("color","#1cbbb4");
			$(".P1").css("color","white");
			$(".P2").css("color","white");
			$(".P3").css("color","white");
			$(".P4").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
			$(".p1").css("display","inline-block");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","inline-block");
			$(".p7").css("display","inline-block");
			$(".p8").css("display","inline-block");
            
            
            carouselcounter--
            
            if (carouselcounter === 0) {
            
            $('#content2').animate({opacity: '0', left: '100vw'}, animate);
            $('#content1').delay(animate);
            $('#content1').animate({opacity: '1', left: '0'}, animate);
            $('#left').delay(animate);
            $('#left').animate({opacity: '0', right: '10vw'}, animate);
                
//                jump
                
            $('#jumpsL #jump1').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '.5', top: '0px'}, animate);
                
                }
            
            if (carouselcounter === 1) {
            
            $('#content3').animate({opacity: '0', left: '100vw'}, animate);
            $('#content2').delay(animate);
            $('#content2').animate({opacity: '1', left: '0'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '.5', top: '0px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
                }
            
            if (carouselcounter === 2) {
            
            $('#content4').animate({opacity: '0', left: '100vw'}, animate);
            $('#content3').delay(animate);
            $('#content3').animate({opacity: '1', left: '0'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '.5', top: '0px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
                }
            
            if (carouselcounter === 3) {
            
            $('#content5').animate({opacity: '0', left: '100vw'}, animate);
            $('#content4').delay(animate);
            $('#content4').animate({opacity: '1', left: '0'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '.5', top: '0px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
                }
            
            if (carouselcounter === 4) {
            
            $('#content6').animate({opacity: '0', left: '100vw'}, animate);
            $('#content5').delay(animate);
            $('#content5').animate({opacity: '1', left: '0'}, animate);
            $('#right').delay(animate);
            $('#right').animate({opacity: '1', left: '0'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
                }
            
        console.log(carouselcounter);
            //document.getElementById('count').innerHTML = carouselcounter;
            
            $('#count').val(carouselcounter);
            
        });
        
        //jump
        
         $('.jump1').click(function(){
             
            carouselcounter = 0;
             
            $('#content1').delay(animate);
            $('#content1').animate({opacity: '1', left: '0'}, animate);
            $('#right').delay(animate);
            $('#right').animate({opacity: '1', left: '0vw'}, animate);
            $('#left').delay(animate);
            $('#left').animate({opacity: '0', right: '10vw'}, animate);
             
             
            $('#content2').animate({opacity: '0', left: '100vw'}, animate);
            $('#content3').animate({opacity: '0', left: '100vw'}, animate);
            $('#content4').animate({opacity: '0', left: '100vw'}, animate);
            $('#content5').animate({opacity: '0', left: '100vw'}, animate);
            $('#content6').animate({opacity: '0', left: '100vw'}, animate);
                
//                jump
                
            $('#jumpsL #jump1').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '.5', top: '0px'}, animate);
             
             
             //  reset pages
                 
            
            $('.story1').delay(animate);
            $('.story2').delay(animate);
            $('.story3').delay(animate);
            $('.story4').delay(animate);
            $('.story5').delay(animate); 
            $('.story6').delay(animate);
            $('.story7').delay(animate); 
            $('.story8').delay(animate);
            
            $('.story1').animate({opacity: '1', top: '0%'}, 0000); 
            $('.story2').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story3').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story4').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story5').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story6').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story7').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story8').animate({opacity: '0', top: '-100%'}, 0000); 
            
			$(".p1").css("color","#1cbbb4");
			$(".p2").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
            
            
             
			$(".P0").css("color","#1cbbb4");
			$(".P1").css("color","white");
			$(".P2").css("color","white");
			$(".P3").css("color","white");
			$(".P4").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
			$(".p1").css("display","inline-block");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","inline-block");
			$(".p7").css("display","inline-block");
			$(".p8").css("display","inline-block");
                

             console.log(carouselcounter);
         });
        
         $('.jump2').click(function(){
             
            carouselcounter = 1;
            
            $('#content1').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content2').delay(animate);
            $('#content2').animate({opacity: '1', left: '0'}, animate);
            $('#right').delay(animate);
            $('#right').animate({opacity: '1', left: '0vw'}, animate);
            $('#left').delay(animate);
            $('#left').animate({opacity: '1', right: '0'}, animate);
             
             
            $('#content3').animate({opacity: '0', left: '100vw'}, animate);
            $('#content4').animate({opacity: '0', left: '100vw'}, animate);
            $('#content5').animate({opacity: '0', left: '100vw'}, animate);
            $('#content6').animate({opacity: '0', left: '100vw'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '.5', top: '0px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
             
             
             //  reset pages
                 
            
            $('.story1').delay(animate);
            $('.story2').delay(animate);
            $('.story3').delay(animate);
            $('.story4').delay(animate);
            $('.story5').delay(animate); 
            $('.story6').delay(animate);
            $('.story7').delay(animate); 
            $('.story8').delay(animate);
            
            $('.story1').animate({opacity: '1', top: '0%'}, 0000); 
            $('.story2').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story3').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story4').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story5').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story6').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story7').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story8').animate({opacity: '0', top: '-100%'}, 0000); 
            
			$(".p1").css("color","#1cbbb4");
			$(".p2").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
            
            
             
			$(".P0").css("color","#1cbbb4");
			$(".P1").css("color","white");
			$(".P2").css("color","white");
			$(".P3").css("color","white");
			$(".P4").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
			$(".p1").css("display","inline-block");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","inline-block");
			$(".p7").css("display","inline-block");
			$(".p8").css("display","inline-block");
                

             console.log(carouselcounter);
         });
        
         $('.jump3').click(function(){
             
            carouselcounter = 2;
            
            $('#content2').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content3').delay(animate);
            $('#content3').animate({opacity: '1', left: '0'}, animate);
            $('#right').delay(animate);
            $('#right').animate({opacity: '1', left: '0vw'}, animate);
            $('#left').delay(animate);
            $('#left').animate({opacity: '1', right: '0'}, animate);
             
             
            $('#content1').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content4').animate({opacity: '0', left: '100vw'}, animate);
            $('#content5').animate({opacity: '0', left: '100vw'}, animate);
            $('#content6').animate({opacity: '0', left: '100vw'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '.5', top: '0px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
             
             
             //  reset pages
                 
            
            $('.story1').delay(animate);
            $('.story2').delay(animate);
            $('.story3').delay(animate);
            $('.story4').delay(animate);
            $('.story5').delay(animate); 
            $('.story6').delay(animate);
            $('.story7').delay(animate); 
            $('.story8').delay(animate);
            
            $('.story1').animate({opacity: '1', top: '0%'}, 0000); 
            $('.story2').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story3').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story4').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story5').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story6').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story7').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story8').animate({opacity: '0', top: '-100%'}, 0000); 
            
			$(".p1").css("color","#1cbbb4");
			$(".p2").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
            
            
             
			$(".P0").css("color","#1cbbb4");
			$(".P1").css("color","white");
			$(".P2").css("color","white");
			$(".P3").css("color","white");
			$(".P4").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
			$(".p1").css("display","inline-block");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","inline-block");
			$(".p7").css("display","inline-block");
			$(".p8").css("display","inline-block");
                

             console.log(carouselcounter);
         });
        
         $('.jump4').click(function(){
             
            carouselcounter = 3;
            
            $('#content3').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content4').delay(animate);
            $('#content4').animate({opacity: '1', left: '0'}, animate);
            $('#right').delay(animate);
            $('#right').animate({opacity: '1', left: '0vw'}, animate);
            $('#left').delay(animate);
            $('#left').animate({opacity: '1', right: '0'}, animate);
             
             
            $('#content1').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content2').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content5').animate({opacity: '0', left: '100vw'}, animate);
            $('#content6').animate({opacity: '0', left: '100vw'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '.5', top: '0px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
             
             
             //  reset pages
                 
            
            $('.story1').delay(animate);
            $('.story2').delay(animate);
            $('.story3').delay(animate);
            $('.story4').delay(animate);
            $('.story5').delay(animate); 
            $('.story6').delay(animate);
            $('.story7').delay(animate); 
            $('.story8').delay(animate);
            
            $('.story1').animate({opacity: '1', top: '0%'}, 0000); 
            $('.story2').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story3').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story4').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story5').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story6').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story7').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story8').animate({opacity: '0', top: '-100%'}, 0000); 
            
			$(".p1").css("color","#1cbbb4");
			$(".p2").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
            
            
             
			$(".P0").css("color","#1cbbb4");
			$(".P1").css("color","white");
			$(".P2").css("color","white");
			$(".P3").css("color","white");
			$(".P4").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
			$(".p1").css("display","inline-block");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","inline-block");
			$(".p7").css("display","inline-block");
			$(".p8").css("display","inline-block");
                

             console.log(carouselcounter);
         });
        
         $('.jump5').click(function(){
             
            carouselcounter = 4;
            
            $('#content4').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content5').delay(animate);
            $('#content5').animate({opacity: '1', left: '0'}, animate);
            $('#right').delay(animate);
            $('#right').animate({opacity: '1', left: '0vw'}, animate);
            $('#left').delay(animate);
            $('#left').animate({opacity: '1', right: '0'}, animate);
             
             
            $('#content1').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content2').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content3').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content6').animate({opacity: '0', left: '100vw'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '0', top: '-100px'}, animate);
             
             
             //  reset pages
                 
            
            $('.story1').delay(animate);
            $('.story2').delay(animate);
            $('.story3').delay(animate);
            $('.story4').delay(animate);
            $('.story5').delay(animate); 
            $('.story6').delay(animate);
            $('.story7').delay(animate); 
            $('.story8').delay(animate);
            
            $('.story1').animate({opacity: '1', top: '0%'}, 0000); 
            $('.story2').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story3').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story4').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story5').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story6').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story7').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story8').animate({opacity: '0', top: '-100%'}, 0000); 
            
			$(".p1").css("color","#1cbbb4");
			$(".p2").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
            
            
             
			$(".P0").css("color","#1cbbb4");
			$(".P1").css("color","white");
			$(".P2").css("color","white");
			$(".P3").css("color","white");
			$(".P4").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
			$(".p1").css("display","inline-block");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","inline-block");
			$(".p7").css("display","inline-block");
			$(".p8").css("display","inline-block");
                

             console.log(carouselcounter);
         });
        
         $('.jump6').click(function(){
             
            carouselcounter = 5;
            
            $('#content5').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content6').delay(animate);
            $('#content6').animate({opacity: '1', left: '0'}, animate);
            $('#right').delay(animate);
            $('#right').animate({opacity: '0', left: '10vw'}, animate);
            $('#left').delay(animate);
            $('#left').animate({opacity: '1', right: '0'}, animate);
             
             
            $('#content1').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content2').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content3').animate({opacity: '0', left: '-100vw'}, animate);
            $('#content4').animate({opacity: '0', left: '-100vw'}, animate);
                
//                jump
                
            $('#jumpsR #jump6').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump2').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump3').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump4').animate({opacity: '0', top: '-100px'}, animate);
            $('#jumpsR #jump5').animate({opacity: '0', top: '-100px'}, animate);
                
            $('#jumpsL #jump1').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump2').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump3').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump4').animate({opacity: '.5', top: '0px'}, animate);
            $('#jumpsL #jump5').animate({opacity: '.5', top: '0px'}, animate);
             
             
             //  reset pages
                 
            
            $('.story1').delay(animate);
            $('.story2').delay(animate);
            $('.story3').delay(animate);
            $('.story4').delay(animate);
            $('.story5').delay(animate); 
            $('.story6').delay(animate);
            $('.story7').delay(animate); 
            $('.story8').delay(animate);
            
            $('.story1').animate({opacity: '1', top: '0%'}, 0000); 
            $('.story2').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story3').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story4').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story5').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story6').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story7').animate({opacity: '0', top: '-100%'}, 0000); 
            $('.story8').animate({opacity: '0', top: '-100%'}, 0000); 
            
			$(".p1").css("color","#1cbbb4");
			$(".p2").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
            
            
             
			$(".P0").css("color","#1cbbb4");
			$(".P1").css("color","white");
			$(".P2").css("color","white");
			$(".P3").css("color","white");
			$(".P4").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
			$(".p1").css("display","inline-block");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","inline-block");
			$(".p7").css("display","inline-block");
			$(".p8").css("display","inline-block");
                

             console.log(carouselcounter);
         });
        
        
        
        
        
        
        console.log(random);
        
       
        $(".jumps a").mouseover(function() { 
			$(this).css("opacity","1");
		});
        $(".jumps a").mouseleave(function() { 
			$(this).css("opacity",".5");
		});
        
        
//        
//        $("#content h3 a").mouseover(function() { 
//			$(this).css("color","#1cbbb4");
//		});
//        $("#content h3 a").mouseleave(function() { 
//			$(this).css("color","white");
//		});
        
        
        
        
		
		$( "#submit" ).mouseover(function() { 
			$(".press").css("transition","1s");
			$(".press").css("background","#1cbbb4");
			$(".press").css("color","white");
			$(".press").css("font-weight","900");
			$(".press").css("box-shadow","10px 8px 10px black");
		});
		
		$( "#submit" ).mouseleave(function() { 
			$(".press").css("transition","1s");
			$(".press").css("background","transparent");
			$(".press").css("color","#1cbbb4");
			$(".press").css("font-weight","0");
			$(".press").css("box-shadow","0px 0px 0px");
		});
		
		$( ".press" ).mouseover(function() { 
			$(".press").css("transition","1s");
			$(".press").css("background","#1cbbb4");
			$(".press").css("color","white");
			$(".press").css("font-weight","900");
			$(".press").css("box-shadow","10px 8px 10px black");
		});
		
		$( ".press" ).mouseleave(function() { 
			$(".press").css("transition","1s");
			$(".press").css("background","transparent");
			$(".press").css("color","#1cbbb4");
			$(".press").css("font-weight","0");
			$(".press").css("box-shadow","0px 0px 0px");
		});
        
        /// pages
        
//         $('.p2').click(function(){
//			$(".p1").css("transition","2s");
//			$(".p2").css("transition","2s");
//			$(".p3").css("transition","2s");
//             
//			$(".p1").css("animation-timing-function","ease-in-out");
//			$(".p2").css("animation-timing-function","ease-in-out");
//			$(".p3").css("animation-timing-function","ease-in-out");
//             
////			$(".p1").css("transition-delay","1s");
////			$(".p3").css("transition-delay","1s");
//             
//			$(".p1").css("color","white");
//			$(this).css("color","#1cbbb4");
//			$(".p3").css("color","white");
//             
////			$(".p1").css("border","solid white 0px");
////			$(this).css("border","solid #1cbbb4 3px");
////			$(".p3").css("border","solid white 0px");
//             
//            $('.page2').delay(2000);
//             
//            $('.page1').animate({opacity: '0'}, 1000);
//            $('.page2').animate({opacity: '1'}, 1000);
//            $('.page3').animate({opacity: '0'}, 1000);
//             
//			$(".page1").css("transition-delay","1s");
//			$(".page2").css("transition-delay","2s");
//			$(".page3").css("transition-delay","1s");
//             
//			$(".page1").css("display","none");
//			$(".page2").css("display","block");
//			$(".page3").css("display","none");
//         });
        
        
        /// Story
        
         $('.p1').click(function(){
             
            $('.story1').delay(animatetwo);
             
            $('.story1').animate({opacity: '1', top: '0%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
			$(".p2").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
//             
//            $('#story2').animate({opacity: '0'}, 1000);
//            $('#story1').delay(1000);
//            $('#story1').animate({opacity: '1'}, 1000);
         });
        
         $('.p2').click(function(){
             
            $('.story2').delay(animatetwo);
             
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '1', top: '0%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
			$(".p1").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
//             
//            $('#story1').animate({opacity: '0'}, 1000);
//            $('#story2').delay(1000);
//            $('#story2').animate({opacity: '1'}, 1000);
         });
        
         $('.p3').click(function(){
             
            $('.story3').delay(animatetwo);
             
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '1', top: '0%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
			$(".p1").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".p2").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
         });
        
         $('.p4').click(function(){
             
            $('.story4').delay(animatetwo);
             
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '1', top: '0%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
			$(".p1").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".p3").css("color","white");
			$(".p2").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
         });
        
         $('.p5').click(function(){
             
            $('.story5').delay(animatetwo);
             
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '1', top: '0%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
			$(".p1").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p2").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
         });
        
         $('.p6').click(function(){
             
            $('.story6').delay(animatetwo);
             
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '1', top: '0%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
			$(".p1").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p2").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
         });
        
         $('.p7').click(function(){
             
            $('.story7').delay(animatetwo);
             
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '1', top: '0%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
			$(".p1").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p2").css("color","white");
			$(".p8").css("color","white");
         });
        
         $('.p8').click(function(){
             
            $('.story8').delay(animatetwo);
             
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '1', top: '0%'}, animate);
             
			$(".p1").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p2").css("color","white");
         });
        
//        Topic                                     Topic
        
         $('.P0').click(function(){
             
			$(".p1").css("display","inline-block");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","inline-block");
			$(".p7").css("display","inline-block");
			$(".p8").css("display","inline-block");
             
			$(".P1").css("color","white");
			$(".P2").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".P3").css("color","white");
			$(".P4").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
         });
        
         $('.P1').click(function(){
             
//            action
             
			$(".P0").css("color","white");
			$(".P2").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".P3").css("color","white");
			$(".P4").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
         });
        
         $('.P2').click(function(){
             
//            action
             
			$(".P0").css("color","white");
			$(".P1").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".P3").css("color","white");
			$(".P4").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
         });
        
         $('.P3').click(function(){
             
//            action
             
			$(".P0").css("color","white");
			$(".P1").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".P2").css("color","white");
			$(".P4").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
         });
        
         $('.P4').click(function(){
             
//            action
             
			$(".P0").css("color","white");
			$(".P1").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".P2").css("color","white");
			$(".P3").css("color","white");
			$(".P5").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
         });
        
         $('.P5').click(function(){
             
//            action
             
			$(".P0").css("color","white");
			$(".P1").css("color","white");
			$(this).css("color","#1cbbb4");
			$(".P2").css("color","white");
			$(".P3").css("color","white");
			$(".P4").css("color","white");
			$(".P6").css("color","white");
			$(".P7").css("color","white");
			$(".P8").css("color","white");
             
         });
        
        
//        Topic Action
        
        
         $('#content1 .P1').click(function(){
             
			$(".p1").css("color","#1cbbb4");
             
			$(".p2").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","inline-block");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story1').delay(animatetwo);
             
            $('.story1').animate({opacity: '1', top: '0%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content1 .P2').click(function(){
             
			$(".p6").css("color","#1cbbb4");
             
			$(".p2").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p1").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","none");
			$(".p2").css("display","none");
			$(".p3").css("display","none");
			$(".p4").css("display","none");
			$(".p5").css("display","none");
			$(".p6").css("display","inline-block");
			$(".p7").css("display","inline-block");
			$(".p8").css("display","none");
             
            $('.story6').delay(animatetwo);
             
            $('.story6').animate({opacity: '1', top: '0%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content2 .P1').click(function(){
             
			$(".p1").css("color","#1cbbb4");
             
			$(".p2").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","inline-block");
			$(".p2").css("display","none");
			$(".p3").css("display","none");
			$(".p4").css("display","none");
			$(".p5").css("display","none");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story1').delay(animatetwo);
             
            $('.story1').animate({opacity: '1', top: '0%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content2 .P2').click(function(){
             
			$(".p2").css("color","#1cbbb4");
             
			$(".p1").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","none");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","none");
			$(".p4").css("display","none");
			$(".p5").css("display","none");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story2').delay(animatetwo);
             
            $('.story2').animate({opacity: '1', top: '0%'}, animate);
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content3 .P1').click(function(){
             
			$(".p1").css("color","#1cbbb4");
             
			$(".p2").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","inline-block");
			$(".p2").css("display","none");
			$(".p3").css("display","none");
			$(".p4").css("display","none");
			$(".p5").css("display","none");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story1').delay(animatetwo);
             
            $('.story1').animate({opacity: '1', top: '0%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content3 .P2').click(function(){
             
			$(".p2").css("color","#1cbbb4");
             
			$(".p1").css("color","white");
			$(".p3").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","none");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","none");
			$(".p4").css("display","none");
			$(".p5").css("display","none");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story2').delay(animatetwo);
             
            $('.story2').animate({opacity: '1', top: '0%'}, animate);
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content3 .P3').click(function(){
             
			$(".p3").css("color","#1cbbb4");
             
			$(".p1").css("color","white");
			$(".p2").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","none");
			$(".p2").css("display","none");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","inline-block");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story3').delay(animatetwo);
             
            $('.story3').animate({opacity: '1', top: '0%'}, animate);
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content3 .P4').click(function(){
             
			$(".p7").css("color","#1cbbb4");
             
			$(".p1").css("color","white");
			$(".p2").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p3").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","none");
			$(".p2").css("display","none");
			$(".p3").css("display","none");
			$(".p4").css("display","none");
			$(".p5").css("display","none");
			$(".p6").css("display","none");
			$(".p7").css("display","inline-block");
			$(".p8").css("display","none");
             
            $('.story7').delay(animatetwo);
             
            $('.story7').animate({opacity: '1', top: '0%'}, animate);
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content4 .P1').click(function(){
             
			$(".p1").css("color","#1cbbb4");
             
			$(".p3").css("color","white");
			$(".p2").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","inline-block");
			$(".p2").css("display","none");
			$(".p3").css("display","none");
			$(".p4").css("display","none");
			$(".p5").css("display","none");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story1').delay(animatetwo);
             
            $('.story1').animate({opacity: '1', top: '0%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content4 .P2').click(function(){
             
			$(".p2").css("color","#1cbbb4");
             
			$(".p3").css("color","white");
			$(".p1").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","none");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","none");
			$(".p4").css("display","none");
			$(".p5").css("display","none");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story2').delay(animatetwo);
             
            $('.story2').animate({opacity: '1', top: '0%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content4 .P3').click(function(){
             
			$(".p3").css("color","#1cbbb4");
             
			$(".p2").css("color","white");
			$(".p1").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","none");
			$(".p2").css("display","none");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","none");
			$(".p5").css("display","none");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story3').delay(animatetwo);
             
            $('.story3').animate({opacity: '1', top: '0%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content5 .P1').click(function(){
             
			$(".p1").css("color","#1cbbb4");
             
			$(".p3").css("color","white");
			$(".p2").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","inline-block");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","none");
			$(".p4").css("display","none");
			$(".p5").css("display","none");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story1').delay(animatetwo);
             
            $('.story1').animate({opacity: '1', top: '0%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content5 .P2').click(function(){
             
			$(".p3").css("color","#1cbbb4");
             
			$(".p4").css("color","white");
			$(".p2").css("color","white");
			$(".p1").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","none");
			$(".p2").css("display","none");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","none");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story3').delay(animatetwo);
             
            $('.story3').animate({opacity: '1', top: '0%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content5 .P3').click(function(){
             
			$(".p5").css("color","#1cbbb4");
             
			$(".p3").css("color","white");
			$(".p2").css("color","white");
			$(".p1").css("color","white");
			$(".p6").css("color","white");
			$(".p4").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","none");
			$(".p2").css("display","none");
			$(".p3").css("display","none");
			$(".p4").css("display","none");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","inline-block");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story5').delay(animatetwo);
             
            $('.story5').animate({opacity: '1', top: '0%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content6 .P1').click(function(){
             
			$(".p1").css("color","#1cbbb4");
             
			$(".p3").css("color","white");
			$(".p2").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","inline-block");
			$(".p2").css("display","inline-block");
			$(".p3").css("display","none");
			$(".p4").css("display","none");
			$(".p5").css("display","none");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story1').delay(animatetwo);
             
            $('.story1').animate({opacity: '1', top: '0%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content6 .P2').click(function(){
             
			$(".p3").css("color","#1cbbb4");
             
			$(".p1").css("color","white");
			$(".p2").css("color","white");
			$(".p4").css("color","white");
			$(".p5").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","none");
			$(".p2").css("display","none");
			$(".p3").css("display","inline-block");
			$(".p4").css("display","inline-block");
			$(".p5").css("display","none");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story3').delay(animatetwo);
             
            $('.story3').animate({opacity: '1', top: '0%'}, animate);
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story5').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        
         $('#content6 .P3').click(function(){
             
			$(".p5").css("color","#1cbbb4");
             
			$(".p1").css("color","white");
			$(".p2").css("color","white");
			$(".p4").css("color","white");
			$(".p3").css("color","white");
			$(".p6").css("color","white");
			$(".p7").css("color","white");
			$(".p8").css("color","white");
            
			$(".p1").css("display","none");
			$(".p2").css("display","none");
			$(".p3").css("display","none");
			$(".p4").css("display","none");
			$(".p5").css("display","inline-block");
			$(".p6").css("display","none");
			$(".p7").css("display","none");
			$(".p8").css("display","none");
             
            $('.story5').delay(animatetwo);
             
            $('.story5').animate({opacity: '1', top: '0%'}, animate);
            $('.story1').animate({opacity: '0', top: '-100%'}, animate);
            $('.story2').animate({opacity: '0', top: '-100%'}, animate);
            $('.story4').animate({opacity: '0', top: '-100%'}, animate);
            $('.story3').animate({opacity: '0', top: '-100%'}, animate);
            $('.story6').animate({opacity: '0', top: '-100%'}, animate);
            $('.story7').animate({opacity: '0', top: '-100%'}, animate);
            $('.story8').animate({opacity: '0', top: '-100%'}, animate);
             
         });
        
        $('#introlayer').click(function(){
            $(this).css("display","none");
        });
        
    });
    </script>
    <style>
        
        
        
        
    </style>
</head>
<body>
        <div id="introlayer">
            <i class="far fa-times-circle"></i>
            <video id="introvid" width="640" height="349" controls autoplay loop>
                <source src="vid/introvid.mp4" type="video/mp4">
            </video>
        </div>
    <?php include_once("header.php") ?>
    <div id="container">
        <h3 class="animate">Animation <a id="switch"></a> <i class="far fa-play-circle animationplay"></i> <i class="far fa-stop-circle animationstop"></i></h3>
<!--        <h1 class="title"><b class="select">L</b>&nbsp;earnings</h1>-->
        <main>
            <div id="carousel">
                <div id="left" class="control"><i class="fas fa-angle-left"></i></div>
                <div id="right" class="control" name="right" ><i class="fas fa-angle-right"></i></div>
                
                <div id="jumper">
                    <h3 id="jumpsL" class="jumps">
                        <a href="#" id="jump1" class="jump jump1"><b class="select">I</b><b>nteractive media</b></a>
                        <a href="#" id="jump2" class="jump jump2"><b class="select">R</b><b>esearch</b></a>
                        <a href="#" id="jump3" class="jump jump3"><b class="select">D</b><b>evelopment</b></a>
                        <a href="#" id="jump4" class="jump jump4"><b class="select">C</b><b>ommunication</b></a>
                        <a href="#" id="jump5" class="jump jump5"><b class="select">D</b><b>esign</b></a>
                        <a href="#" id="jump6" class="jump jump6"><b class="select">P</b><b>rofessional identity</b></a>
                    </h3>
                    <h3 id="jumpsR" class="jumps">
                        <a href="#" id="jump1" class="jump jump1"><b class="select">I</b><b>nteractive media</b></a>
                        <a href="#" id="jump2" class="jump jump2"><b class="select">R</b><b>esearch</b></a>
                        <a href="#" id="jump3" class="jump jump3"><b class="select">D</b><b>evelopment</b></a>
                        <a href="#" id="jump4" class="jump jump4"><b class="select">C</b><b>ommunication</b></a>
                        <a href="#" id="jump5" class="jump jump5"><b class="select">D</b><b>esign</b></a>
                        <a href="#" id="jump6" class="jump jump6"><b class="select">P</b><b>rofessional identity</b></a>
                    </h3>
                </div>
                
                <div id="content">
                    
                        
        <form action="" method="post">
        <input type="number" id="count" name="count" value="0" placeholder="0" class="form" hidden />
            
            <input type="submit" value="Verzenden" id="submit" class="form" name="submit" onClick="MM_validateForm('name','','R','email','','R','comment','','R');return document.MM_returnValue"/>
        </form>
                    <div id="content1" class="contents">
        <h1 class="title"><b class="select">I</b>nteractive media</h1>
                        <h3 class="topic"><a href="#" class="P0">ALL</a> <a href="#" class="P1">Portfolio</a> <a href="#" class="P2">Lekker Pittig</a> </h3>
                        <h3 class="pages"><a href="#" class="p1">1</a> <a href="#" class="p2">2</a> <a href="#" class="p3">3</a> <a href="#" class="p4">4</a> <a href="#" class="p5">5</a> <a href="#" class="p6">6</a> <a href="#" class="p7">7</a></h3>
                    <div id="story1" class="story firststory story1">
                        <p class="content-text"><b>Portfolio: Storyboard &amp; Design</b><br><br><br>Dit portfolio was een lang proces met veel aanpassingen. Ik begon eerst met inspiratie op te bouwen in Awwwards waar ik keek naar andere portfolio’s en hoe ze waren opgebouwd, bijvoorbeeld de interacties en de technieken die ze gebruiken. Na dat ik klaar was met inspiratie opbouwen ging ik aan de slag met mijn compleet eigen huisstijl en daarna begon ik met mijn eerste design. Mijn eerste design maakte ik op photoshop (Waarom photoshop? Omdat ik via photoshop heb leren webdesignen door mijn stages). In totaal heb ik 4 design changes gemaakt in mijn portfolio inclusief de recente verandering. Een volledige beschrijving van mijn designproces en keuzes is te lezen bij <b><a class="select">D</a>esign</b>.<br>
                            <br>
                            <b class="select">Storyboard</b><br>
                            <br>
                            Na mijn eerste design nam ik een stap terug en ging ik conceptueel werken. Ik wou 100% zeker zijn van mijn design voordat ik begon met het development gedeelte. Ik wou een nieuw design maken en een offline prototype. Ik maakte eerst een nieuw design daarna maakte ik een storyboard waarin alle interacties in zijn beschreven. Waarom een storyboard? Omdat ik erin beschrijven heb wat clickbaar was, wat interactief was, wat voor interactiviteit mijn portfolio in overal zou hebben. Dit heeft mij een beter beeld daarop gegeven. Dit heb ik ook laten zien aan docenten voor feedback. Erik zei dat ik het beste dit kan testen met een prototype in plaats van dat ik veel tijd besteed aan het development en het uit eindelijk niet werkt. En dat heb ik gedaan.
                            <br>
                        <br>
                            <br>
                            <br>
                        <a href="image/Design/storyboard.pdf" class="press" target="_blank">Bekijk volledige storyboard</a></p>
                        <img src="image/work/portfolio_xd.png" id="img2" />
                        <img src="image/work/Design.png"/>
                        <img src="image/work/storyboard.png" />
                    </div>
                    <div id="story2" class="story story2">
                        <p class="content-text"><b>Portfolio: Prototype</b><br><br><br>Voor mijn portfolio kreeg ik als feedback (van Erik) dat een prototype versie moest gaan maken van mijn portfolio. Hij zei dat ik het moest testen en kijken als alles klopt voordat ik ging coderen en dat is wat ik gedaan heb. Dit heb ik gemaakt op adobe XD omdat een prototype building programma is. Het is specifiek hiervoor gemaakt.<br>
                            <br>
                            De Prototype heb ik ge-redesign met mijn nieuwste design en opnieuw getest. Alle testen waren door mij gedaan en niet door anderen. De reden hiervoor is omdat het doel van deze Adobe XD prototype was om 'mij' een inzicht te geven op mijn design en techniek. Ik wou weten als alles wat ik wou hebben zou functioneren en als het realistisch haalbaar voor me was. Volgens mij was dat ook de punt van Erik's feedback. De testen waren positief dus ik maakte een begin met het development gedeelte.<br>
                        <br>
                            <br>
                            <br></p>
                        <img src="image/work/portfolio_xd.png" id="img2" />
                    </div>
                    <div id="story3" class="story story3">
                        <p class="content-text"><b>Portfolio: UI</b><br><br><br>Tijdens het coderen had ik al een structuur gemaakt voor de hele site. Ik wou mijn site opbouwen in PHP en alle pagina's met behulp van 'include' met elkaar linken. Dat vond ik beter dan bij elk pagina te knippen en plakken. Met 'include' zijn alle codes van het bestand dat je include ook van toepassing in het bestand waar je het erin zet. Zo hoef je alleen het originele bestand aan te passen dan is het overal aangepast. Dit heb ik gedaan met de body, header en footer. Zo hield ik over het hele portfolio aan mijn huisstijl kleuren en font. Dit techniek heeft me veel tijd en moeite bespaard. Hierdoor kon ik efficiënt en professioneel te werk gaan. Uitgebreid uitleg over mijn structuur staat in <b><a class="select">D</a>evelopment</b>.<br>
                            <br>
                            <b class="select">Look &amp; Feel</b><br>
                            <br>
                            De kenmerken voor mijn stijl zijn: modern, professioneel, uniek en kalm. Dit waren de belangrijkste punten voor mijn interface.  <br>
                            <br>
                            Modern omdat ik een site wou hebben dat toepasselijk was voor 2020. Niet perse iets nieuw 'nieuw' maar iets midden de trends.<br>
                            <br>
                            Professioneel omdat ik zo wil overkomen. Ik wou dat dit de eerste indruk was van de bezoeker. Overkomen als een 'prof' is voor mij een groot belang. Daarom maakte ik een intro voor mijn portfolio en gebruikte ik geavanceerde technieken om meer uit te blinken. Ik heb professioneel zitten werken aan mijn backend &amp; front-end en als resultaat wil ik juist dat het ook zo overkomt en de bezoeker indruk heeft dat ik iemand ben dat allround kennis heeft in webdesign.<br><br>
                            Uniek omdat ik iets wou maken in mijn eigen stijl. Ik wou niet de stijl na-apen van de sites die ik gebruikte als inspiratie.<br>
                            <br>
                            Kalm omdat ik het niet te druk wou maken. Niet te veel tekst, afbeelding of interacties, zodat de interface duidelijk en zichtbaar is voor de bezoeker.<br>
                        <br>
                            <br>
                            <br>
                        <a href="https://issuu.com/creative_chris/docs/magazine_" class="press" target="_blank">Lees hier mijn magazine</a></p>
                        <img src="image/work/portfolio_xd.png" id="img2" />
                        <img src="image/work/portfolio-intro.png" id="img2" />
                        <img src="image/work/magazine_11.jpg" id="img2" />
                    </div>
                    <div id="story4" class="story story4">
                        <p class="content-text"><b>Portfolio: UX</b><br><br><br>De user experience is een is een belangrijk punt. Ik kreeg feedback van docenten en studenten over hun UX tijdens na dat ze mijn portfolio hebben bezocht. Helaas is mijn site niet zo userfriendly als ik dacht. Ik moet vooral de navigatie rondom de pagina 'my work' aanpassen. Het moet duidelijker en sneller. Hieronder zijn een paar feedbacks die ik nog recent ontvangen heb.<br>
                            <br>
                            <b class="select">Feedback</b><br>
                            <br>
                            <b>Anke Bardie</b>: "Beschrijf je proces. Neem de beoordelaars mee met wat je gedaan hebt en laat ze zien wat je gedaan hebt. Zorgt ervoor dat ze niet heen en weer moeten om jou werk te zien".<br>
                            <br>
                            <b>Sam van der Heijden</b>: "Wat ik globaal zie in je opdrachten is een beetje hetzelfde als vorige keer, maar al wel een heel stuk verder de goede kant op. Probeer minder te beschrijven wat we op het scherm al zien, en meer je keuzes uit te leggen welke je maakt tijdens je research, designs en realisatie".<br>
                            <br>
                            "Uiteindelijk gaat het er om dat je aan moet tonen dat je niet alleen dingen maakt. Maar dat ook bewust doet. Dus leg goed jouw inzichten en keuzes uit bij de projecten op je portfolio".<br>
                            <br>
                            <b>Nick Welman</b>: "zorg voor een site die iedereen veilig kan openen".<br>
                            <br>
                            <b>Jo-An Kamp</b>: "kijk goed naar de learning outcomes wat je precies moet aantonen bij ieder vak of onderdeel"!<br>
                            <br>
                            <b>Bernd-Jan</b>: "Je portfolio is hartstikke mooi, maar heeft wel last van "form over funtion" dingen... zo duren de animaties mij te lang, ik kan niet lekker snel door je portfolio klikken wat negatief bijdraagt aan de gebruikerservaring. Heel mooi hoor, maar niet handig".<br>
                            <br>
                            <b>Rigel | Jacky &amp; Wessel</b>: "My work: navigatie niet volledig duidelijk. Je ziet een rondje maar je weet niet of je daarop moet klikken".
                            <br>
                        <br>
                            <br>
                            <br></p>
                        <img src="image/work/portfolio-intro.png" id="img2" />
                    </div>
                    <div id="story5" class="story story5">
                        <p class="content-text"><b>Portfolio: Aanpassingen UI/UX</b><br><br><br>Alle feedback die ik gekregen heb, heb ik bijeengebracht en over een gepaste oplossing ervoor nagedacht. Om alle feedback goed te verwerken en een goede oplossing ervoor te vinden moest ik even daarop stil staan en kijken wat mijn mogelijkheden waren. UI gerelateerde feedback zoals bijvoorbeeld de navigatie op 'my work' wil ik oplossen, maar ik wil niet in dezelfde fouten maken als de vorige keer om veel te veel tijd te besteden aan de development. Ik had twee vragen voor mezelf: "Hoe los je dit snel op? Hoe ga je dit aanpassen zonder dat je veel tijd aanbesteed maar wel binnen de verwachtingen blijft van de user?".  <br>
                            <br>
                            <b class="select">Oplossingen</b><br>
                            <br>
                            <b>Anke Bardie</b>: "Beschrijf je proces. Neem de beoordelaars mee met wat je gedaan hebt en laat ze zien wat je gedaan hebt. Zorgt ervoor dat ze niet heen en weer moeten om jou werk te zien". <br>
                            <br>
                            <a class="select">Hier ben ik al bezig mee. Elk project heeft nu een uitgebreide beschrijving met feedback erin verwerkt. Met natuurlijk het volledige proces van begin tot eind.</a><br>
                            <br>
                            <b>Sam van der Heijden</b>: "Wat ik globaal zie in je opdrachten is een beetje hetzelfde als vorige keer, maar al wel een heel stuk verder de goede kant op. Probeer minder te beschrijven wat we op het scherm al zien, en meer je keuzes uit te leggen welke je maakt tijdens je research, designs en realisatie".<br>
                            <br>
                            <a class="select">Ik neem de lezer mee in mijn proces. Ik vermeld nu wat ik gedaan heb, hoe ik begonnen ben en waar ik heen wil gaan.</a><br>
                            <br>
                            "Uiteindelijk gaat het er om dat je aan moet tonen dat je niet alleen dingen maakt. Maar dat ook bewust doet. Dus leg goed jouw inzichten en keuzes uit bij de projecten op je portfolio". <br>
                            <br>
                            <a class="select">Al mijn bewuste keuzes en stappen heb ik nu beschreven met mijn eigen reden van waarom ik die stap ondernomen heb.</a><br>
                            <br>
                            <b>Nick Welman</b>: "zorg voor een site die iedereen veilig kan openen".<br>
                            <br>
                            <a class="select">Dit heb ik onlangs opgelost met een ssl certificaat. Mijn verbinding is nu HTTPS, dus het is nu veilig voor elk bezoeker.</a><br>
                            <br>
                            <b>Jo-An Kamp</b>: "kijk goed naar de learning outcomes wat je precies moet aantonen bij ieder vak of onderdeel"! <br>
                            <br>
                            <a class="select">Ik heb de semestergids altijd open staat hiervoor. Ik zit altijd te kijken of ik mijn leeruitkomsten aan toon en ik vraag elke week feedback aan mijn semester coach en Sam hiervoor.</a><br>
                            <br>
                            <b>Bernd-Jan</b>: "Je portfolio is hartstikke mooi, maar heeft wel last van "form over funtion" dingen... zo duren de animaties mij te lang, ik kan niet lekker snel door je portfolio klikken wat negatief bijdraagt aan de gebruikerservaring. Heel mooi hoor, maar niet handig". <br>
                            <br>
                            <a class="select">Ik zal een optie maken dat voor zorgt dat je direct komt waar je wilt zijn. Dit kan ik snel oplossen zonder veel tijd te besteden aan de development.</a><br>
                            <br>
                            <b>Rigel | Jacky &amp; Wessel</b>: "My work: navigatie niet volledig duidelijk. Je ziet een rondje maar je weet niet of je daarop moet klikken".<br>
                            <br>
                            <a class="select">Ik zal het duidelijker maken door de pijlen zichtbaar te maken. Zodat het duidelijker is dat als je daarop klikt naar de volgende "pagina" gaat.</a>
                            <br>
                        <br>
                            <br>
                            <br>
                        
                            <br>
                            <br>
                            <br></p>
                        <img src="image/work/portfolio-intro.png" id="img3" />
                        <img src="image/work/portfolio-jumper.png" id="img3" />
                        <img src="image/work/portfolio-pages-projects.png" id="img3" />
                        <img src="image/work/portfolio-arrows.png" id="img3" />
                        <img src="image/work/portfolio-https.png" id="img3" />
                    </div>
                    <div id="story6" class="story story6">
                        <p class="content-text"><b>Lekker Pittig: Redesign &amp; Reuse</b><br><br><br>Lekker Pittig was een oude webdesign opdracht van school. Dit is namelijk een nep merk die online via hun site verschillende eet gerechten delen. Deze zelfde opdracht heb ik hergebruikt als onze nepklant (soort van een persona) voor onze product. Ik heb dit nep merk getransformeerd naar een restaurant.<br>
                            <br>
                            <b class="select">Hergebruik</b><br>
                            <br>
                            Omdat het een eet thema had dacht ik van om het een restaurant te maken zodat wij het als klant konden gebruiken. Dat vond de rest van mijn team goed.<br>
                            <br>
                            <b class="select">Design proces</b><br>
                            <br>
                            Mijn eerste design was ouderwets en niet mooi. Ik vond zelf dat ik iets nieuw en mooier moest maken. Het eerste design was volledig gemaakt in Adobe Illustrator. Ik koost voor Illustrator omdat ik het fijner vond om te designen door de artboards en layers.
                            
                            Het eerste design heb ik gebruikt als base voor de tweede design. Dus ik heb de tweede design ook gemaakt in Illustrator. Ik had het daar compleet ge-redesign met ook responsive modellen. Zoals het eerste design is deze design ook met 100% width cover volledig over de interface en heeft die ook dezelfde logo.<br>
                            <br>
                            <b class="select">Inspiratie</b><br>
                            <br>
                            Mijn bron van inspiratie op het nieuwe design was van sites met de dezelfde thema die ik vond op Awwwards. Er is geen specifieke site die ik volledig gebruikt hebt. Ik had veel verschillende gezocht en gezien en hun elementen gepakt en toegepast in mijn stijl.<br>
                            <br>
                            <b class="select">Prototypes</b><br>
                            <br>
                            Van het nieuwe design heb ik een volledig responsive website gemaakt met html, css &amp; JS en een klanten app op Adobe XD.<br>
                            <br>
                            <b class="select">Feedback</b><br>
                            <br>
                            De enige feedback die ik kreeg was van mijn teamgenoten die het mooi vonden. Ik heb hier geen docent naar laten kijken of feedback opgevraagd omdat, dit een nepklant is die voldeed aan onze criteria als klant en doelgroep. Het was geen 'must have' of iets dat we als deliverable konden inleveren voor onze product omdat het niet binnen de verwachting was van de opdrachtgever. Dit was iets intern en alleen maar voor ons zodat we onze product prototype konden presenteren in de huisstijl van de 'klant'.
                            <br>
                        <br>
                            <br>
                            <br>
                            
                            <br>
                            <br>
                            <br></p>
                        <img src="image/work/lekker-pittig.png" id="img3" />
                        <img src="image/work/lekker-pittig-oud.png" id="img3" />
                        <img src="image/work/lekker-pittig-nieuw.png" id="img3" />
                    </div>
                    <div id="story7" class="story story7">
                        <p class="content-text"><b>Lekker Pittig: Klanten app</b><br><br><br>Dit is een prototype van de klanten app voor ons project waar de klanten op kunnen bestellen. Deze app heeft hetzelfde design als het fictief Lekker Pittig die wij nu als 'fakeclient' gebruiken voor ons project. Met deze app moet je kunnen bestellen, je bestelling bekijken en het totaalbedrag zien. Als extra kan er ook een betaal methode/functie op de app komen.<br>
                            <br>
                            <b class="select">Project gepauzeerd</b><br>
                            <br>
                            We hebben als team gekozen om deze prototype aan de kant te zetten en meer te focussen op de bril zelf. Hierdoor is de app niet volledig uitgewerkt. <br>
                            <br>
                            Dit was wel als deliverable ingeleverd voor sprint 1. Hierna is focus volledig over gegaan naar de bril, branding en marketing.
                            <br>
                        <br>
                            <br>
                            <br>
                            
                            <br>
                            <br>
                            <br>
                            <video controls width="300" height="175">
                                <source src="vid/smart-vision.mp4" type="video/mp4">
                            </video></p>
                        <img src="image/work/lekker-pittig-klant.png" id="img3" />
                        <img src="image/work/lekker-pittig-klant-menu.png" id="img3" />
                        <img src="image/work/lekker-pittig-klant-drink.png" id="img3" />
                        <img src="image/work/lekker-pittig-klant-bestelling.png" id="img3" />
                    </div>
                    </div>
                    
                    <div id="content2" class="contents">
        <h1 class="title"><b class="select">R</b>esearch</h1>
                        <h3 class="topic"><a href="#" class="P0">ALL</a> <a href="#" class="P1">Branding</a> <a href="#" class="P2">Marketing</a> </h3>
                        <h3 class="pages"><a href="#" class="p1">1</a> <a href="#" class="p2">2</a></h3>
                        <div id="story1" class="story firststory story1">
                        <p class="content-text"><b>Branding: Goose Island Beer</b><br><br><br>Voor de specialisatie branding voor deze semester heb ik gekozen voor Goose Island Beer een Amerikaanse bierbrouwerij. In het begin van deze research deed ik precies hetzelfde wat ik had gedaan had met Scotch &amp; Soda mijn vorige branding research, maar dat was niet goed genoeg vond ik. Ik vroeg Anke om feedback en ze gaf me waardevolle tips en zeker een goede feedback waar ik mee verder kon. Ze zei dat ik niet alleen moet kijken naar wat het bedrijf over zichzelf zegt, maar dat ik moet kijken naar wat de klanten zeggen over het bedrijf zodat ik een beter beeld creëer. Ik keek naar recensies van klanten, evenementen die ze hielden en hun socialmedia. Dankzij mijn onderzoek weet ik nu dat het bedrijf niet alleen bezig is met bier maar dat ze ook veel goede acties ondernemen in hun gemeenschap. <br>
                        <br>
                            Na dat ik Anke's feedback verwerkt had vroeg ik Evert om feedback. Hij zei dat het mooi was maar dat ik de Brand Identity Prism visueel in mijn verslag zetten en een persona moet toevoegen. Ik wist niet precies wat hij bedoelde met zijn feedback dus ik kijk er samen naar met Anke. Zij begreep de feedback ook niet volledig dus ik heb de research voor de deadline ingeleverd met een bericht erbij van als ik iets mis dat hij mij kon contacteren. Uit eindelijk heeft die dat niet gedaan en was mijn research goedgekeurd.<br>
                            <br>
                            <b class="select">Feedback</b><br>
                            <br>
                            <b>Anke Bardie:</b><br>
                            1. "Zoek meer over het merk op verschillende bronnen. Kijk wat andere mensen zeggen over het merk. Kritisch kijken naar de onderzoekmethoden. Meer analyseren. Waar blijkt het uit wat zij zeggen?"<br>
                            <br>
                            2. "Dit ziet er beter uit dan wat je de vorige keer had. Vraag Evert nog voor feedback voordat je het gaat inleveren."<br>
                            <br>
                            3. "vraag Evert wat die precies bedoelt met zijn feedback. Bedoel hij met persona in als het bedrijf als een persoon?<br>
                            <br>
                            <b>Evert Grift:</b><br>
                            1. "Ik zie dat je de Brand Identity Prism gebruikt hebt maar verwerk deze ook nog even visueel in je verslag. Dus zet een ingevuld prism in je verslag. Daarnaast kan je nog een persona toevoegen.”<br>
                            <br>
                            <b class="select">Research methode:</b><br>
                            <br><b>
                            &#8226; Library
                            <br></b>
                            <br>
                            <br>
                            <br>
                        <a href="image/Research/Goose_Island_Beer.pdf" class="press" target="_blank">Bekijk research</a></p>
                        <img src="image/work/branding-cover.png" id="img1" />
                        <img src="image/work/branding-intro.png" id="img1" />
                        <img src="image/work/branding-BIP1.png" id="img1" />
                        <img src="image/work/branding-BIP2.png" id="img1" />
                        <img src="image/work/branding-BIP3.png" id="img1" />
                    </div>
                        <div id="story2" class="story story2">
                        <p class="content-text"><b>Smart Vision: Marketing Strategie</b><br><br><br>Ons bedrijf heeft klanten nodig. Maar hoe bereiken we ze? Ik maakte posters en concept foto's voor waar en hoe we onze advertenties zouden plaatsen (bijvoorbeeld in bushokjes en op socialmedia), maar we kregen feedback erop met de vraag "waarom zou je daar adverteren/ophangen?". We moesten onze marketing acties onderbouwen en een reden hebben voor elke stap die we ondernemen. We moesten formuleren de reden achter waarom we socialmedia of posters zouden gebruiken en of als het effectief zou zijn voor onze doelgroep.<br>
                        <br>
                            <b>Het verslag</b><br>
                            <br>
                            In het verslag heb ik volledig beschreven wat wij willen doen en als het effectief zou zijn. Ik heb eerst gezocht naar het grootste horecastad van Nederland, omdat wij als beginnend bedrijf moeten adverteren en business doen waar onze doelgroep het meest voorkomt. Zo vergroten we de kans dat wij ons product verkopen. Ook heb kik onderzoek gedaan naar als posters nog een effectieve wijze is om te adverteren. Het bleek naar uit dat het nog gebruikt wordt en nog inderdaad effectief is. Het volledige verslag is te lezen aan de link onderaan 'bekijk research'. Alle sources waren legitieme bronnen en ik heb ze allemaal vermeld. Het verslag is gedaan volgens Apa richtlijnen.<br>
                            <br>
                            <a class="select">Research methode:</a><br>
                            <br><b>
                            &#8226; Library
                            <br></b>
                            <br>
                            <br>
                            <br>
                        <a href="image/Research/Marketing%20strategie.pdf" class="press" target="_blank">Bekijk research</a></p>
                        <img src="image/work/marketing-1.png" id="img1" />
                        <img src="image/work/marketing-2.png" id="img1" />
                    </div>
                    </div>
                    
                    <div id="content3" class="contents">
        <h1 class="title"><b class="select">D</b>evelopment</h1>
                        <h3 class="topic"><a href="#" class="P0">ALL</a> <a href="#" class="P1">POC</a> <a href="#" class="P2">Lekker Pittig</a> <a href="#" class="P3">Portfolio</a>  <a href="#" class="P4">Advanced development</a> </h3>
                        <h3 class="pages"><a href="#" class="p1">1</a> <a href="#" class="p2">2</a> <a href="#" class="p3">3</a> <a href="#" class="p4">4</a> <a href="#" class="p5">5</a> <a href="#" class="p6">6</a> <a href="#" class="p7">7</a></h3>
                        <div id="story1" class="story firststory story1">
                        <p class="content-text"><b>POC: steen, papier, schaar</b><br><br><br>Voor mijn POC heb ik het spel steen, papier, schaar na gemaakt. Ik wou dat het leuker uitzag dus heb ik handen toegevoegd en dezelfde interactie als een echt steen, papier, schaar spel voor een meer realistische effect. De handen gaan 3 keer op en neer en dan pas doen ze hun zet net zoals het ook zou gaan in het echt.<br>
                        <br>
                            <b class="select">Zo werkt het spel</b><br>
                            <br>
                            Het spel werkt zo: Je speelt tegen een computer. Als je op de pagina komt moet je je zet schrijven (steen, papier of schaar) die je wilt zetten. De computer zal zelf een zet zetten die willekeurig gekozen wordt. Jij bent rood en de computer is grijs. Bij verlies, win of gelijk spel komt er een pop up met tekst daarna wordt het spel weer gereset.<br><br>
                            <b class="select">Zo functioneert het</b><br>
                            <br>
                            Dit is gemaakt met behulp van javascript. De 'computer' die je tegen speelt kiest een random getal tussen 0 en 1. 0 tot 1 heb ik in 3 verdeelt (3 zetten). Alle cijfers van 0 tot 0.33 is een zet, 0.34 tot 0.66 is een zet en de rest (0.67 en hoger) is de laatste zet. Na dat je je zet speelt kiest de computer een random getal en als dat getal binnen die 'zet' is dan doet het die 'zet'. Het spel is complete random. Als je achterelkaar wint of verliest is het compleet toeval. De volledige codes is te zien in mijn Git. Klik de link onderaan.
                            <br>
                            <br>
                            <a class="select">Code taal:</a><br>
                            <br><b>
                            &#8226; HTML<br>
                            &#8226; CSS<br>
                            &#8226; Javascript<br>
                            </b>
                            <br>
                            <br>

                        <a href="https://git.fhict.nl/I432862/POC_steen-papier-schaar" class="press" target="_blank">Bekijk Gitlab</a></p>
                        <img src="image/work/steen-papier-schaar.png" id="img1" />
                        <img src="image/work/poc-keuze.png" id="img1" />
                        <img src="image/work/poc-win.png" id="img1" />
                        <img src="image/work/poc-player.png" id="img1" />
                        <img src="image/work/poc-pc.png" id="img1" />
                    </div>
                    <div id="story2" class="story story2">
                        <p class="content-text"><b>Lekker pittig: Website</b><br><br><br>De website heb ik gemaakt na dat ik volledig klaar en zeker was over het design. Eerst heb ik het front-end opgebouwd. Dat is alle pagina's en de huisstijl. Tijdens de backend coderen heb ik de site vloeiend responsive gemaakt tot en met mobiel formaat en ook een rate me toegevoegd om het realistisch te maken.<br>
                        <br>
                            <br><b class="select">Responsive</b><br>
                            <br>
                            De responsive effect heb ik gedaan met behulp van css en javascript. Met css "@mediascreen" functie kon ik bij elke scherm formaat de juiste aanpassingen doen. Met javascript (JQuery) heb ik interacties erbij toegevoegd. Eerst had ik gekeken naar de meest gebruikte schermformaten voor pc, tablet en mobiel. Daarna heb ik steeds aanpassingen gedaan (pixel formaat bij pixel formaat) zodat de website goed past in elk formaat, belangrijke aanpassingen zoals de navigatie, header en de div container grootte. Ook waren er kleine aanpassingen zoals de font-size en de achtergrond afbeelding die steeds verandert bij verschillende formaten.
                            <br>
                            <br>
                            <a class="select">Code taal:</a><br>
                            <br><b>
                            &#8226; HTML<br>
                            &#8226; CSS<br>
                            &#8226; Javascript<br>
                            </b>
                            <br>
                            <br>
                        <a href="https://git.fhict.nl/I432862/lekker_pittig" class="press" target="_blank">Bekijk Gitlab</a></p>
                        <img src="image/work/lekker-pittig.png" id="img1" />
                        <img src="image/work/lekker-pittig-rateme.png" id="img1" />
                        <img src="image/work/lekker-pittig-content.png" id="img1" />
                    </div>
                    <div id="story3" class="story story3">
                        <p class="content-text"><b>Portfolio: Structuur Frontend &amp; Backend</b><br><br><br>Tijdens de conceptfase wist ik al hoe ik mijn portfolio wou opbouwen. Ik wou zeker hebben dat alle pagina's met elkaar linkte en dat het continu mijn huisstijl had. Ik besloot om alle pagina's met PHP te linken.<br>
                        <br>
                            <b class="select">Waarom PHP?</b><br>
                            <br>
                            Alles wat te maken had met het front-end zoals de style css(de hoofd css), header en footer heb ik met PHP include toegevoegd in de 'body.php'. De body.php heb ik dan geinclude in alle andere pagina's zodat ze standard mijn font, kleuren, de header/footer en jQuery, in andere worden mijn huisstijl hebben. Dit was een efficiënter manier om te werken omdat dit mijn werk versneld heeft. Hierdoor hoefde ik niet te knippen en plakken bij elke pagina. Ik hoef nu alleen de 'body.php' bestand aan te passen en dan is dat overal toegepast.<br>
                            <br>
                            <b class="select">CSS</b><br>
                            <br>
                            Elke pagina heeft zijn individuele css. Dit heb ik gedaan omdat het fijner werken is dan alle codes voor zoveel pagina's op 1 css bestand te hebben. Doordat ze hun eigen css hebben kon ik meer gestructureerd werken. Dit was een keuze uit mijn eigen, maar ik ben van bewust dat in de professionele wereld, developers ook werken met verschillende css bestanden. <br>
                            <br>
                            <b class="select">JS/JQ</b><br>
                            <br>
                            De library Jquery en mijn interactive geanimeerde logo is via 'body.php' gelinkt aan elke pagina. Elke pagina heeft zijn eigen interacties en javascript. Voor interacties heb ik geen "hoofd" javascript bestand zoals style.css. Wel heb ik een 'error.js' een error javascript bestand als er iets misgaat. Helaas is dit bestand niet klaar en niet functioneel.
                            <br>
                            <br>
                            <a class="select">Code taal:</a><br>
                            <br><b>
                            &#8226; HTML<br>
                            &#8226; CSS<br>
                            &#8226; Javascript<br>
                            &#8226; PHP<br>
                            </b>
                            <br>
                            <br>
                        <a href="https://git.fhict.nl/I432862/portfolio" class="press" target="_blank">Bekijk Gitlab</a></p>
                        <img src="image/work/magazine_18.jpg" id="img1" />
                    </div>
                    <div id="story4" class="story story4">
                        <p class="content-text"><b>Portfolio: Offline test fase localhost</b><br><br><br>Omdat ik met php werk heb ik een localhost nodig om mijn site te bekijken. PHP is een serverside language dus je hebt een server nodig local of online om het te kunnen bekijken. Ik werk met xampp een van de beste localhost. Het heeft ook een myphpadmin database die ik nu niet nodig heb, maar wel handig is.<br>
                        <br>
                            Als ik aan mijn portfolio werk en het aanpast doe ik dat offline via de localhost. De localhost functioneert precies hetzelfde als een onlinesite. Hoe mijn site uitziet offline is ook hoe die er uit zal zien als ik het online zet. Normaal zijn de minpunten van offline werken dat je codes anders uit gaan zien als je ze online zet, maar omdat ik in een localhost werk is dat voor mij gelukkig niet zo.
                            <br>
                            <br>
                            <a class="select">Code taal:</a><br>
                            <br><b>
                            &#8226; HTML<br>
                            &#8226; CSS<br>
                            &#8226; Javascript<br>
                            &#8226; PHP<br>
                            </b>
                            <br>
                            <br>
                        <a href="https://git.fhict.nl/I432862/portfolio" class="press" target="_blank">Bekijk Gitlab</a></p>
                        <img src="image/work/localhost.png" id="img1" />
                    </div>
                    <div id="story5" class="story story5">
                        <p class="content-text"><b>Portfolio: Updates</b><br><br><br>Alle aanpassingen die ik gedaan heb op mijn portfolio sinds het begin van dit semester was volgens alle feedback die ik gekregen had.<br>
                        <br>
                            <b class="select">Aanpassingen</b><br>
                            <br>
                            <b>Jumper</b><br>
                            De 'jumper' de functie om van pagina naar pagina te springen. Je kan dan van beginpagina naar de laatste pagina in 1 klik. Dit heb ik toegevoegd omdat ik de feedback gekregen had dat door alle pagina's bladeren met de pijlen niet fijn was. Dus dit was mijn oplossing hiervoor. Hiermee kunnen ze steeds van pagina naar pagina. De stijl hoe ik dit toegepast hebt, heb ik zelfbedacht. Ik vond het leuk om zo'n interactie toe te voegen. Dit was gemaakt met javascript. Het was zeer moeilijk en kostte veel tijd. Dezelfde tel functie die ik had toegepast in de carousel om steeds op/af te tellen als je van pagina verandert heb ik ook hier gebruikt. De interactie werkt ook precies mee als je de pijlen gebruikt om van pagina te veranderen.<br>
                            <br>
                            <b>Divided projects</b><br>
                            Als feedback had ik gekregen dat het niet volledig duidelijk was welke pagina voor welk project was. Bijvoorbeeld development heeft 6 pagina's maar het was onduidelijk welke project elk pagina had. Dit heb ik opgelost met de 'devider' functie. Als je op een project klikt zie je alleen pagina's die te maken hebben met dat project. Dit functie staat standard natuurlijk op 'ALL'. Dit heb ik gedaan met javascript en css. Door behulp van gecombineerde codes was dit mogelijk.<br>
                            <br>
                            <b>Content</b><br>
                            In plaats van een page scroll (wat mijn eerste idee was) heb ik elk project zijn eigen pagina gegeven. Dit was uit mijn eigen keuze. Ik vond dit fijner.<br>
                            <br>
                            <b>Animatie aan/uit</b><br>
                            Dit optie heb ik toegevoegd na een feedback van Bernd-Jan. Met deze optie zet je alle JQuery interacties snelheid op 0 seconde, dus dan gaat alles 'direct' zonder vertraging.<br>
                            <br>
                            <a class="select">Code taal:</a><br>
                            <br><b>
                            &#8226; HTML<br>
                            &#8226; CSS<br>
                            &#8226; Javascript<br>
                            &#8226; PHP<br>
                            </b>
                            <br>
                            <br>
                        <a href="https://git.fhict.nl/I432862/portfolio" class="press" target="_blank">Bekijk Gitlab</a></p>
                        <img src="image/work/content-pages.png" id="img1" />
                        <img src="image/work/jumper.png" id="img1" />
                        <img src="image/work/animatie.png" id="img1" />
                    </div>
                    <div id="story6" class="story story6">
                        <p class="content-text"><b>Portfolio: User friendliness</b><br><br><br>Alle aanpassingen die ik gedaan heb, heb ik ook op gebruiksvriendelijkheid getest. Het navigeren door mijn site moet simpel en duidelijk zijn. De 'bezoeker' moet kunnen weten wat elk knop voor staat.<br>
                        <br>
                            <b class="select">UX test</b><br>
                            <br>
                            Van alle UX testen die ik gedaan heb met docenten en mede studenten waren hun "experience" grotendeels positief. Het enige wat negatief was, was de navigatie die ik nu onlangs aangepast heb. Anke, Frank en mijn review groep Rigel hadden geen feedback meer voor me. Hun user experience was daadwerkelijk zo' positief.<br>
                            <br>
                            <b class="select">Browser</b><br>
                            <br>
                            Mijn site is zichtbaar en goed te gebruiken bij elk browser. Ik heb goed opgelet tijdens het coderen op functies die ook zouden werken op andere browsers.<br>
                            <br>
                            <b class="select">Responsive</b><br>
                            <br>
                            Mijn portfolio is helaas niet volledig responsive. Het kan tot tabletformaat daarna is het niet functioneel. De reden waarom mijn site niet volledig responsive is, is omdat het geen prioriteit was. Het was niet voor belang dat mijn site op een mobiel formaat past. Wel heb ik designs klaar voor elk responsive formaat.<br>
                            <br>
                            <b class="select">SSL certificaat / HTTPS</b><br>
                            <br>
                            Een groot onderdeel van gebruiksvriendelijkheid is dat mensen ook veilig op jouw site kunnen. Ik had problemen met mijn ssl dus bij sommigen was mijn site vermeld als een 'onveilig verbinding'. Dit heb ik gelukkig kunnen oplossen met een ssl certificaat die mijn verbinden van http naar https kan veranderen zodat het gezien wordt als een betrouwbare site. Ik probeerde eerst zelf een ssl key en certificaat te maken door mijn eigen gegevens in te vullen. Na vaak proberen was dit helaas niet gelukt. Ik heb een van de admins van mijn webserver gecontacteerd en hij heeft me verder geholpen en ik heb een ssl via hen gekocht voor een kleine prijs.
                            <br>
                            <br>
                            <a class="select">Code taal:</a><br>
                            <br><b>
                            &#8226; HTML<br>
                            &#8226; CSS<br>
                            &#8226; Javascript<br>
                            &#8226; PHP<br>
                            </b>
                            <br>
                            <br>
                        <a href="https://git.fhict.nl/I432862/portfolio" class="press" target="_blank">Bekijk Gitlab</a></p>
                        <img src="image/work/secure.png" id="img1" />
                        <img src="image/work/https.png" id="img1" />
                        <img src="image/work/magazine_24.jpg" id="img1" />
                    </div>
                    <div id="story7" class="story story7">
                        <p class="content-text"><b>Advanced Development: Font library</b><br><br><br>Voor advanced development heb ik een font library gemaakt met mijn eigen fonts. Mijn inspiratie hiervoor was Google Fonts. Ik wou zoiets hebben maar mijn  eigen variant.<br>
                        <br>
                            <b class="select">Functies</b><br>
                            <br>
                            Onder aan de pagina heb je een tekst balk. Als je in die tekst balk schrijft wordt je zin in 'realtime' bij elke font geschreven. <br>
                            <br>
                            <b class="select">Feedback</b><br>
                            <br>
                            Erik zei dat mijn code regels te lang waren en ik het korter kon maken door de codes te groeperen door een array te maken in javascript. Dit heb ik geprobeerd met mijn eigen code (en zijn hulp) maar de code wou niet werken. <br>
                            <br>
                            <b class="select">Status</b><br>
                            <br>
                            Na dat ik een verbetering van mijn codes heb laten zien vond Erik het goed en heb ik de specialisatie behaald. Ondanks dat de code niet werkte vond hij het goed uitzien.<br>
                            <br>
                            <a class="select">Code taal:</a><br>
                            <br><b>
                            &#8226; HTML<br>
                            &#8226; CSS<br>
                            &#8226; Javascript<br>
                            </b>
                            <br>
                            <br>
                        <a href="https://git.fhict.nl/I432862/creative-chris-fonts" class="press" target="_blank">Bekijk Gitlab</a></p>
                        <img src="image/work/logo-s.png" id="img1" />
                    </div>
                    </div>
                    
                    <div id="content4" class="contents">
        <h1 class="title"><b class="select">C</b>ommunication</h1>
                        <h3 class="topic"><a href="#" class="P0">ALL</a> <a href="#" class="P1">Persoonlijk</a> <a href="#" class="P2">Groep</a> <a href="#" class="P3">Opdrachtgever</a> </h3>
                        <h3 class="pages"><a href="#" class="p1">1</a> <a href="#" class="p2">2</a> <a href="#" class="p3">3</a></h3>
                        <div id="story1" class="story firststory story1">
                        <p class="content-text"><b>Feedpuls</b><br><br><br>Ik hou mijn feedpuls wekelijks bij. Ik heb tot nu toe op alle checkpoints geschreven op 1 na. In mijn feedpuls beschrijf ik altijd wat ik ga doen, van wie ik feedback heb gekregen en wat de feedback was en hoe ik de feedback ga toepassen. <br>
                        <br>
                            <b class="select">Feedback</b><br>
                            Al mijn persoonlijke feedback verwerk ik altijd in mijn eigen persoonlijke feedpuls. Groep gerelateerde feedback beschrijf ik af en toe maar het liefst hou ik me bij mijn eigen feedback. Ik sta stil bij elk feedback dat ik krijg. Ik denk na voor een oplossing en een antwoord, bijvoorbeeld de drie feedback die ik gekregen had bij mijn eerste review. Ik had gelijk nagedacht over hoe ik elk feedback kan oplossen. Ik heb de feedback plus mijn antwoord over hoe ik het ga oplossen geschreven in Checkpoint 6 van mijn feedpuls.<br>
                            <br>
                            Elk feedback dat ik krijg schreef ik op in een word bestand. Ik hou het steeds bij voor mezelf en kijk daar steeds naar terug als ik die feedback verwerk heb zodat ik niet in herhaling val. Hieronder heb ik paar voorbeelden van feedback die ik onlangs kreeg. 
                            <br>
                            <br>
                            <b>Advanced development</b><br>
                            Erik vond mijn gekozen project interessant en dat een Font library in het bedrijf wereld ook gebruikt wordt. Na dat Erik mijn opdracht na gekeken had zei hij: <br><br>"voordat ik je "advanced dev" op behaald ga zetten wil ik graag iets meer "advanced" code terug zien". <br><br>Hij wilde dat ik mijn lange lijst met codes groepeerde in een array. Ik probeerde zelf een array te maken maar dat was helaas niet gelukt. Ondanks dat het niet gelukt was, was Erik toch wel tevreden dat ik het probeerde. Hij zei: "je geeft hier in elk geval mee aan dat je dit principe begrijpt. waarschijnlijk als je het gaat toepassen loop je nog wel tegen andere problemen aan omdat je variables wel de juiste scope moeten hebben, maar ik vind dit voorbeeld goed genoeg."<br><br>
                            <br>
                            <br>
                            <b>Sprint X</b><br>
                            Ik had in totaal 3 keer met Frank gesproken. Hij vond mijn voortgang goed en hij zag dat ik echt mijn best deed om dit af te ronden. Na onze laatste call schreef Frank dit als laatste feedback:<br><br> "Hoi Christian, Hier nog even wat woorden over je prestaties tijdens sprint X. Je hebt geen makkelijke weg gekozen om aan development te werken en bent uit eigen enthousiastme een webshop gaan opzetten. De betaling functie toevoegen was geen makkelijke klus en de simulator die je ervoor koos werkte aanvankelijk helemaal niet. Wat mij betreft is het jouw prestatie en doorzettingsvermogen die ervoor gezorgd hebben dat je sprint x netjes kan afronden met een simulatie van het betalingssysteem die helemaal werkt in de demo. Mij heb je hiermee weten te overtuigen van je development skills en probleemoplossend vermogen".  
                            <br>
                            <br>
                            <br>
                        <a href="https://www.dropbox.com/sh/l392o1763mume6e/AADRhBNL2qsyk7aEi52yZjiCa?dl=0" class="press" target="_blank">Bekijk al mijn feedpuls checkpoints</a></p>
                        <img src="image/work/feedback.png" id="img1" />
                        <img src="image/work/checkpoint-9.jpg" id="img1" />
                        <img src="image/work/checkpoint-10.jpg" id="img1" />
                        <img src="image/work/checkpoint-11.jpg" id="img1" />
                        <img src="image/work/checkpoint-12.jpg" id="img1" />
                    </div>
                    <div id="story2" class="story story2">
                        <p class="content-text"><b>Groep: Neptunes 1 / Smart Vision</b><br><br><br>Als team communiceren wij vooral op Whatsapp en houden we onze meeting op Discord. Ik ben altijd aanwezig bij elk meeting en fysieke dagen. Toen ik in sprint 1 scrum leader was, zorgde ik voor dat elke teammember een taak had en dat we elke maandag onze groep feedpuls inleverde. <br>
                        <br>
                            <b>Mijn inzet</b><br>
                            Uit mezelf ging ik altijd het team vertellen wat ik mee bezig was. Ik ging af en toe mijn scherm delen of een meeting starten om mijn werk te presenteren en hun feedback daarop te krijgen. Zij waren altijd up-to-date met wat ik mee bezig was. Toen ik bezig was met onze mediaverkenning, vroeg ik steeds als zij het mooi vinden of als er nog iets bij moet, Om hun erbij te betrekken zodat ik iets maak dat wij allemaal mooi vinden.
                            <br>
                            <br>
                            <b>Trello/taken verdeling</b><br>
                            Na de negatieve feedback van pitch sprint 1 hebben wij niet alleen een stap teruggenomen maar ook nieuwe taken gemaakt. Die taken heb ik op Trello geschreven en ze geclassificeerd met de juiste persoon erbij die het gaat uitvoeren. We kregen zo een duidelijker beeld op onze project en wat er nog gedaan moest worden en wie het deed. En we kwamen ook professioneler over.
                            <br>
                            <br>
                            <b>Discord</b><br>
                            We hebben in het begin van de periode gezamenlijk afgesproken dat Discord onze communicatiebron zou zijn voor online calls. Elke stand up die we hielden was altijd gedaan in Discord.
                            <br>
                            <br>
                            <b>Semester coach: Anke Bardie</b><br>
                            Als groep hadden we in het algemeen een positief relatie met onze semester coach. We hadden elke week een gesprek met haar als groep en ook individueel. Er waren wel momenten waar Anke zorgen om ons maakte bijvoorbeeld bij het einde van sprint 1 waar het slecht ging met ons als groep omdat wij geen goede feedback kregen. Maar uiteindelijk is het toch goed gekomen. Tijdens de 2de sprint hadden we een enorme vaart gemaakt aan het project en gingen we de goede kant op.
                            <br>
                            <br>
                            <b>Teamwork</b><br>
                            Ik ben positief over de team work en onze opleveringen. We hadden wat moeite hier en daar maar toch was het goed gekomen. We konden goed met elkaar communiceren en we hadden geen fallout (ruzie of discussie) met elkaar. De werk flow vond ik wat minder maar dat komt door dat we grotendeels thuis werken en dat vonden sommige niet fijn voor hun werkhouding. Het enige probleem die ik had in de groep was Jordy. Ik vond persoonlijk dat hij weinig motivatie had en weinig deed voor de groep en project. Dit argument onderbouw ik met o.a. zijn aanwezigheid, persoonlijke opleveringen en inzet. Verder was het wel een leuk team.
                            <br>
                            <br>
                            <b>Groeps feedpuls</b><br>
                            Al onze groep feedpuls maakte wij altijd gezamenlijk maandag ochtend. We gingen eerst brainstormen wat er gedaan moest worden en wie die taak wou doen. En we beschreven ook de feedback die we gekregen hadden en ons proces. De 'scrumleader' van die sprint is degene die verantwoordelijk is voor het inleveren van de groep feedpuls.
                            <br>
                            <br>
                            <br>
                            <br>
                        <a href="https://www.dropbox.com/sh/z39g8cd50676m6m/AAD-ievmgamew3GTl0JyMFIFa?dl=0" class="press" target="_blank">Bekijk al mijn screenshots</a>
                        </p>
                        <img src="image/work/smart-vision-logo.png" id="img1" />
                        <img src="image/work/discord.jpg" id="img1" />
                        <img src="image/work/whatsapp-071020.jpg" id="img1" />
                        <img src="image/work/trello.jpg" id="img1" />
                    </div>
                    <div id="story3" class="story story3">
                        <p class="content-text"><b>Opdrachtgever: Glamorous Goat</b><br><br><br>In het begin van het semester waren we aanwezig bij de Q&amp;A met Rob. We stelde hem relevante vragen over de opdracht en hoe het geleverd moet worden. Zijn antwoorden hebben we genoteerd<br>
                        <br>
                            Bij onze eerste pitch gaf Rob ons een 'go' als wij gingen focussen in het bestel proces tussen klant en medewerker. Hij vond dat daar het meeste probleem lag en het beste kon opgelost worden door AR, dus dat gingen we ook doen.<br>
                            <br>
                            Omdat onze pitch van sprint 1 niet goed ging moesten weer aan tafel met Rob en met hem ons concept duidelijk bespreken. We maakte een afspraak voor donderdag 29 oktober, het eerste moment hij beschikbaar was. ---Ik was er persoonlijk niet bij door privé redenen---, maar mijn teamgenoten zeiden dat hij deels eens was met de feedback die we kregen bij onze pitch sprint 1 en wij nu moeten focussen op de must have voor de bril.
                            <br>
                            <br>
                            <br>
                            <br>
                        </p>
                        <img src="image/work/glamorous-goat.png" id="img1" />
                        <img src="image/work/mail-rob-gg1.jpg" id="img1" />
                    </div>
                    </div>
                    <div id="content5" class="contents">
        <h1 class="title"><b class="select">D</b>esign</h1>
                        <h3 class="topic"><a href="#" class="P0">ALL</a> <a href="#" class="P1">Portfolio</a> <a href="#" class="P2">Lekker Pittig</a> <a href="#" class="P3">Smart Vision</a></h3>
                        <h3 class="pages"><a href="#" class="p1">1</a> <a href="#" class="p2">2</a> <a href="#" class="p3">3</a> <a href="#" class="p4">4</a> <a href="#" class="p5">5</a> <a href="#" class="p6">6</a></h3>
                        <div id="story1" class="story firststory story1">
                        <p class="content-text"><b>Portfolio: Updates oud &amp; Nieuw</b><br><br><br>Dit portfolio heb ik weer opgepakt van vorige semester, maar er zijn heel veel veranderingen vergeleken met de vorige keer. <br>
                        <br>
                            <b class="select">Content</b><br>
                            <br>
                            De pagina 'my work' was eigenlijk een voorpagina voor om al mijn werk te laten zien. In mijn oude design liet deze pagina alleen de leeruitkomsten zien en als je op het knopje drukt word je doorgelinkt naar de pagina 'work example' waar al mijn werk waren. De meeste waren daar zonder beschrijving. En dat was een van de grootte fouten die ik de vorige keer maakte.<br>
                            <br>
                            Maar nu heb ik alles in dezelfde pagina (my work) verwerkt en de pagina 'work example' laten vallen. Al mijn recente werk is duidelijk te zien pagina voor pagina met duidelijke beschrijving over mijn proces en feedback.
                            <br>
                            <br>
                            <br>
                            <br>
                        <a href="https://issuu.com/creative_chris/docs/magazine_" class="press" target="_blank">Bekijk process</a></p>
                        <img src="image/work/magazine_26.jpg" id="img1" />
                        <img src="image/work/magazine_27.jpg" id="img1" />
                    </div>
                    <div id="story2" class="story story2">
                        <p class="content-text"><b>Portfolio: Responsive design</b><br><br><br>Mijn portfolio komt natuurlijk met een responsive design tot en met mobiel formaat. Ook is er een storyboard waar alle interacties van mijn portfolio in zijn beschreven.<br>
                        <br>
                            Het design voor elk formaat en pagina is al gemaakt, maar de site zelf is vanaf 1024px in breedte functioneel. In dat formaat is de site niet volledig correct functioneel, want ik werk steeds in de pc-formaat. Door hoe ik codeer met JQuery, css animatie en door containers te vullen met % in plaats van px lijkt het alsof het zich vloeiend aanpast aan je breedte.
                            <br>
                            <br>
                            <br>
                            <br>
                        
                        <a href="image/Design/storyboard_design-only.pdf" class="press" target="_blank">Bekijk alle responsive design</a></p>
                        <img src="image/work/responsive-mock-up_my-site.png" id="img1" />
                        <img src="image/work/magazine_17.jpg" id="img1" />
<!--
                        <div id="clip">
                            <div id="background" class="clip"></div>
                            <div id="clip3" class="clip"></div>
                            <div id="clip4" class="clip"></div>
                            <div id="clipa" class="clip"></div>
                            <div id="clip1" class="clip"></div>
                            <div id="clip2" class="clip"></div>
                            <div id="clipb" class="clip"></div>
                        </div>
-->
                    </div>
                    <div id="story3" class="story story3">
                        <p class="content-text"><b>Lekker Pittig: Updates Oud &amp; Nieuw</b><br><br><br>De oude versie was nogal saai. Dit was een oude opdracht maar ik heb het weer opgepakt en ge-redesign om het te gebruiken als onze klant voor ons product. <br>
                        <br>
                            De huisstijl heb ik door inspiratie te zoeken op verschillende sites (waar ik eerder niet mee bekend was). Ik haalde steeds 1 of 2 elementen per site, bijvoorbeeld de achtergrond kleur en de zwevende mes, vork en lepel. Ik wou iets moois maken maar het hoefde van mij niet uniek te zien zoals mijn portfolio. <br>
                            <br>
                            <b class="select">De app</b><br>
                            <br>
                            De app is precies in het design van de site. Er zijn geen designfeatures weg gelaten of extra toegevoegd. Het enige verschil tussen de site en de app is de functionaliteit. Op de app moet je kunnen bestellen en betalen. Deze functies zijn niet van toepassing op de site.
                            <br>
                            <br>
                            <br>
                            <br></p>
                        <img src="image/work/lekker-pittig-2.png" id="img1" />
                        <img src="image/work/lekker-pittig-oud.png" id="img1" />
                        <img src="image/work/lekker-pittig-nieuw.png" id="img1" />
                    </div>
                    <div id="story4" class="story story4">
                        <p class="content-text"><b>Lekker Pittig: Responsive</b><br><br><br>Voor het nieuwe design heb ik ook responsive ontwerpen gemaakt voor elk formaat. Als leuke interactie heb ik gedaan dat de achtergrond verandert bij elk formaat.<br>
                        <br>
                             Tijdens het verkleinen van de site worden alle elementen verkleint en passend op het formaat gezet. Er worden geen Elementen weg gehaald bij kleinere formaten. Dit heb ik bewust gekozen zodat het continu hetzelfde huisstijl aan houdt.
                            <br>
                            <br>
                            <br>
                            <br></p>
                        <img src="image/work/lekker-pittig-nieuw.png" id="img1" />
                    </div>
                    <div id="story5" class="story story5">
                        <p class="content-text"><b>Smart Vision: Logo ontwerp</b><br><br><br>Ons logo heb ik op illustrator gemaakt. Ik maakte verschillende ontwerpen waarvan ik het beste vanuit koos. Die liet ik zien aan mijn teamgenoten en zij gaven feedback erop en ik ging het nog aanpassen. Dit was een kort proces.<br>
                        <br>
                            Het ontwerp achter ons logo is puur uit onze mening en smaak. Het design heeft niet te maken met wat wij doen voor AR of AR brillen.
                            <br>
                            <br>
                            <br>
                            <br></p>
                        <img src="image/work/logo_variant_smart-vision-03.png" id="img1" />
                        <img src="image/work/logo_variant_smart-vision-02.png" id="img1" />
                        <img src="image/work/logo_variant_smart-vision-04.png" id="img1" />
                    </div>
                    <div id="story6" class="story story6">
                        <p class="content-text"><b>Smart Vision: Advertentie</b><br><br><br>Ik heb een poster ontworpen voor ons product. Deze poster zullen wij online en offline gebruiken om ons product te publiceren.<br>
                        <br>
                            Ook heb ik prototype voorbeelden van waar en hoe we de poster gaan gebruiken. Ik heb een voorbeeld voor een bushokje, Tumblr en andere meer.
                            <br>
                            <br>
                            <br>
                            <br>
                        <a href="https://www.dropbox.com/sh/whe8u2z0jwky36q/AAAKbu7vB8Vt6Tr0S48UmmN5a?dl=0" class="press" target="_blank">Bekijk alle posters</a></p>
                        <img src="image/work/smart-vision_bushok-poster.jpg" id="img1" />
                        <img src="image/work/smart-vision_poster.png" id="img1" />
                    </div>
                    </div>
                    <div id="content6" class="contents">
        <h1 class="title"><b class="select">P</b>rofessional Identity</h1>
                        <h3 class="topic"><a href="#" class="P0">ALL</a> <a href="#" class="P1">My brand</a> <a href="#" class="P2">Ontwikkeling</a>  <a href="#" class="P3">Werkhouding</a> </h3>
                        <h3 class="pages"><a href="#" class="p1">1</a> <a href="#" class="p2">2</a> <a href="#" class="p3">3</a> <a href="#" class="p4">4</a> <a href="#" class="p5">5</a></h3>
                        <div id="story1" class="story firststory story1">
                        <p class="content-text"><b>Naam &amp; Logo</b><br><br><br>Mijn logo was een lang proces. Ik wist wel wat ik wou qua stijl maar niet hoe het eruit zou moeten zien. Ik wilde persé een logo hebben die ik kon gebruiken als visitekaart, dat als mensen naar kijken ze dan een positieve indruk krijgen. Het begin en proces heb ik uitgebreid beschreven in mijn portfolio op pagina's 8 en 9.<br>
                        <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        <a href="https://issuu.com/creative_chris/docs/magazine_" class="press" target="_blank">Bekijk magazine</a></p>
                        <img src="image/work/Pc-background1.png" id="img1" />
                        <img src="image/work/magazine_9.jpg" id="img1" />
<!--
                        <div id="clip">
                            <div id="background" class="clip"></div>
                            <div id="clip3" class="clip"></div>
                            <div id="clip4" class="clip"></div>
                            <div id="clipa" class="clip"></div>
                            <div id="clip1" class="clip"></div>
                            <div id="clip2" class="clip"></div>
                            <div id="clipb" class="clip"></div>
                        </div>
-->
                    </div>
                    <div id="story2" class="story story2">
                        <p class="content-text"><b>Huisstijl</b><br><br><br>Ik zie mezelf als een brand. En als een brand heb ik ook mijn eigen huisstijl, kleuren en font die bij me passen. Dit heb ik volledig beschreven met uitleg 'waarom' ik die keuzes gemaakt heb in mijn magazine op pagina's 10 en 11 of bekijk de afbeelding rechts onder.<br>
                        <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        <a href="https://issuu.com/creative_chris/docs/magazine_" class="press" target="_blank">Bekijk magazine</a></p>
                        <img src="image/work/Pc-background2.png" id="img1" />
                        <img src="image/work/magazine_10.jpg" id="img1" />
                    </div>
                    <div id="story3" class="story story3">
                        <p class="content-text"><b>Groei</b><br><br><br>Dit semester verliep hetzelfde als de vorige, dus ik heb niet veel nieuws geleerd. Wel ben ik (door hulp van Anke) beter geworden in het tonen van mijn leeruitkomsten. Ik ben ook nu beter in research. Omdat ik nu steeds de semestergids open heb, ben ik steeds de juiste stappen aan het nemen op de manier hoe die leeruitkomsten beoordeeld wordt. Sam (een van mijn beoordelaars van vorige jaar) gaf mij feedback en zei tegen me dat mijn portfolio een heel stuk verder is in de goede richting.  <br>
                        <br>
                            <b class="select">Eind semester 2</b><br>
                            <br>
                            Mijn groei afgelopen semester was heel positief. Ik zie nu het enorme verschil tussen het einde van het vorige semester 2 en die van nu. Ik ben nu meer open voor feedback en ik luister daadwerkelijk naar de feedback die ik krijg. Dit was niet helemaal van sprake de vorige keer. En deze positieve groei zagen andere docenten ook in mij. Ik vind dat dit semester voor mij persoonlijk heel goed gegaan is. Ik ben blij dat ik de juiste stappen ondernomen heb en beter gewerkt hebt dan vorig jaar. Ik wil zeker niet de zelfde resultaat hebben als de vorige keer.
                            <br>
                            <br>
                            <br>
                            <br>
                        <a href="https://issuu.com/creative_chris/docs/magazine_" class="press" target="_blank">Bekijk magazine</a></p>
                        <img src="image/work/Pc-background3.png" id="img1" />
                    </div>
                    <div id="story4" class="story story4">
                        <p class="content-text"><b>Visie</b><br><br><br>Ik wil zeker veel bereiken als een allround developer. Ik heb heel veel plannen voor mezelf, maar eerst wil ik een hbo-diploma over 'n paar jaar. Daarna wil ik een klein begin maken als zzp’er en misschien half werken bij een bedrijf. <br>
                        <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        <a href="https://issuu.com/creative_chris/docs/magazine_" class="press" target="_blank">Bekijk magazine</a></p>
                        <img src="image/work/Pc-background4.png" id="img1" />
                        <img src="image/work/magazine_13.jpg" id="img1" />
                    </div>
                    <div id="story5" class="story story5">
                        <p class="content-text"><b>Werkwijze</b><br><br><br>Ik probeer altijd mijn proces zo professioneel mogelijk te doen door de juiste stappen te nemen. Door zo te werken leer ik mezelf al te werken als een echte developer. Als ik al nu die mentaliteit heb dan wordt het makkelijker voor mij on in een bedrijf te integreren. Ik wil nu alvast die stappen nemen en voorbereiden.<br>
                        <br>
                            <b class="select">Checklist</b><br>
                            <br>
                            Ik werk met een checklist. Ik zet alles wat erin moet inclusief dingen die ik kreeg als feedback. Ik geef mezelf een deadline daarna check ik ze af als ik ze gedaan heb. Ik vind dit een effectief manier om te werken. Zo hou ik mijn proces in de gaten.
                            <br>
                            <br>
                            <br>
                            <br>
                        </p>
                        <img src="image/work/logo-s.png" id="img1" />
                        <img src="image/work/Screenshot_20201111-165523_Reminder.png" id="img1" />
                    </div>
                    </div>
                </div>
            </div>
        </main>
        
    </div>
	
	<?php include_once("footer.php") ?>
</body>
</html>