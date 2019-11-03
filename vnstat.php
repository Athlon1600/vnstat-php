<?php

header("Content-Type: text/plain");

exec("vnstat -d", $output, $return_var);

echo implode("\r\n", $output);
