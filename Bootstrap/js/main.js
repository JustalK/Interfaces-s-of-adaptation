$( document ).ready(function() {
	$( ".lyric" ).hide();
	$( ".menu" ).hide();
	$( ".titleMenu" ).click(function() {
		$( ".menu" ).slideToggle( "fast" );
	});
	$( ".title" ).click(function() {
		$( ".lyric" ).slideToggle( "fast" );
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
	
});