<?php
//header("HTTP/1.1 418 I'm a teapot");
http_response_code(418);
echo "I'm a teapot";
?>
