<?php namespace JeyKeu\Response\Contracts;

interface ResponseInterface
{
    /**
     * @param $status
     * @param $message
     * @param array $args
     * @return mixed
     */
    public function write( $status, $message, $args = array('errors' => array()) );
}