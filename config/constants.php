<?php

//css+images+js==document_root
// root www.

///usr/share/php/PHP/CodeSniffer/autoload.php


define('ROOT_WWW','');
 //define('ROOT_WWW','/alon-web/olive');


define('SITE_DIR',ROOT_DIR . "/app");
define('SITE_WWW_DIR',ROOT_WWW . "/app");





define('APPROOT',ROOT_DIR . "/app");


// URL Root
define('URLROOT', 'http://user-post.local');
// Site Name
define('SITENAME', 'Test post for users');
// App Version
define('APPVERSION', '1.0.0');






define('CONTROLLERS_DIR', SITE_DIR . "/controllers");
define('CONTROLLERS_WWW_DIR',SITE_WWW_DIR . "/controllers");


define('LIBRARIES_DIR', SITE_DIR . "/libraries");
define('LIBRARIES_WWW_DIR',SITE_WWW_DIR . "/libraries");


define('MODELS_DIR', SITE_DIR . "/models");
define('MODELS_DIR',SITE_WWW_DIR . "/models");



define('CONTROLLERS_DIR', SITE_DIR . "/controllers");
define('CONTROLLERS_WWW_DIR',SITE_WWW_DIR . "/controllers");




define('VIEW_DIR', SITE_DIR . "/views");
define('VIEW_WWW_DIR',SITE_WWW_DIR . "/views");


define('HELPERS_DIR', SITE_DIR . "/helpers");
define('HELPERS_WWW_DIR',SITE_WWW_DIR . "/helpers");





define('PUBLIC_DIR', ROOT_DIR . "/public");
define('PUBLIC_WWW_DIR', ROOT_DIR . "/public");


define ('CSS_DIR',PUBLIC_WWW_DIR . "/css");
define ('CSS_WWW_DIR',PUBLIC_WWW_DIR . "/css");


define ('JS_DIR',PUBLIC_WWW_DIR . "/js");
define ('JS_WWW_DIR',PUBLIC_WWW_DIR . "/js");


// lib dir -
define('LIB_DIR', ROOT_DIR . "/lib");
define('LIB_WWW_DIR', ROOT_WWW . "/lib");


define('TASK_DIR', ROOT_DIR . "/mytinytodo_a");
define('TASK_WWW_DIR', ROOT_WWW . "/mytinytodo_a");


define('FORUMDEC_DIR', ROOT_DIR . "/show_decForum");
define('FORUMDEC_WWW_DIR', ROOT_WWW . "/show_decForum");


// html dir - placed all the html form etc..
define('HTML_DIR', ROOT_DIR . "/html");
define('HTML_WWW_DIR', ROOT_WWW . "/html");


//define ('CSS_DIR',HTML_WWW_DIR . "/css");
//define ('CSS_WWW_DIR',HTML_WWW_DIR . "/css");


define("ADMIN_DIR",ROOT_DIR . "/admin");
define("ADMIN_WWW_DIR",ROOT_WWW . "/admin");



define ('PDF_DIR',HTML_DIR . "/pdfs/");
define ('PDF_WWW_DIR',HTML_WWW_DIR . "/pdfs/");




define ('CONVERT_PDF_TO_IMG_DIR', ROOT_DIR .'/images/convertPdfToImg/');//IMAGE_FOLDER
define('CONVERT_PDF_TO_IMG_WWW_DIR', ROOT_WWW ."/images/convertPdfToImg/");






define("INCLUDES_DIR",ROOT_DIR . "/");
define("INCLUDES_WWW_DIR",ROOT_WWW . "/includes");

define("USER_DIR",ROOT_DIR . "/");
define("USER_WWW_DIR",ROOT_WWW . "/");

define("WORD_COUNT_MASK", "/\p{L}[\p{L}\p{Mn}\p{Pd}'\x{2019}]*/u");
 /* set version number */
define("VERSION", "1.0");                              // apps version

/* assign php configuration variables */
ini_set("track_errors", "1");                          // error tracking

/* assign base system constants */
define("SITE_URL", "http://olive.local");     // base site url


//define("SITE_DIR", "/");                               // base site directory
define("BASE_DIR", $_SERVER["DOCUMENT_ROOT"]);         // base file directory
define("SELF", $_SERVER["PHP_SELF"]);                  // self file directive
define("FILEMAX", 1500000);                             // file size max


# Language pack
$config['lang'] = "en";

$config = array();



 define ('BASE_URI',ROOT_WWW. '/get_in_out2/');
 define ('BASE_URL', '127.0.0.1');
 define ('PDFS_DIR', ROOT_DIR . '/get_in_out2/pdfs/');


 //define('DB_HOST', '192.168.0.204');
 define('DB_HOST', '127.0.0.1');
 define('DB_USER', 'root');
 define('DB_PASSWORD','alon');


//define('DB_USER', 'alon');
//define('DB_PASSWORD','qwerty');
 define('DB_TBL_PREFIX', '');



 define('DB_DATABASE','user_post');
 define('DB_SCHEMA', 'user_post');



?>
