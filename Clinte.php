<?php


$SOCKET=socket_create(AF_INET,SOCK_DGRAM,0);
socket_connect($SOCKET,"localhost:63342","8080");
socket_write($SOCKET,'Salam',5);
echo "OK";



?>