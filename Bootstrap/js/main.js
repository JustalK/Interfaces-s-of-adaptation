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
		$( ".lyric" ).slideToggle( "fast" );
		if(lyrichide) {
			$("#menu").height($('body').height()+sizelyric);
		} else {
			$("#menu").height($('body').height());		
		}
		lyrichide = !lyrichide;
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
	
	var isHidden = false;
	$("#menu").show();
    $(".menu-toggle").click(function(e) {
    	if(isHidden) {
    		$("#content").animate({width: "80%"},300);
    		if(!lyrichide) {
    			$("#menu").height($('body').height()+sizelyric);
    		} else {
    			$("#menu").height($('body').height());		
    		}
    		$("#menu").animate({width: "20%"},300);
    		isHidden = false;
    	} else {
    		$("#menu").animate({width: "0%"},300);
    		$("#content").animate({width: "100%"},300);
    		isHidden = true;
    	}
    });
	
});