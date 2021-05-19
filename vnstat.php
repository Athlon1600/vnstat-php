<?php

header("Content-Type: text/plain");
header("X-Robots-Tag: noindex");

//  Note that if the array already contains some elements, exec() will append to the end of the array.
exec("vnstat -d", $output, $return_var);

// http://tldp.org/LDP/abs/html/exitcodes.html
if ($return_var == 127) {
    die("Error: vnstat not installed!");
}

echo implode("\r\n", $output);
