/* Show/Hide Post */
$('.post-wrapper').find('a[href="#"]').on('click', function (e) {
	e.preventDefault();
	this.expand = !this.expand;
	$(this).text(this.expand?"[Hide Post]":"[Read More]");
	$(this).closest('.post-wrapper').find('.short-post, .long-post').toggleClass('short-post long-post');
});
