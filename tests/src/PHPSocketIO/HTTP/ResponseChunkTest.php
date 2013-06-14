<?php
namespace PHPSocketIO\HTTP;

/**
 * Test class for Request.
 * Generated by PHPUnit on 2013-05-30 at 13:37:50.
 */
class ResponseChunkTest extends \PHPUnit_Framework_TestCase
{
    public function test__toString()
    {
        $content = md5(rand().  microtime());
        $response = new ResponseChunk($content);
        $output = $response->__toString();
        $this->assertEquals(sprintf("%x\r\n%s\r\n", strlen($content), $content), $output);
    }
}