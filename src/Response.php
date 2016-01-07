<?php

namespace JeyKeu\Response;

/**
 * Class Response
 *
 * @package Response
 * @author  Azi Baloch <http://azibaloch.com>
 */
class Response
{
    /**
     * @var
     */
    private static $instance;


    /**
     * @param $status
     * @param string $message
     * @param $data
     * @return mixed
     */
    public function json( $status, $message = "", $data = array() )
    {
        return (new Json())->write($status, $message, $data);
    }


    /**
     * @return Response
     */
    private static function getInstance()
    {
        if (!isset( self::$instance )) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param $method
     * @param $args
     * @return mixed
     */
    public static function __callStatic( $method, $args )
    {
        $self = self::getInstance();
        return $self->execute($method, $args);
    }

    /**
     * @param $method
     * @param $args
     * @return mixed
     */
    public function __call( $method, $args )
    {
        return $this->execute($method, $args);
    }

    /**
     * @param $method
     * @param $args
     * @return mixed
     */
    private function execute( $method, $args )
    {

        if ($this->isExecutable($method)) {
            $outPutFormat = $this->getClassName($method);
            return call_user_func_array(array($outPutFormat, 'write'), $args);
        }


        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $args);
        }


        return null;
    }

    /**
     * @param $method
     * @return bool
     */
    private function isExecutable( $method )
    {
        return substr($method, 0, 5) === "write";
    }

    /**
     * @param $method
     * @return string
     */
    private function getClassName( $method )
    {
        return "JeyKeu\\Response\\" . substr($method, 5);
    }


}
