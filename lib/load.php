<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

// load the original loading class
require_once($rootKirby . '/lib/load.php');

class paneload extends load {

  static function lib() {

    parent::lib();
    
    $root = c::get('root.panel');
    
    require_once($root . '/lib/spyc.php');
    require_once($root . '/lib/data.php');
    require_once($root . '/lib/actions.php');
    require_once($root . '/lib/me.php');
    require_once($root . '/lib/helpers.php');
    require_once($root . '/lib/settings.php');
    require_once($root . '/lib/form.php');
    require_once($root . '/lib/panel.php');
    require_once($root . '/lib/upload.php');
                    
  }

  static function config() {

    parent::config();

    $root = c::get('root.site') . '/' . c::get('panel.folder') . '/config';

    self::file($root . '/config.php');
    self::file($root . '/config.' . server::get('server_name') . '.php');
    
  }
  
  static function language() {

    $lang = c::get('panel.language');
    $root = c::get('root.panel');
    $file = $root . '/languages/' . $lang . '.php';

    require_once($root . '/languages/en.php');

    if($lang && $lang != 'en' && file_exists($file)) require_once($file);

  }
  
}

?>