<?php
/*
Plugin Name: Share Url Content
Plugin URI: http://www.wordpressthemeshock.com/
Description: Lets users share content to your blog/site from an URL. 
Author: ThemeShock
Version: 0.5
Author URI: http://www.wordpressthemeshock.com/
*/

/*  Copyright 2012  (email : blog.iconshock@gmail.com)

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


// Whether to show errors
    ini_set( 'display_errors', 1 );

// Save some usual link
    $root_plugin_dir = plugin_dir_url( __FILE__ );

//Let's get started
    require 'application/shareurlcontent.php';




?>