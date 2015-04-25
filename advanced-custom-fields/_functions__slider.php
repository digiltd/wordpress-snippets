<?php

/**
 * Markup for a Flickity slider using an ACF repeater field
 * @return [type] [description]
 */
function digi_get_content_block__slider() {

	global $post;

	$images = get_sub_field( 'slider_images' );

	/**
	 * Using  ACF custom fields with this structure
	 *
	 * slides (repeater)
	 *
	 *  With these sub fields:
	 *
	 *  slide_title (text)
	 *  slide_intro (text area)
	 *  slide_image (image)
	 *
	 * The image field is set to return only the image ID and not the whole object (sizes, captions, titles, urls)
	 *
	 * See the readme to see the differences.
	 *
	 * The markup I am using is for a slider using the excellent [Flickity] (http://flickity.metafizzy.co/)
	 *
	 * You would mark it up for your own needs
	 *
	 */

	if ( have_rows( 'slides' ) ) {

		echo '<div class="m-slider js-flickity" data-flickity-options=\'{   "prevNextButtons": true, "pageDots": true }\'>';

		while ( have_rows( 'slides' ) ) {

			the_row();

			// get id
			$slide_id = get_sub_field( 'slide_image' );

			// define size (thumbnail, medium, large, full or whatever custom sizes you have set in WordPress)
			$size = 'large';

			/**
			 * Get the attributes of the required image using wp_get_attachment_image_src
			 *
			 * It returns an array
			 * (url, width, height), or false, if no image is available.
			 *
			 */

			$slide_src =  wp_get_attachment_image_src( $slide_id, $size );

			/**
			 * Use the data from the array as you need it.
			 *
			 * In the example below I only want to use the image as a background image with a bit of inline css
			 * meaning that I only need the url. So I could have skipped splitting the array into
			 * seperate variables and instead just use
			 *
			 * echo '<div class="m-slider__panel" style="background-image: url('.  $slide_src[0] .')">';
			 *
			 * I seperated them out to help visualise what is going on a bit more.
			 *
			 */

			$slide_url = $slide_src[0];
			$slide_width = $slide_src[1];
			$slide_height = $slide_src[2];

			echo '<div class="m-slider__panel" style="background-image: url('.  $slide_url .')">';
			echo '<div class="m-slider__contents">';

			the_sub_field( 'slide_title' );

			the_sub_field( 'slide_intro' );

			echo '</div>';
			echo '</div>';

		}

		echo '</div>';

	}
};
