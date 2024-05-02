<?php
function webspeed_person_data() {
	echo '<ul class="kontakt-con personer">';

	if (get_field('titel')) {
		echo '<li class="title">' . get_field('titel') . '</li>';
	}
	if (get_field('initialer')) {
		echo '<li class="initialer">Initialer: ' . get_field('initialer') . '</li>';
	}

	if (get_field('mobiltelefon')) {
		echo '<li class="k-tel"><span class="k-label">';
		echo svg_url(1);
		echo '</span><span class="k-info">';
		echo '<span class="data"><a href="tel:' . str_replace(' ', '', get_field('mobiltelefon')) . '">' . get_field('mobiltelefon') . '</a></span>';
		echo '</span></li>';
	}

	if (get_field('telefon')) {
		echo '<li class="k-tel-2"><span class="k-label">';
		echo svg_url(1);
		echo '</span><span class="k-info">';
		echo '<span class="data"><a href="tel:' . str_replace(' ', '', get_field('telefon')) . '">' . get_field('telefon') . '</a></span>';
		echo '</span></li>';
	}

	if (get_field('email')) {
		$mail = get_field('email');
		echo '<li class="k-mail"><span class="k-label">';
		echo svg_url(2);
		echo '</span><span class="k-info">';
		if (get_field('klik_tekst_email')):
			echo '<a href="mailto:' . get_field('email') . '">' . get_field('klik_tekst_email') . '</a>';
		else:
			echo '<a href="mailto:' . get_field('email') . '">' . $mail . '</a>';
		endif;
		echo '</span></li>';
	}
	if (get_field('email_sec')) {
		$mail_sec = get_field('email_sec');
		echo '<li class="k-mail"><span class="k-label">';
		echo svg_url(2);
		echo '</span><span class="k-info">';
		if (get_field('klik_tekst_email')):
			echo '<a href="mailto:' . get_field('email_sec') . '">' . get_field('klik_tekst_email_sec') . '</a>';
		else:
			echo '<a href="mailto:' . get_field('email_sec') . '">' . $mail_sec . '</a>';
		endif;
		echo '</span></li>';
	}
	if (get_field('vej') || get_field('postnr') || get_field('by')) {
		echo '<li class="k-adresse">';
		if (get_field('vej')) {
			$vej = get_field('vej');
			echo $vej;
		}
		if (get_field('postnr')) {
			echo '<br />';
			$postnr = get_field('postnr');
			echo $postnr . ' ';

		}
		if (get_field('by')) {
			$by = get_field('by');
			echo $by;
		}
		echo '</li>';
	}

	if (get_field('hjemmeside')) {
		if (get_field('klik_tekst')):
			echo '<li class="k-www"><span class="k-label">';
			echo svg_url(4);
			echo '</span><span class="k-info">';
			echo '<a href="' . get_field('hjemmeside') . '" target="_blank">' . get_field('klik_tekst') . '</a>';
			echo '</span></li>';
		else:
			// Remove http:// and https://
			$clean_url = get_field('hjemmeside');
			$clean_url = preg_replace("#^[^:/.]*[:/]+#i", "", $clean_url);

			echo '<li class="k-www"><span class="k-label">';
			echo svg_url(4);
			echo '</span><span class="k-info">';
			echo '<a href="' . get_field('hjemmeside') . '" target="_blank">' . $clean_url . '</a>';
			echo '</span></li>';
		endif;
	}

	if (get_field('facebook') || get_field('linkedin') || get_field('instagram')) {
		echo '<li class="k-some">';
		if (get_field('facebook')) {
			echo '<a href="' . get_field('facebook') . '" class="fb" target="_blank">' . svg_url(7) . '</a>';
		}

		if (get_field('linkedin')) {
			echo '<a href="' . get_field('linkedin') . '" class="li" target="_blank">' . svg_url(6) . '</a>';
		}

		if (get_field('instagram')) {
			echo '<a href="' . get_field('instagram') . '" class="in" target="_blank">' . svg_url(3) . '</a>';
		}
		echo '</li>';
	}

	echo '</ul>';

	if (has_excerpt()) {
		echo '<div class="person-excerpt">';
		the_excerpt();
		echo '</div>';
	}

	$content = get_the_content();
	if (!empty($content) && !is_single()) {
		web_read_more();
	}
}

function webspeed_person_img() {
	if (has_post_thumbnail()) {
		$content = get_the_content();
		if (!empty($content)):
			echo '<div class="shortcode-person-img img-zoom">';
			echo '<a href="' . get_the_permalink() . '">';
			the_post_thumbnail('large');
			echo '</a>';
			echo '</div>';
		else:
			echo '<div class="shortcode-person-img img-zoom">';
			the_post_thumbnail('large');
			echo '</div>';
		endif;
	}
}

function webspeed_person_titel() {
	$content = get_the_content();
	if (!empty($content)):
		echo '<h4 class="person-titel"><a href="' . get_the_permalink() . '">';
		the_title();
		echo '</a></h4>';
	else:
		the_title('<h4 class="person-titel">', '</h4>');
	endif;
}