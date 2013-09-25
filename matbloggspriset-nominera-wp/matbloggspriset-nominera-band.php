<?php
/*
Plugin Name: Matbloggspriset Nominera mig!
Plugin URI: http://www.matbloggspriset.se/labbet/
Description: Visar ett hörnband på din sida som uppmanar besökare att nominera dig för Matbloggsprisets Folkets val.
Version: 1.0
License: GPLv2
Author: Deluxive State / Matbloggspriset
Author URI: http://deluxive.se
Github: https://github.com/Deluxive/matbloggspriset/tree/master/matbloggspriset-nominera-wp
*/


/*
Du kan använda CSS i din bloggs stilmall för att kontrollera z-index eller modifiera den exakta positionen:

.matbloggspriset-nominera-mig img {
	z-index: 10 !important;
	-webkit-transition: opacity 0.2s ease; 
	-moz-transition: opacity 0.2s ease; 
	transition: opacity 0.2s ease;
	
}

.matbloggspriset-nominera-mig img:hover {
	opacity:.8;
}
*/


function render_matbloggspriset_nominera_mig() {
	$ribbon_url = plugins_url('nominera_mig_matbloggspriset.png', __FILE__);
	$action_url = "http://www.matbloggspriset.se/nominera";
	if(function_exists('is_admin_bar_showing')) {
		$padding_top = is_admin_bar_showing() ? 28 : 0;
	} else {
		$padding_top = 0;
	}
//	Egentligen så bör länken öppnas i samma fönster. Men målgruppen föredrar ett nytt fönster. Ändra till _self för öppna i samma fönster
	echo "<a target='_blank' class='matbloggspriset-nominera-mig' href='".$action_url."' title='Nominera mig till Matbloggspriset Folkets val!'><img src='{$ribbon_url}' alt='Nominera mig till Matbloggspriset Folkets val' style='position: fixed; top: ".$padding_top."px; right: 0; z-index: 100000; cursor: pointer; border:none;' /></a>";
}

add_action('wp_footer', 'render_matbloggspriset_nominera_mig');
