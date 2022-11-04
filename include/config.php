<?php

/**
 * Database and URL configuration
 *
 * @author     Brian Moon <brian@moonspot.net>
 * @copyright  1997-Present Brian Moon
 * @package    Wordcraft
 * @license    http://wordcraft.googlecode.com/files/license.txt
 * @link       http://wordcraft.googlecode.com/
 *
 */

// Check that this file is not loaded directly.
if ( basename( __FILE__ ) == basename( $_SERVER["PHP_SELF"] ) ) exit();

$WC = array(

    // Database options
    "db_prefix"   => "wc",
    "db_server"   => "http://localhost:8889",
    "db_name"     => "localhost",
    "db_user"     => "root",
    "db_password" => "root",

    // URL formats
    "url_formats" => array(
            "main"     => array("page"=>"index.php",    "format"=>""),
            "post"     => array("page"=>"post.php",     "format"=>"?post_id=%d"),
            "post_sef" => array("page"=>"",             "format"=>"%s"),
            "page"     => array("page"=>"page.php",     "format"=>"?page_id=%d"),
            "page_sef" => array("page"=>"",             "format"=>"%s"),
            "comment"  => array("page"=>"comment.php",  "format"=>""),
            "tag"      => array("page"=>"tag.php",      "format"=>"?tag=%s"),
            "feed"     => array("page"=>"feed.php",     "format"=>"?type=%s&tag=%s"),
            "pingback" => array("page"=>"linkback.php", "format"=>""),
            "search"   => array("page"=>"search.php",   "format"=>""),
    ),

);

?>
