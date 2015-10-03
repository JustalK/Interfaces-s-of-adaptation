$( document ).ready(function() {
	$( ".lyric" ).hide();
	$( ".title" ).click(function() {
		$( ".lyric" ).slideToggle( "fast" );
	});

});