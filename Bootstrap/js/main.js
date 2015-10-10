$( document ).ready(function() {
	var sizelyric = $('.lyric').height();
	$( ".lyric" ).hide();
	$( ".menu" ).hide();
	$( ".titleMenu" ).click(function() {
		$( ".menu" ).slideToggle( "fast" );
		$("#menu").height($("#content").height());
	});
	var lyrichide = true;
	$( ".title" ).click(function() {
		$( ".lyric" ).slideToggle( "fast",function(){
				if($("#content").height()>$("body").height()) {
		    		$("#menu").height($("#content").height());	
				} else {
		    		$("#menu").height($("body").height());	
				}		
		});
		lyrichide = !lyrichide;
	});

	$(".menu-toggle").mouseenter(function(){
		$(this).css('cursor','pointer');
	});	
	
	$(".title,.menu,.titleMenu").mouseenter(function(){
		$(this).css('background','#17a8ff')
		$(".title").css('cursor','pointer');
	});

	$(".title,.menu,.titleMenu").mouseleave(function(){
		$(this).css('background','#82d0ff');
	});
	
	$(".movie").on('click',function(){
		$(".movie").each(function(){
			var video = $(this).attr("src");
			$(this).attr("src","");
			$(this).attr("src",video);			
		});
	});
	
	var windowsContent = 100*$(window).width()/100;
	var windowsMenu = 0;	
	$( window ).resize(function() {
		if($("#content").height()>$("body").height()) {
    		$("#menu").height($("#content").height());	
		} else {
    		$("#menu").height($("body").height());	
		}	
		
		if(!isHidden) {
			adaptation();
			
			$("#content").css("width",windowsContent+"px");
			$("#menu").css("width",windowsMenu+"px");
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
				$("#content").show();
			}
		} else if($(window).width()<600) {
			windowsContent = 0*$(window).width()/100;
			if(!isHidden) {
				$("#content").hide();
			}
		}
		windowsMenu = $(window).width()-windowsContent;		
	}
	
	var isHidden = true;
	$("#menu").hide();
    $(".menu-toggle").click(function(e) {
    	if(isHidden) {
    		adaptation();
    		if($(window).width()<600) {
    			$("#content").hide();
    		}
    		$("#content").animate({width: windowsContent+"px"},300,function(){
        		$("#menu").show();
        		if($("#content").height()>$("body").height()) {
            		$("#menu").height($("#content").height());	
        		} else {
            		$("#menu").height($("body").height());	
        		}	
        		$("#menu").animate({width: windowsMenu+"px"},100);
    		});
    		isHidden = false;
    	} else {
    		$("#menu").animate({width: "0%"},100,function(){
    			$("#menu").hide();
        		if($(window).width()<600) {
        			$("#content").show();
        		}
        		$("#content").animate({width: "100%"},300);
    		});
    		isHidden = true;
    	}
    });
});