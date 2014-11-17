<?php

class PostControllerTest extends TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testIndexAction()
    {
        $crawler = $this->client->request('GET', '/');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testCreateAction()
    {
        $crawler = $this->client->request('GET', 'posts/create');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testStoreAction()
    {
        $crawler = $this->client->request('GET', 'posts/store');

        $this->assertTrue($this->client->getResponse()->isOk());
    }
}