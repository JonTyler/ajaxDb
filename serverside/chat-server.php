<?php
/**
 * Created by PhpStorm.
 * User: Jon
 * Date: 2017-05-02
 * Time: 4:01 PM
 */

use Ratchet\Server\IoServer;
use Database\Chat;

require dirname(__DIR__) . '/vendor/autoload.php';

$server = IoServer::factory(
    new Chat(),
    8080
);

$server->run();