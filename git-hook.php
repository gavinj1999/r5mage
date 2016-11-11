<?php #!/usr/bin/env /usr/bin/php
error_reporting(E_ALL);
ini_set('display_errors', '1');
set_time_limit(0);
if(function_exists('exec')) {
    echo "exec is enabled";
}
exec(dirname(__FILE__) . '/git-puller.sh' );
?>
