$( document ).ready(function() {
	
	$( "bloc-information" ).hide();
	var slide=1;
	
	$("my-left").click(function() {
		$("#"+slide).css("right","0px");
		$("#"+slide).animate({right: -$(window).width()+"px"},500);
		slide++;
		nextslide();
		$("#"+slide).css("left","auto");
		$("#"+slide).css("right",$(window).width()+"px");
		$("#"+slide).animate({right: $("my-menu").width()+"px"},350,function() {
			$("#"+slide).css("right","auto");
		
		});
	});
	
	$("my-right").click(function() {
		$("#"+slide).css("left","0px");
		$("#"+slide).animate({left: -$(window).width()+"px"},500);
		slide--;
		nextslide();
		$("#"+slide).css("right","auto");
		$("#"+slide).css("left",$(window).width()+"px");
		$("#"+slide).animate({left: $("my-menu").width()+"px"},350,function() {
			$("#"+slide).css("left","auto");
		});		
	});
	
	function nextslide() {
		if(slide<1) {
			slide=4;
		} 
		if(slide>4) {
			slide=1;
		}
	}
	
	var lyrichide = true;
	$( "my-bar-title" ).click(function() {
		$( "bloc-information" ).slideToggle( "fast",function(){
			$("my-menu").height($("my-container-full").height()+$("bar-top").height());			
		});
		lyrichide = !lyrichide;
	});
	
	$("my-bar-title").mouseenter(function(){
		$(this).css('background','#17a8ff')
		$(".title").css('cursor','pointer');
	});

	$("my-bar-title").mouseleave(function(){
		$(this).css('background','#82d0ff');
	});	
	
    $('.your-class').slick({
  	  arrows: true  
    });

	var windowsContent = 100*$(window).width()/100;
	var windowsMenu = 0;	
	$( window ).resize(function() {
    	$("my-menu").height($("my-container-full").height()+$("bar-top").height());		
		
		if(!isHidden) {
			adaptation();
			
			$("my-content").css("width",windowsContent+"px");
			$("my-menu").css("width",windowsMenu+"px");
		}
	});    
    
	function adaptation() {
		/* Media Queries */
		if($(window).width()>1500) {
			windowsContent = 80*$(window).width()/100;	
		} else if($(window).width()<1500 && $(window).width()>=1200) {
			windowsContent = 80*$(window).width()/100;		
		} else if($(window).width()<1300 && $(window).width()>=850) {
			windowsContent = 82*$(window).width()/100;		
		} else if($(window).width()<850 && $(window).width()>=600) {
			windowsContent = 50*$(window).width()/100;
			if(!isHidden) {
				$("my-content").show();
			}
		} else if($(window).width()<600) {
			windowsContent = 0*$(window).width()/100;
			if(!isHidden) {
				$("my-content").hide();
			}
		}
		windowsMenu = $(window).width()-windowsContent;		
	}    
    
	var isHidden = true;
	$("my-menu").hide();
    $("my-button,.menu-toggle").click(function() {
    	if(isHidden) {
    		adaptation();
    		if($(window).width()<600) {
    			$("my-content").hide();
    		}
    		$("my-content,my-container-full").animate({width: windowsContent+"px"},300,function(){
        		$("my-menu").show();
            	$("my-menu").height($("my-container-full").height()+$("bar-top").height());		
        		$("my-menu").animate({width: windowsMenu+"px"},100);
    		});
    		isHidden = false;
    	} else {
    		$("my-menu").animate({width: "0%"},100,function(){
    			$("my-menu").hide();
        		if($(window).width()<600) {
        			$("my-content").show();
        		}
        		$("my-content,my-container-full").animate({width: "100%"},300);
    		});
    		isHidden = true;
    	}	
    });    
});