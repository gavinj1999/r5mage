<?php #!/usr/bin/env /usr/bin/php
error_reporting(E_ALL);
ini_set('display_errors', '1');
set_time_limit(0);

try {

exec(dirname(__FILE__) . '/git-puller.sh' );

}
catch(Exception $e) {

	//log the error
	file_put_contents('/home/risingth/public_html/rising5th/mage/github.txt', $e . ' ' . $payload, FILE_APPEND);

	  exit(0);
}

if ($payload->ref === 'refs/heads/master') {


	//log the request
	file_put_contents('/home/risingth/public_html/rising5th/mage/github.txt', $output, FILE_APPEND);

}
?>
