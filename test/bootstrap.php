<?php
// Load WP_Mock and set up environment
require_once __DIR__ . '/../vendor/autoload.php';

WP_Mock::setUsePatchwork(true);
WP_Mock::bootstrap();
