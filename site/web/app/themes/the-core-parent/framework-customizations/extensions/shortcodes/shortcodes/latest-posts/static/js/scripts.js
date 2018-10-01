jQuery(document).ready(function () {
	jQuery('.fw-js-load-more-posts').on('click', '.fw-btn', function (e) {
		e.preventDefault();
		var this_button    = jQuery(this),
			page           = jQuery(this).parents('.fw-shortcode-latest-posts').attr('data-page'),
			blog_type      = jQuery(this).parents('.fw-shortcode-latest-posts').data('blog-type'),
			posts_per_page = jQuery(this).parents('.fw-shortcode-latest-posts').data('posts-per-page'),
			max_pages      = jQuery(this).parents('.fw-shortcode-latest-posts').data('max-pages'),
			category       = jQuery(this).parents('.fw-shortcode-latest-posts').data('category'),
			blog_view      = jQuery(this).parents('.fw-shortcode-latest-posts').data('blog-view'),
			columns        = jQuery(this).parents('.fw-shortcode-latest-posts').data('columns'),
			extra          = jQuery(this).parents('.fw-shortcode-latest-posts').data('extra');

		var data = "action=the_core_ajax_get_shortcode_posts&max_pages=" + max_pages + '&blog_type=' + blog_type + '&blog_view=' + blog_view + '&columns=' + columns + '&posts_per_page=' + posts_per_page + '&category=' + category + '&page=' + page + '&extra=' + extra;
		jQuery.ajax({
			type: "POST",
			url: FwPhpVars.ajax_url,
			data: data,
			success: function (rsp) {
				//console.log(rsp);
				if ( typeof rsp == 'object' ) {
					var obj = rsp;
				}
				else {
					var obj = jQuery.parseJSON(rsp);
				}

				if ( obj.html != '' ) {
					this_button.parents('.fw-js-load-more-posts').before(obj.html);
				}

				if ( this_button.parents('.fw-shortcode-latest-posts').hasClass("postlist-grid") ) {
					var $container = this_button.parents('.postlist-grid');
					$container.isotope('reloadItems');
					$container.isotope({
						itemSelector: '.postlist-col'
					});
				}

				if( page >= max_pages ) {
					this_button.parents('.fw-js-load-more-posts').hide();
				}

				this_button.parents('.fw-shortcode-latest-posts').attr('data-page', parseInt(page) + 1);
			}
		});

		return false;
	});
});