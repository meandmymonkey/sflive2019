<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlogControllerTest extends WebTestCase
{
    public function testEditPageLoads()
    {
        $client = static::createClient(
            [],
            [
                'PHP_AUTH_USER' => 'anna_admin',
                'PHP_AUTH_PW' => 'kitten'
            ]
        );
        $client->request('GET', '/en/admin/post/1');

        $this->assertTrue($client->getResponse()->isSuccessful());
    }
}
