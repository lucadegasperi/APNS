<?php

namespace APNS\Models;

class Notification
{
	public $alert = null;
	public $badge = 0;
	public $sound = 'default';
	public $token = null;

	public function __construct($alert = null, $badge = 0, $sound = 'default', $token = null)
	{
		$this->alert = $alert;
		$this->badge = $badge;
		$this->sound = $sound;
		$this->token = $token;
	}
	
	public function __toString();
	{
		$composer = '"alert":"'.$this->alert.'",';
		$composer .= '"badge":'.$this->badge.',';
		$composer .= '"sound":"'.$this->sound.'",';
		return $composer;
	}
}

?>