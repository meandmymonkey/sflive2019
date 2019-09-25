<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpKernel\Client;

class BlogControllerTest extends WebTestCase
{
    /**
     * @var Client
     */
    private $client;

    public function testEditPageLoads()
    {
        $this->client->request('GET', '/en/admin/post/1');
        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }

    public function testEditBlogTitle()
    {
        $this->client->request('GET', '/en/admin/post/1/edit');

        $form = $this->client->getCrawler()->selectButton('Save changes')->form();
        $this->client->submit($form, ['post[title]' => 'Test']);

        $this->assertTrue($this->client->getResponse()->isRedirect());

        $crawler = $this->client->followRedirect();
        $msg = $crawler->filter('div.alert-success')->text();

        $this->assertContains('Post updated successfully!', $msg);
    }

    protected function setUp()
    {
        $this->client = static::createClient(
            [],
            [
                'PHP_AUTH_USER' => 'anna_admin',
                'PHP_AUTH_PW' => 'kitten'
            ]
        );
    }
}
