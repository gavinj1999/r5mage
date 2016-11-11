<?php #!/usr/bin/env /usr/bin/php
error_reporting(E_ALL);
ini_set('display_errors', '1');
set_time_limit(0);

try {

  $payload = json_decode(file_get_contents('php://input'));

}
catch(Exception $e) {

	//log the error
	file_put_contents('/home/risingth/public_html/rising5th/mage/github.txt', $e . ' ' . $payload, FILE_APPEND);

	  exit(0);
}

if ($payload->ref === 'refs/heads/master') {

	$project_directory = '/home/risingth/public_html/rising5th/mage';

	$output = shell_exec("/home/risingth/public_html/rising5th/mage/git-puller.sh");

	//log the request
	file_put_contents('/home/risingth/public_html/rising5th/mage/github.txt', $output, FILE_APPEND);

}
?>