<?php

use Landing\Assets;
use Landing\Hooks;

require_once( __DIR__ . '/core/Assets.php' );
require_once( __DIR__ . '/core/Hooks.php' );

$assets = new Assets();
$assets->init();

$hooks = new Hooks();
$hooks->init();

