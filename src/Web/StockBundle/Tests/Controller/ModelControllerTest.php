<?php

namespace Web\StockBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ModelControllerTest extends WebTestCase
{
    public function testCollection()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/collection');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{id}/{slug}');
    }

    public function testCollectioneng()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/en/collection');
    }

    public function testShoweng()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/en/{id}/{slugENG}');
    }

    public function testCart()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cart');
    }

    public function testCarteng()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/en/cart');
    }

    public function testAddcart()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addCart');
    }

    public function testClearcart()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/clearCart');
    }

}
