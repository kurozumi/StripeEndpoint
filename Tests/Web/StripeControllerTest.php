<?php
/**
 * This file is part of StripeEndpoint
 *
 * Copyright(c) Akira Kurozumi <info@a-zumi.net>
 *
 * https://a-zumi.net
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\StripeEndpoint\Tests\Web;

use Eccube\Tests\Web\AbstractWebTestCase;

class StripeControllerTest extends AbstractWebTestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    public function testルーティングテスト()
    {
        $this->client->request('GET', $this->generateUrl('stripe_webhook_endpoint'));

        self::assertTrue($this->client->getResponse()->isSuccessful());
    }
}