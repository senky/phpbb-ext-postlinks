$(function() {
	// copies post link to clipboard
	$('.post_links_table input').on('click', function() {
		this.focus();
		this.select();
		document.execCommand('copy');
	});

	// toggles post links table
	$('.post_links_show a, .post_links_hide a').on('click', function(e) {
		e.preventDefault();

		phpbb.toggleDisplay('post_links_table_' + this.dataset.postid);
		phpbb.toggleDisplay('post_links_div_' + this.dataset.postid);
	});
});
