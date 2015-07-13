function headerHeight(){
	var height = $(window).height() - 127 
	var padding = (height - 54)/2
	$('.header__title').css('padding', padding + 'px 0');
};
$(window).resize(function(){
  headerHeight();
});
$(function(){
	$(window).trigger('resize');
});
