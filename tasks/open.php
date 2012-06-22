<?php

class APNS_Open_Task
{
	public function run($arguments)
	{
		$apns_cert = Config::get('APNS::config.apns_cert');
		$apns_host = Config::get('APNS::config.apns_host');
		$apns_port = Config::get('APNS::config.apns_port');
		$stream_context = stream_context_create();
		stream_context_set_option($stream_context, 'ssl', 'local_cert', $apns_cert);
		
		$apns = stream_socket_client('ssl://' . $apns_host . ':' . $apns_port, $error, $error_string, 2, STREAM_CLIENT_CONNECT, $stream_context);
		
		/*while (1){
			// check a redis queue for any new push notification to send
		}*/
	}
}

?>