<?php namespace JeyKeu\Utils\ReturnValue;

/*
 * ReturnValue is an helper class to handle
 * return values, status codes and messages
 * returned from different functions 
 * 
 * @category 
 * @package  
 * @author   Junaid Qadir <shekhanzai.baloch@gmail.com>
 * @license  http://opensource.org/licenses/GPL-3.0 GPL 3
 * @version  
 * @link     https://gist.github.com/a4f5b9260592134df4e3.git
 * 
 */

class ReturnValue
{

    const STATUS_OK    = "OK";
    const STATUS_ERROR = "ERROR";

    /**
     * 
     * @param string $functionName
     * @param const $status
     * @param array $returnValue 
     * @param string $message
     * @param bool $json false
     * @return object|JSON 
     */
    public static function doReturn(
    $functionName, $status = NULL, $returnValue = array(), $message = NULL, $json = FALSE)
    {
        if ($status == NULL) {
            $status = self::STATUS_ERROR;
        }
        $return = (object) array(
                    "action"      => $functionName,
                    "status"      => $status,
                    "message"     => $message,
                    "returnValue" => $returnValue
        );
        if ($json) {
            $return = json_encode($return);
        }
        return $return;
    }
}
