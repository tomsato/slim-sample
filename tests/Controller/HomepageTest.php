<?php

namespace Tests\Controller;

class HomepageTest extends \Tests\BaseTestCase
{
    /**
     * Test that the index route returns a rendered response containing the text 'SlimFramework' but not a greeting
     */
    public function testGetHomepageWithoutName()
    {
        $response = $this->runApp('GET', '/hoge/test');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertContains('testtttt', (string)$response->getBody());
    }
}
