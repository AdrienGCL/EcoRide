<?php

session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => '.ecoride.local',
    'httponly' => true
]);

session_start();