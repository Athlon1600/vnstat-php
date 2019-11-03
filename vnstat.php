<?php

header("Content-Type: text/plain");

exec("dir", $output, $return_var);

echo implode("\r\n", $output);


