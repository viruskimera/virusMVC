
(function(){
	$('img').on('click', function(){
		$('div#content').load($(this).data('info'));
	});
})();