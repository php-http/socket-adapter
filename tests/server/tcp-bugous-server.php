<?php

$socketServer = stream_socket_server('127.0.0.1:19999');
$client = stream_socket_accept($socketServer);

fclose($client);
