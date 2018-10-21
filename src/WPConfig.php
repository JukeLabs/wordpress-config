<?php

declare(strict_types=1);

class WPConfig
{
  public static function init()
  {

    global $table_prefix;
    $webroot = rtrim($_SERVER["DOCUMENT_ROOT"], '/');
    $root = realpath($webroot . '/..');

    if ( file_exists($webroot . '/wp-config-local.php') ) {
    	require_once($webroot . '/wp-config-local.php');
      return;
    }

    if ( file_exists($root . '/config/app.php') ) {
    	require_once($root . '/config/app.php');
    } else {
      require_once(__DIR__ . '/config/app.php');
    }
  }
}
?>
