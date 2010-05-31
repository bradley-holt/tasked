<?php

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    array (
        'config'    => array (
            APPLICATION_PATH . '/configs/application.ini',
            APPLICATION_PATH . '/configs/database.ini',
        )
    )
);
$application->bootstrap();
