<?php
/*
Plugin Name: WP E-commerce Expanding Categories
Plugin URI: http://www.sitecoders.net/wordpress-plugins/wp-e-commerce-expanding-categories/
Description: A VERY simple plugin to make WP e-commerce categories expandable.
Version: 0.1.1
Author: Adam Sargant
Author URI: http://www.sitecoders.net
License: GPL2
Copyright 2011  Adam Sargant  (email : adam@sargant.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if (!is_admin() ) {
	add_action('init','aphs_wpecec_collapse');
	
	function aphs_wpecec_collapse(){
		wp_enqueue_script('jquery');
		wp_enqueue_script('aphs_wpecec_collapsejs', plugin_dir_url(__FILE__).'js/collapse.js');
		wp_enqueue_style('aphs_wpecec_collapsecss', plugin_dir_url(__FILE__).'css/collapse.css');
	}
}
?>
