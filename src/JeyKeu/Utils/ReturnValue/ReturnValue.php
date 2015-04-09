<?php

/**
 * ReturnValue is an helper class to handle
 * return values, status codes and messages
 * returned from different functions 
 * 
 * @category 
 * @package  
 * @author   Junaid Qadir <shekhanzai.baloch@gmail.com>
 * @license  http://opensource.org/licenses/GPL-3.0 GPL 3
 * @version  
 * @link     
 * 
 */
class ReturnValue {

	const STATUS_OK	 = "OK";
	const STATUS_ERROR = "ERROR";

	/**
	 * 
	 * @param string $functionName
	 * @param const $status OK | ERROR
	 * @param array $returnValue 
	 * @param string $message 
	 * @param bool $json false
	 * @return object | JSON 
	 */
	static public function doReturn($functionName, $status = NULL, $returnValue = array(), $message = NULL, $json = false) {
		if ($status == NULL) {
			$status = self::STATUS_FAIL;
		}
		$return = (object) array(
					"action"		 => $functionName,
					"status"		 => $status,
					"message"		 => $message,
					"returnValue"	 => $returnValue
		);
		if ($json) {
			$return = json_encode($return);
		}
		return $return;
	}

}
