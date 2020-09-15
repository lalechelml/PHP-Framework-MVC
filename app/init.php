<?php

require_once 'config/setting.php';


// require_once 'libraries/Base.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Core.php';


spl_autoload_register(function ($className) {
  require_once 'libraries/' . $className . '.php';
});
