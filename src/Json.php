<?php namespace JunaidQadir\Response;

use JunaidQadir\Response\Contracts\ResponseInterface;

/**
 * Response is an helper class to handle
 * return values, status codes and messages
 * returned from different functions
 *
 * @category
 * @package
 * @author   Junaid Qadir <shekhanzai.baloch@gmail.com>
 * @license  http://opensource.org/licenses/GPL-3.0 GPL 3
 * @version
 * @link
 */
class Json implements ResponseInterface
{
    /**
     * @param $status
     * @param $message
     * @param array $args
     * @return mixed
     */
    public function write( $status, $message = null, $args = array() )
    {
        $data = array(
            'status' => $status,
        );

        if ($message) {
            $data[ 'message' ] = $message;
        }

        return json_encode(array_merge($data, $args));
    }
}
