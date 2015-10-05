$( document ).ready(function() {
	$( ".lyric" ).hide();
	$( ".title" ).click(function() {
		$( ".lyric" ).slideToggle( "fast" );
	});
	
	$(".title").mouseenter(function(){
		$(this).css('background','#17a8ff')
		$(".title").css('cursor','pointer');
	});

	$(".title").mouseleave(function(){
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