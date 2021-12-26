<?php

set_time_limit(0);
$SOCKET=socket_create(AF_INET,SOCK_DGRAM,0);
$Result=socket_bind($SOCKET,'localhost:63342','8080');
$Result=socket_listen($SOCKET,3);

echo "OK";

do
{
    $accept = socket_accept($SOCKET);
    $msg = socket_read($SOCKET, 1024);
    echo $msg;
}
while(true);



?>