<?php

/**
 * Class ResponseTest
 */
class ResponseTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_gets_json_string()
    {
        $response     = new JeyKeu\Response\Response();
        $shouldOutPut = json_encode(array('status' => 'success', 'message' => 'Thank You'));
        $data         = $response->json('success', 'Thank You');
        $this->assertEquals($shouldOutPut, $data);
    }

    /**
     * @test
     */
    public function it_gets_json_string_using_magic_methods()
    {
        $response     = new JeyKeu\Response\Response();
        $shouldOutPut = json_encode(array('status' => 'success', 'message' => 'Thank You'));
        $data         = $response->writeJson('success', 'Thank You');
        $this->assertEquals($shouldOutPut, $data);
    }

    /**
     * @test
     */
    public function it_calls_existing_method_statically()
    {
        $shouldOutPut = json_encode(array('status' => 'success', 'message' => 'Thank You'));
        $data         = JeyKeu\Response\Response::json('success', 'Thank You');
        $this->assertEquals($shouldOutPut, $data);
    }

    /**
     * @test
     */
    public function it_accepts_extra_arguments()
    {
        $response     = new JeyKeu\Response\Response();
        $shouldOutPut = json_encode(array(
            'status'  => 'success',
            'message' => 'Thank You',
            'errors'  => array('username' => 'please provide a valid username')
        ));

        $data = $response->writeJson('success', 'Thank You',
            array('errors' => array('username' => 'please provide a valid username')));
        $this->assertEquals($shouldOutPut, $data);
    }

    /**
     * @test
     */
    public function it_gets_json_without_message_parameter()
    {
        $response     = new JeyKeu\Response\Response();
        $shouldOutPut = json_encode(array('status' => 'success'));
        $data         = $response->writeJson('success');
        $this->assertEquals($shouldOutPut, $data);
    }

}
