<?php
/*
Plugin Name: GitHub Badge
Plugin URI: http://graphicedit.com/blog/plugin/github-badge/
Description: This plug-in allows you to create and place a GitHub css3 badge to your webpage on wordpress. 
Version: 1.0.0
Author: GraphicEdit
Author URI: http://graphicedit.com/

	Copyright 2011  GraphicEdit  (email : contact@graphicedit.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// init
function github_badge_init() {
	
	$path = plugins_url() . '/github-badge';
	wp_enqueue_style( 'github-badge', $path . '/github-badge.css'); 
	
}

function github_badge($atts, $content = null) {

   return '<a href="' .$content. '" title="Follow me on Github" class="followgithub">
   <img class="followgithubimg" src="https://github.com/favicon.ico" /> Follow me on Github</a>';
}
	

/*-------------- settings ---------------------------------*/
add_action( 'init', 'github_badge_init' );//init
add_shortcode( 'GHB', 'github_badge' );//[GHB]xxx[/GHB]

?>